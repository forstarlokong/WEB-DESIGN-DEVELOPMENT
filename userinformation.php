<?php

$connection = mysqli_connect('localhost', 'root');

mysqli_select_db($connection, "contactdata");

$name = $var_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];

$query = "INSERT INTO 'userdata'('name', 'email','phone') VALUES ('$name','$email','$phone')";

mysqli_query($connection,$query);

echo "MESSAGE IS SENT";

?>