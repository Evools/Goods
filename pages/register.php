<?php $title_name = "Авторизация"; ?>

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