<?php
/**
 * Security Headers Configuration
 * 
 * This file implements all required security headers to comply with
 * Google Ads policies and protect against common web vulnerabilities.
 * 
 * MUST be included at the very beginning of every PHP file before any output.
 */

// Remove exposed server information
header_remove('X-Powered-By');

// Content Security Policy (CSP)
// Allows self-hosted resources, inline styles/scripts (for current implementation),
// and Google Fonts. This prevents unauthorized script injection.
header("Content-Security-Policy: default-src 'self'; script-src 'self' 'unsafe-inline' https://fonts.googleapis.com; style-src 'self' 'unsafe-inline' https://fonts.googleapis.com; img-src 'self' data: https:; font-src 'self' https://fonts.googleapis.com https://fonts.gstatic.com; connect-src 'self'; frame-ancestors 'none'; base-uri 'self'; form-action 'self'");

// Prevent clickjacking attacks by disallowing the site to be framed
header("X-Frame-Options: DENY");

// Prevent MIME type sniffing
header("X-Content-Type-Options: nosniff");

// Enable XSS protection (legacy browsers)
header("X-XSS-Protection: 1; mode=block");

// Control referrer information
header("Referrer-Policy: strict-origin-when-cross-origin");

// Enforce HTTPS for all future requests (1 year)
header("Strict-Transport-Security: max-age=31536000; includeSubDomains");

// Permissions Policy (formerly Feature-Policy)
// Restrict access to sensitive browser features
header("Permissions-Policy: geolocation=(), microphone=(), camera=(), payment=()");

// Configure secure session cookies
if (session_status() === PHP_SESSION_NONE) {
    // Set secure session cookie parameters
    session_set_cookie_params([
        'lifetime' => 0,              // Session cookie (expires when browser closes)
        'path' => '/',                // Available across entire domain
        'domain' => '',               // Current domain
        'secure' => true,             // Only send over HTTPS
        'httponly' => true,           // Not accessible via JavaScript (XSS protection)
        'samesite' => 'Lax'          // CSRF protection
    ]);
    
    // Enable strict session mode (reject uninitialized session IDs)
    ini_set('session.use_strict_mode', '1');
    
    // Prevent session fixation attacks
    ini_set('session.use_only_cookies', '1');
    
    // Hide PHP session name
    ini_set('session.name', '_sid');
    
    // Start the session
    session_start();
    
    // Regenerate session ID periodically to prevent session fixation
    if (!isset($_SESSION['created'])) {
        $_SESSION['created'] = time();
    } else if (time() - $_SESSION['created'] > 1800) {
        // Regenerate session ID every 30 minutes
        session_regenerate_id(true);
        $_SESSION['created'] = time();
    }
}

// Additional PHP security settings
ini_set('expose_php', 'Off');           // Hide PHP version
ini_set('display_errors', 'Off');       // Don't display errors to users
ini_set('log_errors', 'On');            // Log errors instead

// Set secure error reporting for production
error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED & ~E_STRICT);
?>
