<?php
	$string="subi no onibus";
	$string2="";
	$i2=0;
	fscanf(STDIN, "%s\n", $string);  
	for($i=strlen($string)-1;$i>-1;$i--){
	  $string2[$i2]=$string[$i];
	  $i2++;
	}
	echo $string2;
	//Criado por Tharlison no compilador online ONECOMPILE PHP
?>