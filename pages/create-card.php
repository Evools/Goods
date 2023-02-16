<?php $title_name = "Create Card"; ?>

<?php
    session_start();

    if (isset($_POST['create-total'])){
        $_SESSION['is_auth'] = true;
        $_SESSION['user'] = "Jim Harris";
        $_SESSION['email'] = "jimharris@mail.com";

        header('location: /');

    }

    if (isset($_POST['logout'])){
        session_destroy();
    }

?>

<?php include "./layout/header.php"; ?>

<div class="main">
  <?php include "./layout/sidebar.php"; ?>
  <div class="content-block">
    <?php include "./layout/nav.php"; ?>

    <?php include "./include/create-card.php"; ?>
  </div>
</div>

<?php include "./layout/footer.php"; ?>