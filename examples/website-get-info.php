<?php

require __DIR__ . '/../vendor/autoload.php';

use AnyComment\Api;
use AnyComment\Config;

$config = new Config('f4sBzGo_PX1fjuA75xaVwQh4FU4wPjWfLoR_hu7sq4KQkQiff4ZTBXKbqhbysxvX');
$api = new Api($config);

var_dump($api->getWebsite()->getInfo());

