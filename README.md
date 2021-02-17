# Cookie Parser
This library could be used to get all cookies in a header string of a HTTP request and return either as a array, either as a cookie string.

## Installation

The preferred method of installation is via [Composer](http://getcomposer.org/). Run the following
command to install the latest version of a package and add it to your project's `composer.json`:

```bash
composer require renanluis/cookie-parser
```

## Example
**Convert a String of cookies to Array or vice versa**
```php
use CookieParser\CookieParser;
$cookieString = 'user=test; token=Qf9qbOKsrxfBhUSjFUyCS9zxKhMjdINa';
$CookieParser = new CookieParser($cookieString);
var_dump($CookieParser->toArray());
/* 
array(2) {
  ["user"]=>
  string(4) "test"
  ["token"]=>
  string(35) "Qf9qbOKsrxfBhUSjFUyCS9zxKhMjdINa"
}
*/
var_dump($CookieParser->toString());
/*
string(52) "user=test; token=Qf9qbOKsrxfBhUSjFUyCS9zxKhMjdINa"
*/
```
```php
use CookieParser\CookieParser;
$cookieArray = array('user' => 'test', 'token' => 'Qf9qbOKsrxfBhUSjFUyCS9zxKhMjdINa');
$CookieParser = new CookieParser($cookieArray);
var_dump($CookieParser->toString());
/*
string(52) "user=test; token=Qf9qbOKsrxfBhUSjFUyCS9zxKhMjdINa"
*/
var_dump($CookieParser->toArray());
/* 
array(2) {
  ["user"]=>
  string(4) "test"
  ["token"]=>
  string(35) "Qf9qbOKsrxfBhUSjFUyCS9zxKhMjdINa"
}
*/
```

**Get cookies from HTTP Headers string**
```php
use CookieParser\CookieParser;
$headers = 'HTTP 1/1 200 OK
set-cookie: user=test; path=/; expires=Wed, 03 Mar 2021 01:10:47 GMT; secure; HttpOnly; SameSite=Lax
set-cookie: token=Qf9qbOKsrxfBhUSjFUyCS9zxKhMjdINa; path=/; expires=Wed, 03 Mar 2021 01:10:47 GMT; secure; HttpOnly; SameSite=Lax';
$CookieParser = new CookieParser();
var_dump($CookieParser->getFromHeaders($headers));
/*
string(52) "user=test; token=Qf9qbOKsrxfBhUSjFUyCS9zxKhMjdINa"
*/
```
