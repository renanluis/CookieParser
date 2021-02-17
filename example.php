<?php
require_once('lib/CookieParser.php');
$CookieParser = new \lib\CookieParser('user=test; token=901aa8232dd1097d88s9bb989283zp63223');
var_dump($CookieParser->toArray());
var_dump($CookieParser->toString());