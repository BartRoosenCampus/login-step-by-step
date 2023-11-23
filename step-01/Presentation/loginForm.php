<!DOCTYPE html>
<html lang="en">
<?php require_once '../__common/head.php'; ?>
<body>
<div class="container">
    <a href="../index.php" class="btn btn-warning">Terug naar het overzicht</a>
    <a href="../sourceController.php?step=1" target="_blank" class="btn btn-warning">Beijk de code</a>
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
</div>
</body>
</html>
