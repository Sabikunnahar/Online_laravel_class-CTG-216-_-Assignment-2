<!-- গ্রেড এবং জিপিএ বের করার জন্য একটি ফাংসন তৈরি করুন -->


<?php

function grade_system($mark){
    if($mark >=0 && $mark<=32 ){
        $cgpa=0;
        $grade= 'F';
        
    }
    elseif($mark >=33 && $mark<=40){
        $cgpa=1;
        $grade= 'F';
    }
    elseif($mark >=41 && $mark<=50){
        $cgpa=2;
        $grade= 'C';
    }
    elseif($mark >=51 && $mark<=60){
        $cgpa=3;
        $grade= 'B';
    }
    elseif($mark >=61 && $mark<=70){
        $cgpa= 3.5;
        $grade= 'A-';
    }
    elseif($mark >=71 && $mark<=80){
        $cgpa=4;
        $grade= 'A';
    }
    elseif($mark >=81 && $mark<=100){
        $cgpa=5;
        $grade= 'A+';
    }
    else{
        echo "Invalid";
    }

    return "Your CGPA is = {$cgpa} and grade is = {$grade}";
}

echo grade_system("40");


?>