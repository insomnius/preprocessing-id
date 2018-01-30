<?php
require "../vendor/autoload.php";

use Insomnius\Preprocessing;

$word   = file_get_contents('sample-text');

$preprocessing  = (new Preprocessing\Preparator)->process($word);

echo $preprocessing->getWord();