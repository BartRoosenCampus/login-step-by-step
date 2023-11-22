<!DOCTYPE html>
<html lang="en">
<?php require_once '../__common/head.php'; ?>
<body>
<a href="../index.php">Overzicht</a>
<div class="grid-1-2">
    <div>
        <div class="form-container">
            <h1>Login</h1>
            <form action="loginProcess.php" method="post">
                <div class="form-group">
                    <input type="text" name="userName" class="form-control" placeholder="User name">
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Password">
                </div>
                <div class="form-group text-right">
                    <button type="submit" class="btn btn-success">Login</button>
                </div>
            </form>
        </div>
    </div>
    <div>
        <h3>Root</h3>
        <div class="source-title">loginController.php</div>
        <pre><?php show_source('loginController.php'); ?></pre>
        <div class="source-title">privatePageController.php</div>
        <pre><?php show_source('privatePageController.php'); ?></pre>
        <div class="source-title">loginProcess.php</div>
        <pre><?php show_source('loginProcess.php'); ?></pre>
        <h3>Business</h3>
        <div class="source-title">Business/loginService.php</div>
        <pre><?php show_source('Business/loginService.php'); ?></pre>
        <div class="source-title">Business/SessionService.php</div>
        <pre><?php show_source('Business/SessionService.php'); ?></pre>
        <h3>Data</h3>
        <div class="source-title">Data/AbstractDataHandler.php</div>
        <pre><?php show_source('Data/AbstractDataHandler.php'); ?></pre>
        <div class="source-title">Data/UserDAO.php</div>
        <pre><?php show_source('Data/UserDAO.php'); ?></pre>
        <h3>Entities</h3>
        <div class="source-title">Entities/User.php</div>
        <pre><?php show_source('Entities/User.php'); ?></pre>
        <h3>Presentation</h3>
        <div class="source-title">Presentation/loginForm.php</div>
        <pre><?php show_source('../source/loginForm.php'); ?></pre>
    </div>
</div>
</body>
</html>
