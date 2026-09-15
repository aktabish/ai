<?php
/**
 * Minimal .env loader — no Composer/vendor dependency by design, since this
 * project has no build step.
 *
 * Loads KEY=VALUE pairs from .env (repo root) into getenv()/$_ENV, but only
 * for keys that aren't already set — a real server environment variable
 * always wins over the file. .env itself is gitignored; see .env.example
 * for the keys this project expects and .htaccess for the rule blocking
 * direct web access to .env and this file.
 */

if (!function_exists('env')) {
    function load_env(string $path): void
    {
        static $loaded = false;
        if ($loaded) {
            return;
        }
        $loaded = true;

        if (!is_readable($path)) {
            return;
        }

        $lines = file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        foreach ($lines as $line) {
            $line = trim($line);
            if ($line === '' || substr($line, 0, 1) === '#') {
                continue;
            }

            $parts = explode('=', $line, 2);
            if (count($parts) !== 2) {
                continue;
            }

            $key = trim($parts[0]);
            $value = trim($parts[1]);
            // Strip a single layer of matching quotes, if present.
            if (strlen($value) >= 2 && $value[0] === $value[-1] && ($value[0] === '"' || $value[0] === "'")) {
                $value = substr($value, 1, -1);
            }

            if ($key !== '' && getenv($key) === false) {
                putenv("$key=$value");
                $_ENV[$key] = $value;
            }
        }
    }

    function env(string $key, ?string $default = null): ?string
    {
        load_env(__DIR__ . '/.env');
        $value = getenv($key);
        return $value !== false ? $value : $default;
    }
}
