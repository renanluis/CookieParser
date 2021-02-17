<?php
/*
@package Cookie Parser
@author Renan Luis (https://github.com/renanluis)
@version 1.0.0
*/
namespace CookieParser;
class CookieParser {
    private $cookies;

    public function __construct($cookies = '') {
        $this->cookies = $cookies;
    }

    public function getFromHeaders(string $content): string|bool {
        preg_match_all('/^Set-Cookie:\s*([^;]*)/mi', $content, $cookiesArr);
        return (!empty($cookiesArr)) ? trim(implode('; ', $cookiesArr[1])) : false;
    }

    public function toArray(): array|bool {
        if(!is_string($this->cookies) || empty($this->cookies)) return false;
        parse_str(str_replace('; ', '&', $this->cookies), $cookieArr);
        $this->cookies = $cookieArr;
        return $this->cookies;
    }

    public function toString(): string|bool {
        if(!is_array($this->cookies) || empty($this->cookies)) return false;
        $this->cookies = urldecode(http_build_query($this->cookies, '', '; '));
        return $this->cookies;
    }

}