<?php

  define("DB_HOST", "localhost");
  define("DB_USER", "root");
  define("DB_PASS", "root");
  define("DB_NAME", "goods");

  $connect = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

  if(!$connect){
    die("Code error: " . mysqli_connect_errno() . " MYSQL Error! " . mysqli_connect_error());
    exit();
  }
