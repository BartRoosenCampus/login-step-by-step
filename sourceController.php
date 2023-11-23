<?php
// sourceController.php
declare(strict_types = 1);

if (empty($_GET['step'])) {
    header('location: ./');
    die;
}
$title = 'Source code';
$step  = $_GET['step'];
$path  = sprintf('source/%s/', $step);
$files = scandir($path);
$returnPath = sprintf('step-0%s', $step);

foreach ($files as $key => $file) {
    if ('.' === $file || '..' === $file) {
        unset($files[$key]);
    }
}

require_once 'source/viewSource.php';
