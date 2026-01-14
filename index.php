<?php require_once 'includes/config.php'; require_once 'includes/functions.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AQUASTRUCT - Free Casino Gaming Platform</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <header>
        <h1>AQUASTRUCT</h1>
        <p>Credits: <?php echo format_credits(get_credits()); ?></p>
    </header>
    <main>
        <section class="hero">
            <h2>Welcome to AQUASTRUCT Gaming</h2>
            <p>Free Casino Entertainment</p>
        </section>
        <section class="games">
            <h3>Our Games</h3>
            <div class="game-grid">
                <div class="game-card"><h4>DICE</h4><a href="games/dice.php">Play Now</a></div>
                <div class="game-card"><h4>MINES</h4><a href="games/mines.php">Play Now</a></div>
                <div class="game-card"><h4>PLINKO</h4><a href="games/plinko.php">Play Now</a></div>
                <div class="game-card"><h4>CHICKEN</h4><a href="games/chicken.php">Play Now</a></div>
            </div>
        </section>
    </main>
    <footer>
        <p>&copy; 2026 AQUASTRUCT CONSTRUCTION PRIVATE LIMITED</p>
    </footer>
</body>
</html>
