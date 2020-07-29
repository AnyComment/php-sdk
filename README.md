# AnyComment PHP-SDK

[![Build Status](https://travis-ci.org/AnyComment/php-sdk.svg?branch=master)](https://travis-ci.org/AnyComment/php-sdk)

AnyComment API is an HTTP-based interface created for developers to help to work with AnyComment REST services.
 
The documentation can be found [here](https://anycommentio.docs.apiary.io/).

Minimum requirement is PHP 5.6.

## Installation 

Add new package to `composer.json` in your project directory:

```bash
composer require anycomment/php-sdk
```

or


```json
{
  "require":{
    "anycomment/php-sdk":"0.1"
  }
}
```


## Tests

Run the following command to start tests:
```
composer run test
```

## Examples 

Examples can be found in `/examples` folder. 

> Notice that you need to provide your API key for each example to make it work.

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
class AnyComment\Dto\Envelopes\ResponseEnvelope#27 (3) {
  public $status =>
  string(2) "ok"
  public $response =>
  class AnyComment\Dto\Website\AppInfo\AppInfo#26 (2) {
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


#### `getInfo(int $id, string $oauthToken)`

Get profile information for given profile ID.

Example:  

```php
$data = $api->getProfile()->getInfo(1, 'oauth-token');
```


### Comment 


#### `getList(string $createdDate = null)`

Get list of comments chronologically since given date (when provided).

Example:  

```php
var_dump($api->getComment()->getList());
```

#### `create(CommentCreateRequest $commentObject)`

Create new comment with given data.

Example:  

```php
$page = new Page(
    'https://anycomment.io/demo',
    'Demo'
);
$comment = new Comment(
    1,
    null,
    1,
    'This is my comment',
    '127.0.0.1',
    date('Y-m-d H:i:s')
);
$author = new Author('John Doe');

$createRequest = new CommentCreateRequest(
    $page,
    $comment,
    $author
);

var_dump($api->getComment()->create($createRequest));
```
