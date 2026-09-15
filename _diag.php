<?php
// Temporary diagnostic file — safe to delete once the outage is resolved.
// Deliberately has zero dependencies (no db.php/env.php/.htaccess-sensitive
// paths) to isolate whether PHP itself executes on this host at all.
header('Content-Type: text/plain');
echo "PHP OK\n";
echo "PHP_VERSION: " . PHP_VERSION . "\n";
echo "SAPI: " . php_sapi_name() . "\n";
echo "time: " . date('c') . "\n";
