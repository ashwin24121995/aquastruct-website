<?php 
require_once 'includes/config.php'; 
require_once 'includes/functions.php';
$page_title = 'Home';
include 'includes/header.php';
?>

<section class="hero-section">
    <div class="container">
        <div class="hero-content">
            <h1 class="hero-title">Experience Gaming Like Never Before</h1>
            <p class="hero-subtitle">Free Casino Entertainment - No Real Money, Pure Fun</p>
            <a href="/games.php" class="btn btn-primary btn-large">Play Now</a>
        </div>
    </div>
</section>

<section class="games-showcase">
    <div class="container">
        <h2 class="section-title">Our Games</h2>
        <div class="game-grid">
            <div class="game-card">
                <div class="game-icon"><img src="/assets/images/games/dice-icon.webp" alt="Dice" style="width: 120px; height: 120px; border-radius: 15px;"></div>
                <h3>DICE</h3>
                <p>Roll the dice and predict outcomes with exciting multipliers</p>
                <span class="bet-range">Bet: 1-500 credits</span>
                <a href="/games/dice.php" class="btn btn-game">Play Dice</a>
            </div>
            <div class="game-card">
                <div class="game-icon"><img src="/assets/images/games/mines-icon.webp" alt="Mines" style="width: 120px; height: 120px; border-radius: 15px;"></div>
                <h3>MINES</h3>
                <p>Reveal tiles, avoid mines, and collect progressive rewards</p>
                <span class="bet-range">Bet: 1-500 credits</span>
                <a href="/games/mines.php" class="btn btn-game">Play Mines</a>
            </div>
            <div class="game-card">
                <div class="game-icon"><img src="/assets/images/games/plinko-icon.webp" alt="Plinko" style="width: 120px; height: 120px; border-radius: 15px;"></div>
                <h3>PLINKO</h3>
                <p>Drop the ball and watch it bounce to amazing prizes</p>
                <span class="bet-range">Bet: 1-500 credits</span>
                <a href="/games/plinko.php" class="btn btn-game">Play Plinko</a>
            </div>
            <div class="game-card">
                <div class="game-icon"><img src="/assets/images/games/chicken-icon.webp" alt="Chicken" style="width: 120px; height: 120px; border-radius: 15px;"></div>
                <h3>CHICKEN</h3>
                <p>Guide your chicken through obstacles and collect golden eggs</p>
                <span class="bet-range">Bet: 1-500 credits</span>
                <a href="/games/chicken.php" class="btn btn-game">Play Chicken</a>
            </div>
        </div>
    </div>
</section>

<section class="features-section">
    <div class="container">
        <h2 class="section-title">Why Choose AQUASTRUCT?</h2>
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon">🎮</div>
                <h3>100% Free</h3>
                <p>No deposits, no real money - pure entertainment</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">🎲</div>
                <h3>4 Exciting Games</h3>
                <p>Dice, Mines, Plinko, and Chicken</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">💰</div>
                <h3>1,000 Free Credits</h3>
                <p>Start playing immediately with free credits</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">📱</div>
                <h3>Mobile Friendly</h3>
                <p>Play anywhere, anytime on any device</p>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
