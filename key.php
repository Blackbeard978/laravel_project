<?php
// PHP program to check if a key
// exists in an array or not

$array = array(
	'names' => array("Geek1", "Geek2", "Geek3"),
	'rank' => array('1', '2', '3')
);

// Use of array_key_exists() function
if(isset($array["rank"])){
	echo "Found the Key";
}
else{
	echo "Key not Found";
}

?>
