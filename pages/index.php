<?php $title_name = "Home Page"; ?>

<?php
  require_once "./include/function.php";
  if (!isset($_SESSION['is_auth'])) {
    redirect_to('/login');
  }
?>

<?php include "./layout/header.php"; ?>

<div class="main">
  <?php include "./layout/sidebar.php"; ?>
  <div class="content-block">
    <?php include "./layout/nav.php"; ?>
    <?php include "./include/home.php"; ?>
  </div>
</div>

<?php include "./layout/footer.php"; ?>