<html>
<head>
    <title>ESTACIONAMIENTO TRES DE FEBRERO</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="body">
<u><h1 class="welcome">Estacionamiento TRES DE FEBRERO</h1></u>

<div class="php">
<?php
$horas= $_REQUEST['horas'];
$calculo;

if ($_REQUEST['horas']<=2){

  $calculo = 300 * $horas;
  echo "Debera pagar $", $calculo;
  echo "<br> <a class='saludo' href='index.html'> Aceptar el pago y volver </a>";

} elseif ($_REQUEST['horas']>2 AND $_REQUEST['horas']<=5){

  $calculo = 200 * $horas;
  echo "Debera pagar $", $calculo;
  echo "<br> <a class='saludo' href='index.html'> Aceptar el pago y volver </a>";

} elseif ($_REQUEST['horas']>=10){
  $calculo = 150 * $horas;  
    echo "Debera pagar $", $calculo;
    echo "<br> <a class='saludo' href='index.html'> Aceptar el pago y volver </a>";
}
if ($_REQUEST['horas']==0){
  echo "<br> Datos ingresados incorrectamente";
}
?>
</div>
</body>
</html>