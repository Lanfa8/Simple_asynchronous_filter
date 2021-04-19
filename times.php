<?php 
$arquivo = fopen('times.csv', 'r');
fgetcsv($arquivo, 1000, ",");
$times = [];
while (($linha = fgetcsv($arquivo, 1000, ",")) != false){
	$times[] = [
		'Equipe' => $linha[0],
		'Série' => $linha[1] 
	];
}
print json_encode($times);
?>