

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
          <form method="POST" action="auth" class="auth-form">
            <div class="auth-form__input">
              <small>E-Mail</small>
              <input type="email">
            </div>
            <div class="auth-form__input">
              <small>Пароль</small>
              <input type="password">
            </div>
            <div class="auth-form__button">
              <button class="btn btn-login" name="login" type="submit">Войти</button>
              <a class="btn btn-deff" href="register">Регистрация</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

<?php include "./layout/footer.php"; ?>