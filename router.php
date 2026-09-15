<?php
/**
 * Local-dev router for `php -S`, mirroring the .htaccess rewrite rule that
 * strips .php extensions (`/ai-course` -> `ai-course.php`). Production
 * (Apache + .htaccess) never touches this file — `php -S` doesn't read
 * .htaccess at all, so without this router every extensionless URL falls
 * through to index.php instead of the intended page. Usage:
 *   php -S 127.0.0.1:8000 router.php
 * See CLAUDE.md "Running locally".
 */

$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$path = urldecode($path);

// Real files/directories (static assets, an explicit "foo.php" request,
// robots.txt, etc.) are served as-is by the built-in server.
$file = __DIR__ . $path;
if ($path !== '/' && file_exists($file) && !is_dir($file)) {
    return false;
}

// Extensionless path -> matching .php file, same as the .htaccess rule.
if (strpos($path, '.') === false) {
    $candidate = $path === '/'
        ? __DIR__ . '/index.php'
        : __DIR__ . rtrim($path, '/') . '.php';
    if (file_exists($candidate)) {
        require $candidate;
        return true;
    }
    // Explicit 404 here — without this, PHP's built-in server falls back
    // to index.php for any unmatched path when index.php exists, which
    // would silently serve the homepage for a genuine typo/404 instead.
    http_response_code(404);
    echo "404 Not Found: $path";
    return true;
}

return false; // real (non-extensionless) path that isn't a file -> 404
