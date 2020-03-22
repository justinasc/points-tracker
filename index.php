<?php include_once 'config/init.php'; ?>

<?php
$points = new Points;

$template = new Template('templates/main.php');

$template->title = 'Title';
$template->points = $points->getAllPoints();

echo $template;