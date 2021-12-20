<?php require __DIR__ . '/app/autoload.php'; ?>
<?php require __DIR__ . '/views/header.php'; ?>

<article>
    <h1><?php echo $config['title']; ?></h1>
    <p>This is the home page.</p>

    <?php if (isUserLoggedIn()) : ?>
        <p>Welcome, <?php echo htmlspecialchars($_SESSION['user']['username']); ?>!</p>
    <?php endif; ?>
</article>

<?php require __DIR__ . '/views/footer.php'; ?>
