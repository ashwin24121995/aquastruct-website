<?php
/**
 * AQUASTRUCT Utility Functions
 */

function sanitize_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
    return $data;
}

function get_credits() {
    return isset($_SESSION['credits']) ? $_SESSION['credits'] : STARTING_CREDITS;
}

function format_credits($credits) {
    return number_format($credits);
}

function verify_csrf_token($token) {
    return isset($_SESSION['csrf_token']) && hash_equals($_SESSION['csrf_token'], $token);
}

function get_csrf_token() {
    return $_SESSION['csrf_token'] ?? '';
}
?>
