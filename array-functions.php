<!-- indexed array -->
<?php
    $foods = array("Rice","burger","hotdog","padis","sandwich");
    echo $foods[0];
    echo "\n";
    echo PHP_EOL;
    echo $foods[3];
?>


<!-- Associative arrays -->
<?php 
    $foods = [
        'fastfood' => 'burger, hotdog, padis, sandwich, pizza',
        'vegetables' => 'spinach, carrot, brocolli, cabbage',
        'fish' => 'hilsa, baim, chela, pholi',
        'fruits' => 'mango, jack-fruits, lichi, watermelon'
];
  
    // echo $foods['fastfood'];     
// // using foreach
//     foreach($foods as $key=>$value){
//         echo $key." = ".$value.'.'."\n";
//         echo "\n";
//     }
    
    foreach ($foods as $food => $value){ 
        echo "My Favourite ".$food." are ".$value."\n";
        echo "\n";
    } 

?>

<!-- Multidimentional arrays -->

<?php
    $personaldata = array(
        array(
            "name" => "Sabbir",
            "email" => "sabbirh@wppool.dev",
        ),
        array(
            "name" => "Sahabuddin",
            "email" => "sahabuddin@wppool.dev",
        ),
        array(
            "name" => "Toukir",
            "email" => "toukir@wppool.dev",
        ),
        array(
            "name" => "Reetu",
            "email" => "reetu@wppool.dev",
        )
    );

    echo  $personaldata[3]["name"]. "'s Email-id is: " . $personaldata[3]["email"];
?>


<!-- PHP Array functions -->
<?php

// change key case

    $officeid = array("Niran"=>"06","Remon"=>"04","Jafran"=>"14");
    print_r(array_change_key_case($officeid,CASE_UPPER));
    print_r(array_change_key_case($officeid,CASE_LOWER));

?>

<?php

// array chunk

    $officeid = array("Niran"=>"06","Remon"=>"04","Jafran"=>"14");
    print_r(array_chunk($officeid,2,true));

?>

<?php

// array count values

// Need more clearence about this array function

    $team = array("Azizul","Saif","Suman","Sabbir","Masud","Foysal","Richard","Niran","Saiful","Zamy","Reetu","Sabbir Sam","Arif","Farhan","Toukir","Naeem","Asif","Imtiaz","Sajjad","Sanzinan","Shawon","Rhydwan","Jakir","Ehsan");
    print_r(array_count_values($team));

?>

<!-- diffrences between two arrays values-->
<?php
    $foodsmenu1 = array("1"=>"rice","2"=>"egg","3"=>"sandwich","4"=>"pizza");
    $foodsmenu2 = array("5"=>"rice","6"=>"egg","7"=>"sandwich");

    $result = array_diff($foodsmenu1,$foodsmenu2);
    print_r($result);

    // diffrences between two arrays key & values

    $foodsmenu3 = array("1"=>"rice","2"=>"egg","3"=>"sandwich","4"=>"Hotdog");
    $foodsmenu4 = array("1"=>"rice","2"=>"egg","3"=>"sandwich");

    $result2=array_diff_assoc($foodsmenu3,$foodsmenu4);
    print_r($result2);

    // diffrences between two arrays keys
    $foodsmenu5 = array("menu1"=>"rice","menu2"=>"egg","menu3"=>"sandwich");
    $foodsmenu6 = array("menu1"=>"rice","menu3"=>"sandwich","menu4"=>"pizza");

    $result3 = array_diff_key($foodsmenu5,$foodsmenu6);
    print_r($result3);
?>

<?php
    $names = array("Niran", "Sabbir", "Reetu", "Toukir", "Jafran", "Suman");

    $teamid = array(12, 15, 17, 6, 8, 10, 3, 20);
    $salary = array(10000, 20000, 15000, 12000, 11000, 16000, 50000);

    $filterid = array_filter($teamid, function($a){
    if($a > 15){ return true; }else{ return false; }
    });

    $filtersalary = array_filter($salary, function($x){
    if($x < 15000){ return true; }else{ return false; }
    });

?>





