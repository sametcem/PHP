<?php


    /*
        Camel Case - myFunction()
        Lower Case - my_function()
        Pascal Cas - MyFunction()
    */

    function simpleFunction() {
        echo 'Hello World';
        echo '<br>';
    }

    //simpleFunction();

    function sayHello($name = "World") {
        echo 'Hello: '.$name;
        echo '<br>';
        echo "Hello $name<br>";
    }
    
    //sayHello('Samet');
    //sayHello();

    function addNumbers($num1, $num2){
        return $num1 + $num2;
    }

    //echo addNumbers(2,3);

    // Passing arguments by reference
    $mynum = 10;

    function addFive($num){
        return $num += 5;
    }

    function addTen(&$num) {
        $num += 10;
    }

    echo addFive($mynum);
    echo '<br>';
    echo "Value: $mynum<br>";

    addTen($mynum);
    echo "Value: $mynum<br>";



?>