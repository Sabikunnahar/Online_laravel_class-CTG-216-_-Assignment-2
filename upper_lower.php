<!-- বড় হাত, ছোট হাত, উভয় হাত এর লেখা কনভাসন করার জন্য একটিং ফাংসন বানান -->


<?php

function borohaat(){
    return "<h1 style=\" text-transform: uppercase;\">Online Laravel Class Uppercase</h1>";
}
function chotohaat(){
    return "<h1 style=\" text-transform: lowercase;\">Online Laravel Class Uppercase</h1> <br>";
}

function duihaat($type, $para){
    if($type == 'u'){
        return "<span style=\"text-transform: uppercase;\"> $para </span><br>";
    }
    elseif($type='l'){
        return "<span style=\" text-transform: lowercase;\">$para</span><br>";
    }
    elseif($type='other'){
        return "<span>$para</span>";
    }

}
echo borohaat();
echo chotohaat();

echo duihaat("u","Today is online laravel classes uppercase");


?>