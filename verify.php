<?php
$access_token = 'SbWKeXlcFkK/sFVcrrrRgE77k2NBaLoflMxweQtyj3nxDlQDnu0vKZPx+Glq8svJUGwi3GTRlMkdcWNsLOwR4WfH8PiNVuJnMRF2K1M0LzbADDdmmfZ7GhcvlchUpEr2IVTv099L4YZMEIwWkpxsTwdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
