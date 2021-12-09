<!-- এমন একটি ফাংসন বানান যেটা দিয়ে আয়তক্ষেত্র, বগক্ষেত্র, এবং বৃত্তে ক্ষেত্রফল বের করা যাবে -->


<?php

function area($type, $len, $width=null){
    if($type=='r'){
        $area = $len * $width;
        return "Area of Rectangle is = {$area}";
    }
    elseif($type=='s'){
        $area = $len * $len;
        return "Area of Square is = {$area}";
    }
    elseif($type=='c'){
        $area = 3.1416 * pow($len , 2);
        return "Area of Circle is = {$area}";
    }
}

echo area("s",30);
?>

