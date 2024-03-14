<?php 
    //Bài 1: Mảng
    $color = array('red','green','white');
    print_r($color);
    echo "<br>";
    echo $color[0];
    echo "<br>";

    $age = array();
    $age[0] = 10;
    $age[1] = 20;
    $age[2] = 30;
    print_r($age);

    //Bài 2: Mảng
    $salaries = array(
            "mohammad" => 2000,
            "qadir" => 1000,
            "zara" => 500
    );
    echo "<br>";
    echo "Salary of mohammad is ".$salaries['mohammad']."<br>";
    echo "Salary of mohammad is ".$salaries['qadir']."<br>";
    echo "Salary of mohammad is ".$salaries['zara']."<br>";
    
    //Bài 3: constant
    define('LOCATOR',"/locator");
    define('CLASSES',LOCATOR."/code/classes");
    define('FUNCTIONS',LOCATOR."/code/functions");
    define('USERDIR',LOCATOR."/user");

?>