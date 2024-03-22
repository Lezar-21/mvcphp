<?php
// Application default settings
// Error reporting
error_reporting(E_ALL);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
// Timezone
date_default_timezone_set ('America/Mexico_City');
$settings = [];
// Database settings
$settings = (require __DIR__ . '/env.php')($settings);
return $settings;