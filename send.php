<?php
    require_once "databasecon.php";
 
    $firstname = mysqli_real_escape_string($conn, $_POST["firstname"]);
	$lastname = mysqli_real_escape_string($conn, $_POST["lastname"]);
    $number = mysqli_real_escape_string($conn, $_POST["number"]);
    $message = mysqli_real_escape_string($conn, $_POST["message"]);
 
 
    if(mysqli_query($conn, "INSERT INTO wiadomosc(firstname, lastname, number, message) VALUES(" . $firstname . ", " . $lastname . ", " . $number . ", " . $message . ")")) {
     echo 'Wysłano!';
    } else {
       echo "Error: " . $sql . "" . mysqli_error($conn);
    }
 
    mysqli_close($conn);
 
?>