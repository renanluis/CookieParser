<?php
require_once('lib/CookieParser.php');
$CookieParser = new \lib\CookieParser('personalization_id="v1_yo3omjzliCh4XCLYRKU83A=="; guest_id=v1%3A160853033758059876; ct0=49191e6a456f643ffa6123877e9f74c9; _sl=1; _ga=GA1.2.989857333.1608530339; _gid=GA1.2.538199801.1608530339; gt=1340899542544297984; ads_prefs="HBERAAA="; kdt=qWqqyjjt7siO9fVPg8wztAQDRMsQNTzsixALJu1s; remember_checked_on=1; _twitter_sess=BAh7CiIKZmxhc2hJQzonQWN0aW9uQ29udHJvbGxlcjo6Rmxhc2g6OkZsYXNo%250ASGFzaHsABjoKQHVzZWR7ADoPY3JlYXRlZF9hdGwrCBki4YN2AToMY3NyZl9p%250AZCIlZTEyNDViMzRkODczMDZmNzdmNDRiZTk2OGE4MmZlM2Y6B2lkIiUzMTgx%250AZmIxYmY1MjA0NGI3OTg0M2U3MWRkMzQ0YTk4MToJdXNlcmwrCQAwFl%252FKUpsS--1ded010dc93d2f769b5a2ee5a18a9c32adafb040; twid="u=1340756343205015552"; auth_token=5469d6cd94d3fae5386dbe082cb64b43d040f75d');
var_dump($CookieParser->toArray());
var_dump($CookieParser->toString());
//var_dump($CookieParser->getFromHeaders('set-cookie: twid=u%3D1340756343205015552; Max-Age=157680000; Expires=Sat, 20 Dec 2025 06:09:03 GMT; Path=/; Domain=.twitter.com; Secure; SameSite=None
//set-cookie: ct0=18975796cab178e9b55d7348e50715c9c0dded4fa2dd346983870b8e64ace2e9a33d729ce630a96adc787deb95e244330a918fe5a180983fa07460781786110384d382b3848553227e38763e31970d5c; Max-Age=157680000; Expires=Sat, 20 Dec 2025 06:09:03 GMT; Path=/; Domain=.twitter.com; Secure; SameSite=Lax'));