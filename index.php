<?php

require_once './vendor/autoload.php';

$quote = new \RandomQuotes\Quote();

print_r($quote->generate());