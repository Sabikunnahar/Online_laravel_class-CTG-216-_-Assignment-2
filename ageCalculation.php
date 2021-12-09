<!-- এমন একটি ফাংসন তৈরি করুন যেটাতে আপনার জন্ম সাল দিলে সে আপনার বয়স বের করে দিবে -->


<?php

function ageCalculation($years){
    $age= 2021- $years;
    echo  "Your age is {$age} years old";
}

ageCalculation(1997);

?>