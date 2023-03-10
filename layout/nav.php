<div class="nav">
  <div class="info">
    <h2>Товары</h2>
    <div class="nav-breadcrump">

      <?php
        $_SERVER['HTTPS'] = false;
        function breadcrumbs($separator = ' &raquo; ', $home = 'Главная')
        {
          $path = array_filter(explode('/', parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)));
          $base = ($_SERVER['HTTPS'] ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/';
          $breadcrumbs = array("<a href=\"$base\">$home</a>");
          $crumbs = '';
          $last = end(array_keys($path));
          foreach ($path as $x => $crumb) {
            $title = ucwords(str_replace(array('.php', '_', '%20'), array('', ' ', ' '), $crumb));
            if ($x != $last) {
              $breadcrumbs[] = "<a href=\"$base$crumbs$crumb\">$title</a>";
              $crumbs .= $crumb . '/';
            } else {
              $breadcrumbs[] = $title;
            }
          }
          return implode($separator, $breadcrumbs);
        }
      ?>
      <?= breadcrumbs(' / '); ?>
    </div>
  </div>

  <div class="nav-col">
    <div class="nav-button bg-indigo">
      <img src="./assets/img/icons/profile.svg" alt="">
        <?= $_SESSION['username']; ?>
    </div>
    <a href="/logout" class="nav-button">
      <img src="./assets/img/icons/logout.svg" alt="">
      <span>Выйти</span>
    </a>
  </div>
</div>