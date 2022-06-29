<?php
    require_once "db.php";
 
    $name = mysqli_real_escape_string($conn, $_POST['firstName'] . " " . $_POST['lastName']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);
 
 
    if(mysqli_query($conn, "INSERT INTO customers(name, email, message) VALUES('" . $name . "', '" . $email . "', '" . $message . "')")) {
     echo '1';
    } else {
       echo "Error: " . $sql . "" . mysqli_error($conn);
    }
 
    mysqli_close($conn);
 
?>