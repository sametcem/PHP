<?php

    /* 
     ==
     ===
     <
     >
     <=
     >=
     !=
     !===
    
    */

    /*
    $num = 6;

    if($num == 5) {
        echo '5 passed';
    } elseif($num==6){
        echo '6 passed';
    } else {
        echo 'did not pass';
    }

    */

    # NESTING IF STATEMENTS

    $num = 6;
    if($num > 5) {
        if($num < 10) {
            echo "$num passed";
        }
    }

    /*
    LOGICAL OPERATORS

    AND &&
    OR ||
    XOR
    You can directly write OR and XOR
    */

    if($num > 5 && $num< 10) {
            echo "$num passed";
        
    }

    $favColor = 'yell';

    switch($favColor){
        case 'red':
            echo 'Your favourite color is red';
        break;
        case 'blue':
            echo 'Your favourite color is blue';
        break;
        case 'green':
            echo 'Your favourite color is green';
        break;
        case 'white':
            echo 'Your favourite color is white';
        break;
        default:
            echo 'Your favourite color is something else';
            

    }



?>
