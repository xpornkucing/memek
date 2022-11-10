<?
$sha = sha1(base64_encode($ip2.$user_agent));
$config['key'] = "$sha";