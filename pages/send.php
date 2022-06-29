<?php
    require_once "databasecon.php";
 
    $fullname = mysqli_real_escape_string($conn, $_POST['firstname']);
	$lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
    $number = mysqli_real_escape_string($conn, $_POST['number']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);
 
 
    if(mysqli_query($conn, "INSERT INTO stajnia(firstname, lastname, number, message) VALUES('" . $firstname . "', '" . $lastname . "', '" . $number . "', '" . $message . "')")) {
     echo '1';
    } else {
       echo "Error: " . $sql . "" . mysqli_error($conn);
    }
 
    mysqli_close($conn);
 
?>