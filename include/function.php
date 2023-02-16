<?php

  function redirect_to($location)
  {
    return header("Location: $location");
  }

  function clear_field($field)
  {
    return trim(htmlspecialchars($field));
  }