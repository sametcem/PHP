 <?php
    /*
        for
        while
        do while
        for each
    */

    #For Loop
    for ($i=5; $i <=10 ; $i++) { 
        echo 'Number: '.$i;
        echo '<br>';
    }


    #While Loop
    $a = 0;
    while ($a <= 10) {
        echo $a;
        echo '<br>';
        $a++;
    }
    echo '<br>';
    #Do while loop

    $b = 0;
    do {
        echo $b;
        echo '<br>';
        $b++;
    } while ($b <= 10);

    echo '<br>';
    #For each
    /*
    $people = array('Kevin','Prince','Boateng');

    foreach ($people as $person) {
        echo $person;
        echo '<br>';
    }
    */
    
    $people = array('Brad' => 35,'Jose' => 33, 'Will' => 40 );
    foreach ($people as $name => $age) {
        echo $name.': '.$age;
        echo '<br>';
    }
 ?>