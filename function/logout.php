<?php

require_once "./include/function.php";

if (!isset($_SESSION['is_auth'])) {
  redirect_to("/login");
} else {
  session_destroy();
  redirect_to("/");
}