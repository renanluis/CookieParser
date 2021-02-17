<?php
require_once('src/CookieParser.php');
use CookieParser\CookieParser;
$CookieParser = new CookieParser('user=test; token=901aa8232dd1097d88s9bb989283zp63223');
var_dump($CookieParser->toArray());
var_dump($CookieParser->toString());