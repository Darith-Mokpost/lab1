<?php
	
	function generateRandomString($gap = 4) {
		$arr = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$arrLength = strlen($arr);
		$randomString = '';
		
		$ran = rand(0, $arrLength - 1);
		for ($i = 0; $i < $gap-1; $i++) {
	        $randomString .= $arr[rand(0, $arrLength - 1)];
	    }
	    return $randomString;
	}

	
	$str = "KILL JOHN";
	
	$result = "";
	
	for ($i=0; $i < strlen($str) ; $i++) {

		$result .= $str[$i].generateRandomString();
	}
	echo $result;
?>