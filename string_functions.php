<?php
    #substr()
    #Returns a portion of a string

    /*
    $output = substr('Hello', 1,3); // start from 1st and finish 3rd index
    $output = substr('Hello', -2);
    echo $output;
    */

    /*
    $output = strlen('Hello World');
    echo $output;
    */

    # strpos()
    # Finds the position of the first occurence of a sub
    #string

    /*
    $output = strpos('Hello World', 'o');
    echo $output;
    */

    # strrpos()
    # Finds the position of the last occurence of a sub
    #string

        /*
    $output = strrpos('Hello World', 'o');
    echo $output;
        */

        #trim()
        #Strips whitespace

        /*
    $text = 'Hello World';
    var_dump($text);
        */

        /*
    $text = 'Hello World                   ';
    $trimmed = trim($text);
    var_dump($trimmed);
        */


       #strtoupper / strtolower
       # Makes everything uppercase / lower case
    
       #ucwords()
       #Capitalize every word
        /*
       $output = ucwords('hello world');
       echo $output;
       */

       #str_replace()
       #Replace all occurences of a search string with a replacement

       /*
       $text = 'Hello World';
       $output = str_replace('World','Everyone',$text);
       */

    # is_string()
    # Check if string

    /*
    $val = 'Hello';
    $output = is_string($val);
    */

    /*
    $values = array(true,false,null,'abc', 33 , '33', 22.4, '22,4', '',' ',0,'0');
    foreach ($values as $value) {
        if(is_string($value)) {
            echo "{$value} is a string<br>";
        } else {
            echo "{$value} is not a string<br>";
        }
    }
    */

        # gzcompress()
        # Compress a string

    $string = "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quis alias repellat id earum at tempora nostrum quas consequatur perferendis, dolorem odio adipisci tempore dolorum? Perferendis ullam ut sint optio ipsam?";
    $compressed = gzcompress($string);
    //echo $compressed;

    $original = gzuncompress($compressed);
    echo $original;
       
    
?>