<?php

require __DIR__ . '/../vendor/autoload.php';

use AnyComment\Api;
use AnyComment\Config;

$config = new Config('YOU_API_KEY');
$api = new Api($config);

var_dump($api->getComment()->getList());

