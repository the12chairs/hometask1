<?php


if (($handle = fopen("categories.csv", "r")) !== FALSE) {
  $arr = array(); // Main array


  // Get file content
  while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
    $sp = explode(";", $data[0]); // Here 0 element is id, 1 element is parent id
    $arr[] = $sp; // 
   
  }
  
  
  $flag = 0; // This is bad idea, I know :)
  foreach($arr as $i){
    if($i[1] == ""){
      echo "$i[2]\n"; // Root elements
    }
    else {
      foreach($arr as $j)
	if($i[1] == $j[0] && $i[0]!=$flag){
	  echo "\t$i[2]\n"; // Sub-elements
	  foreach($arr as $k){
	    if($i[0] == $k[1]){
	      echo "\t\t$k[2]\n";
	      $flag = $k[0]; // Sub-sub-elements
	    }
	  }
	}
    }
  }
  
  
  fclose($handle); // End filework
}


?>