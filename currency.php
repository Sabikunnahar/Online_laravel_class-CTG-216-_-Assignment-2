<!-- বাংলাদেশি টাকাতে ইউএস ডলার, কানাডিয়ান ডলার, পাউন্ড এ কনভাট করার একটি ফাংসন বানান -->


<?php
function currency($bdt, $type){


    if($type== 'doller'){

        $amount= $bdt*86.01;
        return "Your USD converted money amount is {$amount}<br>";
    }
    elseif($type== 'cad'){

        $amount= $bdt*67;
        return "Your CAD converted money amount is {$amount}<br>";
    }
    elseif($type== 'pound'){

        $amount= $bdt*114.262;
        return "Your Puond converted money amount is {$amount}";
    }
}
echo currency(30, "doller");


?>