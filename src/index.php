<?php

require_once './vendor/autoload.php';

$randomQuotes = new \RandomQuotes\Quote();

$quotes = $randomQuotes->generate();

echo $quotes['author'] . ' - ' . $quotes['text'];

echo '</br><div>Hello from fucking docker</div></br>YEAH';