#!/usr/bin/env bash
#
# Local smoke test — run before pushing any change to main.
# This project has no automated test suite beyond CI's `php -l`, so this
# script is the closest thing to a real gate for Step 5 of
# .ai/workflow.md. It is NOT wired into CI (it needs a real/test MySQL
# database with the schema from data.sql loaded, which CI doesn't provide).
#
# Requires:
#   - PHP CLI
#   - A .env (copy .env.example) pointing at a local/test MySQL database
#     with data.sql imported
#
# Usage:
#   ./tests/smoke.sh

set -euo pipefail

ROOT_DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")/.." && pwd)"
HOST="127.0.0.1"
PORT="8000"
BASE="http://$HOST:$PORT"

cd "$ROOT_DIR"

if [ ! -f .env ]; then
  echo "No .env found. Copy .env.example to .env and point it at a test database first." >&2
  exit 1
fi

php -S "$HOST:$PORT" >/tmp/ailearner-smoke-server.log 2>&1 &
SERVER_PID=$!
trap 'kill "$SERVER_PID" 2>/dev/null || true' EXIT

# Give the built-in server a moment to come up.
for _ in $(seq 1 20); do
  if curl -s -o /dev/null "$BASE/"; then
    break
  fi
  sleep 0.25
done

fail=0

check() {
  local path="$1" expect="$2"
  local code
  code=$(curl -s -o /dev/null -w '%{http_code}' --max-time 15 "$BASE$path")
  if [ "$code" != "$expect" ]; then
    echo "FAIL  $path -> $code (expected $expect)"
    fail=1
  else
    echo "OK    $path -> $code"
  fi
}

check "/index.php" 200
check "/signin.php" 200
check "/signup.php" 200
check "/contact.php" 200
check "/ai-course.php" 200
check "/contact-submit.php" 200      # GET, no POST data -> "Invalid request."
check "/submit_quiz_result.php" 200  # GET -> JSON error body, still HTTP 200

echo
if [ "$fail" -eq 0 ]; then
  echo "Smoke test passed."
else
  echo "Smoke test FAILED. Fix before pushing to main."
fi
exit $fail
