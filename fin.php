<?php


// Start the session
session_start();
$pregunta_fin= time();

?>
<!DOCTYPE html>
<html>
<body>
  <h2>Repuestas del examen:</h2>


<?php


$miFecha= time();
if ($_SESSION["Fin"]=="") {
$_SESSION["Fin"]=$miFecha;

}

echo "Mail ".$_SESSION["email"]."<br>";
echo "Nombre ".$_SESSION["name"]."<br>";
echo "Celular ".$_SESSION["celular"]."<br>";

echo "Tiempo pregunta 1: ".($_SESSION["pregunta_1"]-$_SESSION["pregunta_inicio"])." segundos"."<br>";
echo "Tiempo pregunta 2: ".($_SESSION["pregunta_2"]-$_SESSION["pregunta_1"])." segundos"."<br>";

$fin= $_SESSION["Fin"]-$_SESSION["inicio"];
echo "Tiempo Total ";
echo "Minutos: ".floor($fin/60);
echo " Segundos:".$fin;

// echo "Tiempo en contestar: ".strftime("%H:%M", $miFecha)-strftime("%H:%M", $$_SESSION["inicio"]);
// echo "Favorite Player " . $_SESSION["player"] . ".<br>";
// print_r($_SESSION); 

?>

<br><br>
  <button onclick="window.location.href='inicio.php'">Comenzar De Nuevo</button>



</body>
</html>