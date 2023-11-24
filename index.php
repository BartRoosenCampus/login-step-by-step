<?php
// index.php
declare(strict_types = 1);

$title = 'Login overzicht';

?>

<!DOCTYPE html>
<html lang="en">
<?php require_once '__common/head.php'; ?>
<body>
<?php require_once '__common/overview-menu.php'; ?>
<div class="container">
    <?php require_once '__common/content/step-01.php'; ?>
    <?php require_once '__common/content/step-02.php'; ?>
    <?php require_once '__common/content/step-03.php'; ?>
    <?php require_once '__common/content/step-04.php'; ?>
    <?php require_once '__common/content/step-05.php'; ?>
</div>
<?php require_once '__common/footer.php'; ?>
</body>
</html>
