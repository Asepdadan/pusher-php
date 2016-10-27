<?php
   $arr = array('a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5);
   $json = json_encode($arr);
   print_r($json);

   $hobi = array(
   	 1 => array('sepak bola','futsal'),
   	 2 => array('bola kasti','bola pingpong'),
   	3 => array('volly ball','bola tenis','bekel'),
   	);
   echo "<br>";
   echo "==============<br>";
   echo json_encode($hobi);
   echo "<br>";
   print_r($hobi);;

   $length = count($hobi);
   echo $length;
   //echo $hobi[1]['a'];
   

?>