<?php

require_once "./include/config.php";
require_once "./include/function.php";


$data = $_POST;

if(isset($data['register'])){
  $username = clear_field($data['username']);
  $email = clear_field($data['email']);
  $password = clear_field($data['password']);
  $hash_password = password_hash($password, PASSWORD_DEFAULT);

  $requery = "INSERT INTO `users` (`username`, `email`, `password`) VALUES ('$username', '$email', '$hash_password')";
  $result = mysqli_query($connect, $requery);

  if (!$result) {
    echo "Error";
  } else {
    redirect_to('/register');
  }
}
