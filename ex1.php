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

?>

<?php

$a = array("a"=>"maçã","b"=>"banana");
$b = array("a"=>"kiwi","b"=>"ananás","c"=>"morango");

echo array_merge($a)

?>

