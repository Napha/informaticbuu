<?php
$access_token = 'baN/4/ufhblbYLLqf3OmZFbn38mNLjYzjVu5GogPAda8iJ23CWNk+6g4kEzbyEFO8vq+FrlHzBUQ6rXdZDmVGCaZo9xq3of4OtfNaUQRbicAliNLEsY7Z2hjOdgqJkBfveslMxpiu/JzJG5VYjGUKwdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
