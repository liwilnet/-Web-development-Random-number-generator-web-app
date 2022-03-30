<?php 

function get_number($dices,$sides){
  global $total;
  for($i= 0; $i < $dices;$i++){
    $total += rand(1,$sides);
  }
}