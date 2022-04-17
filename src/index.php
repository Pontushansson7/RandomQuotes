<?php

require_once './vendor/autoload.php';

$randomQuotes = new \RandomQuotes\Quote();

$quotes = $randomQuotes->generate();

foreach($quotes as $quote) {
    echo $quote;
}

echo '</br><div>Hello from fucking docker</div></br>YEAH';