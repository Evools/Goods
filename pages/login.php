<?php $title_name = "Авторизация"; ?>

<?php



require_once "./include/config.php";
require_once "./include/function.php";

session_start();

$data = $_POST;


if (isset($data['auth'])) {
  $email = clear_field($data['email']);
  $password = clear_field($data['password']);

  $errMsg = [];

  if(empty($email)){
    $errMsg[] = "E-Mail не должен быть пустым";
  }
  if(empty($password)){
    $errMsg[] = "Пароль не должен быть пустым";
  }

  if(!$errMsg){
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
          <form method="POST" action="login" class="auth-form">
            <div class="auth-form__input">
              <small>E-Mail</small>
              <small class="errMsg"><?= $errMsg[0]; ?></small>
              <input type="email" name="email">
            </div>
            <div class="auth-form__input">
              <small>Пароль</small>
              <small class="errMsg"><?= $errMsg[1]; ?></small>
              <input type="password" name="password">
            </div>
            <div class="auth-form__button">
              <button class="btn btn-login" name="auth" type="submit">Войти</button>
              <a class="btn btn-deff" href="register">Регистрация</a>
            </div>
          </form>
      </div>
    </div>
  </div>
</div>

<?php include "./layout/footer.php"; ?>