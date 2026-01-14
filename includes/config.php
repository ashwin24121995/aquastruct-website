<?php
/**
 * AQUASTRUCT Configuration File
 * Company: AQUASTRUCT CONSTRUCTION PRIVATE LIMITED
 */

// Start session
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Site Configuration
define('SITE_NAME', 'AQUASTRUCT');
define('SITE_URL', 'http://localhost'); // Change to your domain
define('SITE_EMAIL', 'support@coustommatch.com');

// Company Information
define('COMPANY_NAME', 'AQUASTRUCT CONSTRUCTION PRIVATE LIMITED');
define('COMPANY_CIN', 'U41001JK2023PTC014834');
define('COMPANY_PAN', 'AAZCA0661R');
define('COMPANY_ADDRESS', 'C/O LAXMAN DASS, KHANDAK, PANTHAL KATRA, Panthal, Udhampur, Udhampur, Jammu and Kashmir 182320, India');

// Asset Paths
define('ASSETS_URL', SITE_URL . '/assets');
define('IMAGES_URL', ASSETS_URL . '/images');
define('CSS_URL', ASSETS_URL . '/css');
define('JS_URL', ASSETS_URL . '/js');

// Game Configuration
define('STARTING_CREDITS', 1000);
define('MIN_BET', 1);
define('MAX_BET', 500);

// Initialize credits if not set
if (!isset($_SESSION['credits'])) {
    $_SESSION['credits'] = STARTING_CREDITS;
}

// Error Reporting (set to 0 in production)
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Timezone
date_default_timezone_set('Asia/Kolkata');

// CSRF Token
if (!isset($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
?>
