<?php
$access_token = 'z4e65qJRRTG2yMAJEMbXOzlJc5nKL1doFFcDhcej9DvNZLrqdb5Owv+7AO6hs8wX/EDLBu3FNpVoYxPhzwc39+YLW/l3EVWJ00Xmo8jgIxRRmPMpuYc9ay7I6olLN5bldmoKlq4KEBktACZYjMmyjwdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
