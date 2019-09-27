<?php
/* 
This is an exercise that I executed in Codecademy while learning PHP. I have included it in my portfolio to demonstrate fundamental comprehension of the utilization of numbers and math inside of PHP statements. 
SETUP: Exercise is designed to convert 4 currencies to USD. Below is instruction given by Codecademy:
Hello there, friend! We’re exhausted having just returned to New York City from a whirlwind of world travel. We’re bringing all our international currency to the bank to be exchanged for USD. Our travels have made us wise and weary, and we want to ensure we’re being treated fairly. Can you help?

Write a program to calculate exactly how much cash in USD we should end up with after it has all been exchanged.
We had a blissful time at Lake Yeak Laom in Ratanakiri, Cambodia and ended up with 2103942 riel left in our pocket
We saw the best sunset of our lives in Hpa-an, Myanmar and left the country with 19092 kyat
We got our fill of fjords in Bergen, Norway and discovered 109 krones that went unspent
We soaked up the sun and history in Saranda, Albania and found 9094 lek scattered throughout our luggage when we arrived home to NYC
*/
$riel = 2103942;
$kyat = 19092;
$krones = 109;
$lek = 9094;

echo "Before exchanging the currency, there were $riel riel, $kyat kyat, $krones krones, and $lek lek.";

$riel_exchange_rate = .00024;
$kyat_exchange_rate = .00065;
$krones_exchange_rate = .11;
$lek_exchange_rate = .009;

$usd_from_riel = $riel * $riel_exchange_rate;
$usd_from_kyat = $kyat * $kyat_exchange_rate;
$usd_from_krones = $krones * $krones_exchange_rate;
$usd_from_lek = $lek * $lek_exchange_rate;

$total_usd = $usd_from_riel + $usd_from_kyat + $usd_from_krones + $usd_from_lek - 4;
echo "\nAfter exchanging the currency, there is now $total_usd USD.";
?>