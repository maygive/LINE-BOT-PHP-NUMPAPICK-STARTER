<?php
$access_token = '8pBMkUfKCUV28mdtUPN32BcZyGFF4WNDged/rfVDW8pl0v7z+6pH696RarAC3Dq2hfd2Bfq4eW6gUsyH2b0n8JO3Ab99uMIyaA+tlVmgTib02DSlcTuV173EIeUvFSR2eh70cZAZ22a4AVzNGDqVtQdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
