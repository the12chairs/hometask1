<?php


if (($handle = fopen("categories.csv", "r")) !== FALSE) {
  $arr = array(); // Main array


  // Get file content
  while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
    $arr[] = $data;

  }
  

$deep = 0;
// For each element
for($i = 0; $i < count($arr); $i++){
  $tmp = $arr[$i]; // Check first
  while($tmp[1] != ""){ // Some child
    
    foreach($arr as $j)
      if($j[0] == $tmp[1]){
	$tmp = $j; // Finded!
	$deep++; // Deepth of tabulation
      }
  }
  // Visualize that
  for($k = 0; $k < $deep; $k++)
    echo "\t";
  echo $arr[$i][2] . "\n";
  $deep = 0; // Reset deepth
}
    
 
fclose($handle); // End filework
}


?>
