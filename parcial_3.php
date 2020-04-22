<?php

require __DIR__.'/vendor/autoload.php';
// Start the session
session_start();
$pregunta_2 = time();
$_SESSION["pregunta_2"]=$pregunta_2;
?>

<!DOCTYPE html>
<html>
<body>
  <h2>Contesta lo que ves en la imágen:</h2>
<form action="parcial_3.php" method="post" enctype="multipart/form-data" onsubmit="myFunction()">
  <br><br>
<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/7.14.1/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.14.1/firebase-storage.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->

<script>

  // Your web app's Firebase configuration
  var firebaseConfig = {
    apiKey: "AIzaSyCJlj66nrjrawkpxNDq7wGVlTg0tdm7HY4",
    authDomain: "color-blind-steve.firebaseapp.com",
    databaseURL: "https://color-blind-steve.firebaseio.com",
    projectId: "color-blind-steve",
    storageBucket: "color-blind-steve.appspot.com",
    messagingSenderId: "275739954165",
    appId: "1:275739954165:web:ae771e1acedcebe50caebc"
  };

  // Initialize Firebase

  firebase.initializeApp(firebaseConfig);
        var storage = firebase.storage();
        var storageRef = storage.ref();
      
    var arr=[];


// Now we get the references of these images
    storageRef.listAll().then(function(result) {
      result.items.forEach(function(imageRef) {
        // And finally display them
        displayImage(imageRef);

      });
    }).catch(function(error) {
      // Handle any errors
    });
    
    var link="";
    function displayImage(imageRef) {
      imageRef.getDownloadURL().then(function(url) {
        // TODO: Display the image on the UI

         test = url;
         link=test;
         console.log(test);
        document.querySelector('img').src = test;
      }).catch(function(error) {
      });
    }
    console.log(arr);
</script>

<img height="480" width="640" id="img" src=""/>
   <br>

<label for="lname">Imagen 2:</label>
   <br>
<input type="text" name="ishi_2" placeholder="" id="ishi_2" required>


 <input type="submit" value="Enviar Respuesta" name="submit">
</form>

<?php

if ($_SESSION["ishi_2"]=="") {
$ishi_2 = $_POST['ishi_2'];

}
else{
$ishi_2 = $_SESSION["ishi_2"];

}

$_SESSION["ishi_2"]=$ishi_2;



if ($_SESSION["ishi_2"]!=""&&$_POST["submit"]!="") {
echo "<script> location.href='fin.php'; </script>";
        exit;
  }

  ?>

</body>
</html>