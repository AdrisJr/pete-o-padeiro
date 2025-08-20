<?php
function cakes($recipe, $ingredients){
  $arr[] = array();
  foreach (array_keys($recipe) as $item) {
      if(array_key_exists($item, $ingredients)) {
        if($ingredients[$item]>=$recipe[$item])
          {
            $arr[] = intdiv($ingredients[$item],$recipe[$item]);
          }else return 0;
      }else return 0;
  }
  return min($arr);
}

// Abaixo estão os casos de uso:
var_dump(cakes(
  ['flour' => 500, 'sugar' => 200, 'eggs' => 1], 
  ['flour' => 1200, 'sugar' => 1200, 'eggs' => 5, 'milk' => 200]) 
  === 2); 

var_dump(cakes(
  ['apples' => 3, 'flour' => 300, 'sugar' => 150, 'milk' => 100, 'oil' => 100], ['sugar' => 500, 'flour' => 2000, 'milk' => 2000]) 
  === 0); 

var_dump(cakes(
  ['flour' => 500, 'sugar' => 200, 'eggs' => 1], 
  ['flour' => 1500, 'sugar' => 1200, 'eggs' => 5, 'milk' => 200]) 
  === 3); 

