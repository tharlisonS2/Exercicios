<?php
	$vetor =[];
  $vetor[0]=0;
  $vetor[1]=1;
  fscanf(STDIN, "%s\n", $numero);  
	for($i=2;$i<1000;$i++){
          $vetor[$i]=$vetor[$i-1]+$vetor[$i-2]; 
	       }
	foreach ($vetor as $t){
    if($t==$numero){
      echo 'Numero encontrado';
    }else{
      echo 'Numero não encontrado';
    }
  }
//Criado por Tharlison no compilador online ONECOMPILE PHP
?>