<?php

$url = 'https://rate.bot.com.tw/xrt?Lang=zh-TW';

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch,CURLOPT_HTTPHEADER, array("Content-Type: application/x-www-form-urlencoded; charset=utf-8"));
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $PostData);

$options = array(
    CURLOPT_SSL_VERIFYHOST => 0,
    CURLOPT_SSL_VERIFYPEER => 0,
);

curl_setopt_array($ch, $options);

$temp=curl_exec($ch);
$temp=str_replace(array("\r","\n","\t","\s"), '', $temp);

preg_match_all ('/<span class="time">(.*)<\/span>/U', $temp, $pat_array1);
echo strip_tags($pat_array1[0][0]);
echo " TWD=>USD ";
preg_match_all ('/<td data-table="本行即期賣出" class="rate-content-sight text-right print_hide" data-hide="phone">(.*)<\/td>/U', $temp, $pat_array3);
echo strip_tags($pat_array3[0][0]);

echo "\n";
curl_close($ch);

