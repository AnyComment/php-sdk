# AnyComment PHP-SDK

PHP SDK for [AnyComment.io](https://anycomment.io) REST API.
 
The documentation can be found [here](https://anycommentio.docs.apiary.io/).

## Installation 

Add new package to `composer.json` in your project directory:

```bash
composer require anycomment/php-sdk
```

or


```json
{
  "require":{
    "anycomment/php-sdk":"1.0.0",
  }
}
```


## Usage 

You need to prepare a configuration class and pass your API key to constructor. 

See example: 

```php
<?php

require __DIR__ . '/vendor/autoload.php';

use AnyComment\AnyComment;
use AnyComment\AnyCommentConfig;

$apiKey = 'YOUR-API-KEY'; // Replace with your key
$config = new AnyCommentConfig($apiKey);
$api = new AnyComment($config);
```

Then call some endpoint. Every endpoint would return same mapped response envelope, such 
as `AnyComment\Dto\ResponseEnveloper`.

Let's see in action, if we call endpoint to get website information: 

```php
var_dump($api->getWebsite()->getInfo());
```

This would be the output: 

```php
class AnyComment\Dto\ResponseEnvelope#27 (3) {
  public $status =>
  string(2) "ok"
  public $response =>
  class AnyComment\Dto\Website\AppInfo#26 (2) {
    public $id =>
    int(1)
    public $url =>
    string(21) "https://anycomment.io"
  }
  public $error =>
  NULL
}
```

## API

### Website 

#### `getInfo()`

Get website information.

Example:
```php
$data = $api->getWebsite()->getInfo();
```


### Page 

#### `getCommentCount(string $url)`

Get number of comments per requested page URL.

Example:  
```php
$data = $api->getPage()->getCommentCount('https://anycomment.io/demo');
```

### Profile 


#### `getInfo(int $id)`

Get profile information for given profile ID.

Example:  

```php
$data = $api->getProfile()->getInfo(1);
```
