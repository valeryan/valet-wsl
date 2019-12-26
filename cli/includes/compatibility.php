<?php

/**
 * Check the system's compatibility with Valet.
 */
$inValidation = (strpos($_SERVER['SCRIPT_NAME'], 'phpcs') || strpos($_SERVER['SCRIPT_NAME'], 'phpcbf')) !== false;

$inTestingEnvironment = strpos($_SERVER['SCRIPT_NAME'], 'phpunit') !== false;
if (PHP_OS != 'Linux' && !$inTestingEnvironment && !$inValidation) {
    echo 'Valet only supports Linux.' . PHP_EOL;

    exit(3);
}

if (version_compare(PHP_VERSION, '7.2', '<')) {
    echo "Valet requires PHP 7.2 or later.";

    exit(3);
}
