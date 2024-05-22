<?php
// receber o valor do form

$numero = $_POST['numero'];

//Contador

for($x = 1; $x<=10;  $x++)
{
  $result = $numero * $x;
  echo "$numero"."x"."$x"."="."$result";
  echo "<br>";
}
?>