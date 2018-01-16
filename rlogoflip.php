<?php  


$array = explode(",", file_get_contents("logoflip.txt"));

serprnt(chr(0x1b).chr(0x55).chr(0x1));    // unidirectional
  
serprnt(chr(0x1b).chr(0x2a).chr(33).chr(96).chr(0));
 
for($l=576; $l<672; $l++) {
  
$m = $l+96;
$n = $l+192;   
serprnt (chr($array[$n]).chr($array[$m]).chr($array[$l]));
 

}

serprnt(chr(0xa));  



serprnt(chr(0x1b).chr(0x2a).chr(33).chr(96).chr(0));
 
for($l=288; $l<384; $l++) {
  
$m = $l+96;
$n = $l+192;   
serprnt (chr($array[$n]).chr($array[$m]).chr($array[$l]));
 
}

serprnt(chr(0xa));  



serprnt(chr(0x1b).chr(0x2a).chr(33).chr(96).chr(0));
 
for($l=0; $l<96; $l++) {
  
$m = $l+96;
$n = $l+192;   
serprnt (chr($array[$n]).chr($array[$m]).chr($array[$l]));
 
}


serprnt(chr(0xa));  

serprnt(chr(0x1b).chr(0x55).chr(0x0));    //  end uni



?>