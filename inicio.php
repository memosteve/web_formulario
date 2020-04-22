<?php


// Start the session
session_start();
session_destroy();
session_unset();
session_start();
?>
<!DOCTYPE html>
<html>
<body>
  <h2>Prueba para Deficiencia De Color:</h2>

<form action="inicio.php" method="post" enctype="multipart/form-data" onsubmit="myFunction()">
  <br><br>

  <br><br>

<label for="lname">Al Hacer Click al butón de iniciar comenzará la prueba.</label>
   <br>    <br>


 <input type="submit" value="Iniciar" name="submit">
</form>

<?php
$Nuevo = $_POST['submit'];

if ($Nuevo=="Iniciar") {

$miFecha= time();
$_SESSION["inicio"] = $miFecha;

echo "<br>".$_SESSION["inicio"];

        echo "<script> location.href='parcial.php'; </script>";
        exit;
}

// echo "Favorite Player " . $_SESSION["player"] . ".<br>";
// print_r($_SESSION); 

?>


<script>
function myFunction() {
window.location.reload();  
}
</script>


</body>
</html>