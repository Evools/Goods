<?php

require_once "./include/config.php";
require_once "./include/function.php";

session_start();

$data = $_POST;


if (isset($data['auth'])) {
  $email = clear_field($data['email']);
  $password = clear_field($data['password']);

  $select_all_users = "SELECT * FROM `users`";
  $result_all_users = mysqli_query($connect, $select_all_users);

  while ($user = mysqli_fetch_assoc($result_all_users)) {
    if ($user['email'] === $email) {
      if (password_verify($password, $user['password'])) {
        $_SESSION['is_auth'] = true;
        $_SESSION['username'] = $user['username'];
        $_SESSION['email'] = $user['email'];
        $_SESSION['id'] = $user['id'];
      } else {
        echo "Не верный пароль!";
      }
    } else {
      echo "Нет такого пользователя";
    }
  }
  redirect_to("/");
}
