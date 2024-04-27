<?php

$Fizz = "Fizz";
$Buzz = "Buzz";
$FizzBuzz = "FizzBuzz";

for($i = 1; $i<=50;$i+=1){
  if($i % 15 === 0){
    echo $FizzBuzz . "<br />";
  }elseif($i % 5 === 0){
    echo $Buzz . "<br />";
  }elseif($i % 3 === 0){
    echo $Fizz . "<br />";
  }else {
    echo $i . "<br />";
  }
}

for($i = 1;$i < 6; $i++){
  for($j = 1;$j < 6; $j++){
    echo "●";
  }
  echo "<br />";
}