<?php

require('vendor/autoload.php');

use function Laravel\Prompts\confirm;

$confirmed = confirm(
  label: '楽しんでいますか？',
  yes: 'はい',
  no: 'いいえ',
);
var_dump($confirmed);
