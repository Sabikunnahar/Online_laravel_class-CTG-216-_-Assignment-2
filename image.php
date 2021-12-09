<!-- একটি ইমেজ আপলোডিং ফাংসন বানান যেথানে ছবির নাম, হাইট, ওইদ দিয়ে ছবিটাকে মেনেজ কার যাবে -->


<?php

function image($src, $width, $height){
    return "<img src=\"{$src}\" width={$width} height=\" {$height}\">";

}

echo image("about.jpg", "300px", "100px");

?>