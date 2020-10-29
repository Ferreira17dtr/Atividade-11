<?php

$pais=('Portugal');
$frase=("Estou a aprender PHP na secundária");
echo substr($pais, 4, 2);

?>

<br>

<?php

echo strlen($pais);
echo "<br>";
echo str_replace('Portugal', 'PORTUGAL', $pais);
echo "<br>";
echo str_replace("Estou a aprender PHP na secundária", "Estou a aprender PHP na escola", $frase);

?>
<br>
<?php

$cores = array('vermelho ', 'azul ', 'verde ','amarelo ');

echo $cores[1];
echo "<br>";
?>

<?php

$a = array("a"=>"maçã","b"=>"banana");
$b = array("f"=>"kiwi","d"=>"ananás","c"=>"morango");

$resultado = array_merge($a, $b);

foreach ($resultado as $dados) {
	echo $dados;
}
echo "<br>";
$a = array("a"=>"maçã","b"=>"banana");
$b = array("c"=>"kiwi","d"=>"ananás","e"=>"morango");

echo "<br>";

$resultado = array_merge($b, $a);

foreach ($resultado as $dados) {
	echo $dados;
}


?>

