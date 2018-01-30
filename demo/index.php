<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Demo Preprocessing-id</title>
</head>
<body>

<?php
require "../vendor/autoload.php";

use Insomnius\Preprocessing;

$word   = file_get_contents('sample-text');

$preprocessing  = (new Preprocessing\Preparator)->process($word);

print_r($preprocessing->getCleanWord());
?>
</body>
</html>