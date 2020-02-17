<?php
/*
    echo date('d m y'); // Day Month Year

    echo date('l'); // Day of the week

    echo date('Y/M/d');
    echo date('Y/M/D');
    echo date('h'); // Hour
    echo date('i'); // Min
    echo date('s'); // Seconds
    echo date('a'); //AM OR PM
*/
    date_default_timezone_set('Europe/Warsaw');
    //echo date('h:i:sa');

    /* between unix epoch january 1 1970 */
    $timestamp = mktime(15, 30, 56, 1 ,26 , 1997);
    //echo $timestamp

    echo date('m/d/y h:i:sa',$timestamp);

    $timestamp2 = strtotime('7:00pm March 22 2017');
    echo date('m/d/y h:i:sa',$timestamp2);

    $timestamp3 = strtotime('tomorrow');
    $timestamp4 = strtotime('next Sunday');
    $timestamp5 = strtotime('+2 Days');
    echo date('m/d/y h:i:sa',$timestamp3);
    echo date('m/d/y h:i:sa',$timestamp4);
?>