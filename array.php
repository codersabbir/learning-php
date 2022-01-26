
<!-- Associative arrays -->
<?php 
    

$foods = [
    
    'fastfood' => 'burger, hotdog, padis, sandwich, pizza',
    'vegetables' => 'spinach, carrot, brocolli, cabbage',
    'fish' => 'hilsa, baim, chela, pholi',
    'fruits' => 'mango, jack-fruits, lichi, watermelon'
];
  
    // echo $foods['fastfood'];


        
// using foreach
    foreach($foods as $key=>$value){
        echo $key." = ".$value.'.'."\n";
        echo "\n";
    }
    


    foreach ($foods as $food => $value){ 
        echo "I favourite ".$food." are ".$value."\n";
        echo "\n";
    } 
   

// using for
$keys = array_keys($foods); 
for($i=0;$i<count($keys);$i++){
    $key = $keys[$i];
    echo $foods[$key]."\n";
    echo "\n";
}


?>


// Multidimentional arrays

<?php

$foods = [
    
    'fastfood' => explode(', ', 'burger, hotdog, padis, sandwich, pizza'),
    'vegetables' => explode(', ','spinach, carrot, brocolli, cabbage'),
    'fish' => explode(', ','hilsa, baim, chela, pholi'),
    'fruits' => explode(', ','mango, jack-fruits, lichi, watermelon')
];

// print_r($foods);

array_push($foods['fruits'], 'orange');
print_r($foods);

echo $foods['fish'] [0];
echo "\n";

// $example = [
//     'case1' => [
//         'case2'  => [
//             'a',
//             'b',
//             'c',
//             'd'
//             ]
//         ],
//     ];

// echo $example['case1']['case2'][1];

$example2 = [
    [1,2,3,4],
    [11,22,33,44],
    [111,222,333,444],
    [1111,2222,3333,[1,2,3,4]]
];

echo $example2[3][3][1];

?>