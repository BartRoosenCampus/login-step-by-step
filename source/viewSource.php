<!DOCTYPE html>
<html lang="en">
<?php require_once '__common/head.php'; ?>
<body>
<div class="container">
    <a href="<?= $returnPath; ?>">Terug</a>
    <h1>Stap <?= $step; ?></h1><?php foreach ($files as $file): ?>
        <?php if (!is_dir(sprintf('%s%s', $path, $file))): ?>
            <div class="source-title"><?= $file; ?></div>
            <pre>
        <?php show_source(sprintf('%s%s', $path, $file)); ?>
        </pre>
        <?php else: ?>

        <?php endif; ?>
    <?php endforeach; ?>
</div>
<div style="height: 5em;"></div>
</body>
</html>
