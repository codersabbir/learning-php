<?php

function myTask1(){
    echo "First step done\n";
}

function myTask2(){
    echo "Second step done\n";
}

function myTask3(){
    echo "Third step done\n";
}

function myTask4(){
    echo "Four step done\n";
}

function myTask5(){
    echo "Five step done\n";
}

function alltask(){
    myTask1();
    myTask2();
    myTask3();
    myTask4();
    myTask5();
}

alltask();

?>

<!-- variable scope -->


<!-- global scope -->

<?php
$a = 1;
$b = 5;

function globalscope() {
  global $a, $b;
  $b = $a + $b;
}

globalscope();
echo $b;
?>

<!-- local scope -->

<?php
function localscope() {
  $a = 10;
  echo "Variable a inside function is: $a \n";
}
localscope();

echo "Variable a outside function is: $a \n";
?>

<!-- static scope -->

<?php
function staticscope() {
  static $a = 5;
  echo $a;
  $a++;
}

staticscope();
echo "\n";
staticscope();
echo "\n";
staticscope();
?>


<!-- recursive functions -->
<?php    
function show($number) {    
    if($number<=10){    
     echo "$number \n";    
     show($number+2);    
    }  
}    
    
show(1); 

 
function factorialnum($n)    
{    
    if ($n < 0)    
        return -1;     
    if ($n == 0)    
        return 1; 
    return ($n * factorialnum ($n -1));    
}    
    
echo factorialnum(10);    
?>    