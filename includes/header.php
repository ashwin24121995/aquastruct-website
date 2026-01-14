<?php
if (!function_exists('format_credits')) {
    require_once __DIR__ . '/functions.php';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($page_title) ? $page_title . ' - ' : ''; ?>AQUASTRUCT</title>
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/additional.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&family=Inter:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>
    <header class="site-header">
        <div class="container">
            <div class="logo">
                <a href="/"><img src="/assets/images/logos/logo.webp" alt="AQUASTRUCT" style="height: 45px;"></a>
            </div>
            <nav class="main-nav">
                <a href="/">Home</a>
                <a href="/games.php">Games</a>
                <a href="/about.php">About</a>
                <a href="/contact.php">Contact</a>
            </nav>

        </div>
    </header>
    <main>
