 <?php
include 'config.php';
$stmt = $pdo->query("SELECT * FROM hero_sliders WHERE status='active'");
$sliders = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<div class="hero-slider">
    <?php foreach($sliders as $slide): ?>
        <img src="<?= $slide['image'] ?>" alt="<?= htmlspecialchars($slide['title']) ?>">
        <div class="hero-content">
            <h1><?= htmlspecialchars($slide['title']) ?></h1>
            <p><?= htmlspecialchars($slide['subtitle']) ?></p>
            <a href="<?= $slide['button_link'] ?>" class="btn"><?= htmlspecialchars($slide['button_text']) ?></a>
        </div>
    <?php endforeach; ?>
</div>