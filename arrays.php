<?php
    /*
    - Indexed 
    - Associative
    - Multi - dimensional
    */

    //Indexed
    $people = array('Kevin','Prince','Boateng');
    //echo $people[1];

    $ids = array(23,55,33);
    //echo $ids[2];

    $cars = ['Honda','Toyota','Ford'];
    $cars[3] = 'Lambo';
    $cars[] = 'BMW';

    
    //echo $cars[4];
    //echo count($cars);

    //print_r($cars); printing arrays 

    //var_dump($cars); // debugging

    // ASSOCIATIVE ARRAYS

    $people = array('Brad' => 35,'Jose' => 33, 'Will' => 40 );
    $ids = [22 => 'Brad', 44 => 'Jose', 63 => 'Will'];
    //echo $people['Brad'];
    //echo $ids[22];

    $people['Jill'] = 43;
    //echo $people['Jill'];

    //print_r($people);
    //var_dump($people);

    //Multi Dimensional
    $cars = array(
        array('Honda',20,10),
        array('Toyota',30,20),
        array('Nissan',23,12) 
    );

    echo $cars[1][0];
?>