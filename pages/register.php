<?php $title_name = "Авторизация"; ?>

<?php

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

require_once "./include/config.php";
global $connect;

if(isset($_POST['register'])){
  $errMsg = '';

  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

  try {
    $sql = "INSERT INTO users ( `username`, `email`, `password` ) VALUES ( :username, :email, :password )";
    $query = $connect->prepare( $sql );
    $result = $query->execute([
      ':username'=> $username,
      ':email'=> $email,
      ':password'=> $password

    ]);
    if (!empty($result) ){
        header('location: /login');
    }
  } catch (PDOException $e) {
    $errMsg = $e->getMessage();
  }
}


?>

<?php include "./layout/header.php"; ?>

<div class="main">
  <?php include "./layout/sidebar.php"; ?>
  <div class="content-block">
    <div class="auth-block">
      <div class="auth-content">
        <h2 class="auth-logo">
          <img src="./assets/img/icons/Goods/logo-dark.svg" alt="">
          <span><?= $title_name; ?></span>
        </h2>
        <form method="POST" action="register" class="auth-form">
          <div class="auth-form__input">
            <small>ФИО</small>
            <input type="text" name="username">
          </div>
          <div class="auth-form__input">
            <small>E-Mail</small>
            <input type="email" name="email">
          </div>
          <div class="auth-form__input">
            <small>Пароль</small>
            <input type="password" name="password">
          </div>
          <div class="auth-form__input">
            <small>Повторить пароль</small>
            <input type="password" name="confirm">
          </div>
          <div class="auth-form__button">
            <button class="btn btn-login" name="register" type="submit">Регистрация</button>
            <a class="btn btn-deff" href="login">Войти</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<?php include "./layout/footer.php"; ?>