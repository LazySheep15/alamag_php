<?php 



$vCount = 0;
$str="John Deihl A. Alamag";
$str = strtolower($str);  
    for($i = 0; $i < strlen($str); $i++) {  
              
  
    if( $str[$i] == 'a' || $str[$i] == 'e' || $str[$i] == 'i' || $str[$i] == 'o' || $str[$i] == 'u') {  
          
        $vCount++;  
    }  
}
 
    echo "Number of vowels : " , $vCount;  
      

?>
