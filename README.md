# Cookie Parser
This library could be used to get all headers of a HTTP request and return either as a array, either as a cookie string.

## Installation

The preferred method of installation is via [Composer](http://getcomposer.org/). Run the following
command to install the latest version of a package and add it to your project's `composer.json`:

```bash
composer require renanluis/CookieParser
```

## Example
**Convert a String of cookies to Array or vice versa**
```php
$cookieString = 'user=test; token=901aa8232dd1097d88s9bb989283zp63223';
$CookieParser = new \lib\CookieParser($cookieString);
var_dump($CookieParser->toArray());
var_dump($CookieParser->toString());
```

**Get cookies from HTTP Headers string**
```php
$headers = 'HTTP 1/1 200 OK
set-cookie: user=test; path=/; expires=Wed, 03 Mar 2021 01:10:47 GMT; secure; HttpOnly; SameSite=Lax
set-cookie: token=901aa8232dd1097d88s9bb989283zp63223; path=/; expires=Wed, 03 Mar 2021 01:10:47 GMT; secure; HttpOnly; SameSite=Lax';
$CookieParser = new \lib\CookieParser();
var_dump($CookieParser->getFromHeaders($headers));
```
