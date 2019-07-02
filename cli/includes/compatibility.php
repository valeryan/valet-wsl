<?php

/**
 * Check the system's compatibility with Valet.
 */
$inTestingEnvironment = strpos($_SERVER['SCRIPT_NAME'], 'phpunit') !== false;
$inValidation = (strpos($_SERVER['SCRIPT_NAME'], 'phpcs') || strpos($_SERVER['SCRIPT_NAME'], 'phpcbf')) !== false;
if (PHP_OS != 'Linux' && ! $inTestingEnvironment && ! $inValidation) {
    echo 'Valet only supports Linux.'.PHP_EOL;

    exit(3);
}

if (version_compare(PHP_VERSION, '5.6', '<')) {
    echo "Valet requires PHP 5.6 or later.";

    exit(3);
}
