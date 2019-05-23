<?php
$access_token = 'M3XbRV8M5YpZNX4K8OXQQeukfq5QwZF+uXoSnfhBw8//TI+DUpXD2bVJrBCMDKitZMCbE4VudKyj9OSN+mioWdgDLOJP+mrdyIUjp4rqkz/Uq/ScKwTV/lF5LJQ1RLvpPhavShJRtePSXRtJczFZZAdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
