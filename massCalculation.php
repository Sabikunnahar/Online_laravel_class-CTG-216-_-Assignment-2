<!-- এমন একটি ফাংসন বানান যেখানে আপনার ওজন আর উচ্চা দিলে আপনার বডি ম্যাস ইন্ডেক্স বের করে দিব -->


<?php

function masscalculation($weight, $height){

    $mass = $weight/ ($height* $height);

    echo "You Mass is {$mass}";
}

masscalculation(62, 5.3);

?>