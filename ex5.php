<?php

$clube = array(
'SLB' => $SLB = array(
	'nome' => 'Sport Lisboa e Benfica',
	'estadio' => 'Estádio da Luz',
	'localidade' => 'Lisboa',
	'pais' => 'Portugal'
),
'SCP' => $SCP = array(
	'nome' => 'Sporting Clube de Portugal',
	'estadio' => 'Estádio José de Alvalade',
	'localidade' => 'Lisboa',
	'pais' => 'Portugal'
),
'FCP' => $FCP = array(
	'nome' => 'Futebol clube do Porto',
	'estadio' => 'Estádio do Dragão',
	'localidade' => 'Porto',
	'pais' => 'Portugal'
),
'Aves' => $Aves = array(
	'nome' => 'Clube Desportivo das Aves',
	'estadio' => 'Complexo Desportivo do Clube Desportivo das Aves.',
	'localidade' => 'Aves',
	'pais' => 'Portugal'
)
);

foreach ($clube as $nome => $chave) {
	echo $nome;
	echo "<br>";
	foreach ($chave as $key => $qlq) {
		echo $key .' - '.$qlq;
		echo "<br>";
	}
}

?>
