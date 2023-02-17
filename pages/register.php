<?php $title_name = "Авторизация"; ?>

<?php

  require_once "./include/config.php";
  require_once "./include/function.php";


$data = $_POST;

if(isset($data['register'])){

  $username = clear_field($data['username']);
  $email = clear_field($data['email']);
  $password = clear_field($data['password']);
  $hash_password = password_hash($password, PASSWORD_DEFAULT);
  $confirm = clear_field($data['confirm']);

  $errMsg = [];
  if(empty($username)){
    $errMsg[] = "Поле не должно быть пустым";
  }
  if(empty($email)){
    $errMsg[] = "E-Mail не должен быть пустым";
  }
  if(empty($password)){
    $errMsg[] = "Пароль не должен быть пустым";
  }
  if(empty($confirm)){
    $errMsg[] = "Поле не должно быть пустым";
  }
  if($password !== $confirm){
    $errMsg[] = "Пароли не совпадают";
  }
 

  if(!$errMsg){
  
    $requery = "INSERT INTO `users` (`username`, `email`, `password`) VALUES ('$username', '$email', '$hash_password')";
    $result = mysqli_query($connect, $requery);
  
    if (!$result) {
      echo "Error";
    } else {
      redirect_to('/login');
    }
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
            <small class="errMsg"><?= $errMsg[0]; ?></small>
            <input type="text" name="username">
          </div>
          <div class="auth-form__input">
            <small>E-Mail</small>
            <small class="errMsg"><?= $errMsg[1]; ?></small>
            <input type="email" name="email">
          </div>
          <div class="auth-form__input">
            <small>Пароль</small>
            <small class="errMsg"><?= $errMsg[2]; ?></small>
            <input type="password" name="password">
          </div>
          <div class="auth-form__input">
            <small>Повторить пароль</small>
            <small class="errMsg"><?= $errMsg[3]; ?></small>
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