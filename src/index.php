<?php

require_once './vendor/autoload.php';

$quote = new \RandomQuotes\Quote();

$response = $quote->generate();
if ($response) {
    foreach($response as $item) {
        echo $item . "\n";
    }
    echo '</br><div>Hello from fucking docker</div></br>YEAH';
}