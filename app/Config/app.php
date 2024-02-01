<?php
// Environment configuration
define('DEV', $_ENV['DEV']);

// Timezone configuration
const TIMEZONE = 'UTC'; // https://www.php.net/manual/en/timezones.php

// App configuration
define('APP_NAME', $_ENV['APP_NAME']);
define('APP_VERSION', $_ENV['APP_VERSION']);
define('APP_URL', $_ENV['APP_URL']);

// Last update
define('LAST_UPDATE', $_ENV['LAST_UPDATE']);

// Redirect configuration
const REDIRECT = 'home';
const ERROR_AUTO_REDIRECT = true;

// Simpl information
const SIMPL_VERSION = '1.2.0';
const SIMPL_SUMMARY = 'Changes to URL builder and .htaccess, .env now used for configuration, and a few other minor changes and fixes.';
const SIMPL_RELEASE_DATE = '2024-01-29';
