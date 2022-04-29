<?php

$pass_mark =70;
$get_mark =98;

if ($get_mark>=70 && $get_mark <= 100){
    
    if($get_mark%2==1){
        echo "Odd and passded";
    }

    else{
        echo "Even and passed";
    }

}

else{
    echo "Failed";
}





?>

