<?php


if (($handle = fopen("categories.csv", "r")) !== FALSE) {
  $arr = array(); // Main array


  // Get file content
  while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
    $arr[] = $data;

  }
    

    // Add extra dimension for tab
    for($i = 0; $i < count($arr); $i++)
        $arr[$i]['tab'] = "";

   






/*
    function tabs($arr){
    
    
    }

    foreach($arr as $i){
        
        if($i[1] == "") echo $i[2]."\n";
        else{
            
        }


    }
    */

    

    function tabs($arr, $end){
        if ($end == 7) return;
        else
            for($i = 0; $i < $end; $i++){
                if($arr[$i] == "") echo $arr[$i];
            }
        tabs($arr, $end+1);
    }



    tabs($arr,0);
/*

    // Fuck, fuck, fuck!
    foreach($arr as $i){
        if($i[1] != ""){
            $i['tab'].= "\t";
            
        }
        
        echo $i['tab'] . $i[2] . "\n";
        
    }
    
    //foreach($arr as $i)
    //    echo "$i[2]$i[1]";
    //var_dump($arr);

    /*
    die();
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
  
*/
  fclose($handle); // End filework
}


?>
