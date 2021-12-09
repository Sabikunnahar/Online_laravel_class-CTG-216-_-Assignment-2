<!--এমন একটি ফাংসন বানান যাকে কি না একটা বয়স দিলে একজন কি বৃদ্ধ, যুবক, কিশো, ছেলে , বাচ্ছা রিটান করবে -->

<?php

function ages($age){
    if($age >=1 && $age<=10 ){
        return "<h3>This is a baby</h3>";
    }
    elseif($age >=11 && $age<=18){
        return "<h3>This is a teenager</h3>";
    }
    elseif($age >=19 && $age<=35){
        return "<h3>This is a young boy</h3>";
    }
    elseif($age >=36 && $age<=100){
        return "<h3>This is a Old Man</h3>";
    }

}

echo ages("80");


?>