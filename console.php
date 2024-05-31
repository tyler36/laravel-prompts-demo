<?php

use function Laravel\Prompts\text;

require('vendor/autoload.php');

$name = text('What is your name?', 'Eg. John Doe');

echo "Hello $name";
