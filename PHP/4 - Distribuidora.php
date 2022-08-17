<?php
  $estados= array(
    'SP' => 67836.43,
    'RJ' => 36678.66,
    'MG' => 29229.88,
    'ES' => 27165.48,
    'Outros' => 19849.53
);
$total=0;
foreach($estados as $calc){
  $total=$total+$calc;

}
foreach($estados as $key =>$valor) {

    $porcentagem=($valor/$total)*100;
  echo "\nCidade: ".$key ."  ". "Valor: ". $porcentagem." %";

}
echo "\nFaturamento total ".$total;
//Criado por Tharlison no compilador online ONECOMPILE PHP
?>