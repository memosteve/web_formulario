<?php
// Start the session
session_start();
$pregunta_2 = time();
$_SESSION["pregunta_inicio"]=$pregunta_2;

// if ($_SESSION["player"]==""||$_SESSION["texto"]=="" || $_SESSION["inicio"]=="" || $_SESSION["contestado"] != "si"
// ) {

//         echo "Aun faltan preguntas por contestar";

// }
?>
<!DOCTYPE html>
<html>
<body>
  <h2>Contesta con tus Datos de Contacto:</h2>
  <h3>Serán importantes para comunicarnos para el premio:</h3>

<form action="parcial.php" method="post" enctype="multipart/form-data" onsubmit="myFunction()">
  <br><br>

<label for="lname">Ingresa tu correo:</label>
   <br>
<input type="email" name="email" placeholder="correo@gmail.com" id="email" required>
<br><br>

<label for="lname">Nombre:</label>
   <br>
<input type="text" name="name" placeholder="Bruno Reyes" id="name" required>
<br><br>

<label for="lname">Celular:</label>
   <br>
<input type="number" name="celular" placeholder="8120889233" id="celular" required>
<br><br>

 <input type="submit" value="Enviar Respuesta" name="submit">
</form>

<?php

if ($_SESSION["name"]=="") {
$Name = $_POST['name'];
$email = $_POST['email'];
$celular = $_POST['celular'];
}
else{
$Name = $_SESSION["name"];
$email = $_SESSION["email"];
$celular = $_SESSION["celular"];
}

$_SESSION["email"]=$email;
$_SESSION["name"]=$Name;
$_SESSION["celular"]=$celular;



// if ($_SESSION["email"]==""&&$_POST["submit"]!="") {
//   echo "No llenaste el email";
// }

// if ($_SESSION["celular"]==""&&$_POST["submit"]!="") {
//   echo "No llenaste el campo de número celular";
// }

// if ($_SESSION["name"]==""&&$_POST["submit"]!="") {
//   echo "No llenaste el campo del nombre";
// }

if ($_SESSION["email"]!=""&&$_POST["submit"]!="") {
echo "<script> location.href='parcial_2.php'; </script>";
        exit;
  }

// print_r($_SESSION); 

?>

</body>
</html>