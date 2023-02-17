<?php

$result = [1, 2,3,4,5,6,7,8];


?>


<div class="total">
  <div class="total-form">
    <div class="total-buttons">
      <button>Все товары (5)</button>
      <button>С ошибками (1)</button>
    </div>
    <div class="search-block">
      <img src="./assets/img/icons/Goods/search.svg" alt="">
      <input type="search" placeholder="Поиск">
    </div>
  </div>
  <table class="table">
    <thead>
      <tr>
        <td>
          <label class="checkbox bounce">
            <input type="checkbox">
            <svg viewBox="0 0 21 21">
              <polyline points="5 10.75 8.5 14.25 16 6"></polyline>
            </svg>
          </label>
          <span>Наименование</span>
        </td>
        <td>Артикул</td>
        <td>Ozon</td>
        <td>WB</td>
        <td>VK</td>
        <td></td>
      </tr>
    </thead>
    <tbody>

      <?php foreach ($result as $row) : ?>

        <tr>
          <td style="font-weight: bold">
            <label class="checkbox bounce">
              <input type="checkbox">
              <svg viewBox="0 0 21 21">
                <polyline points="5 10.75 8.5 14.25 16 6"></polyline>
              </svg>
            </label>
            <span>Товар 0</span>
          </td>
          <td>-</td>
          <td>Создан</td>
          <td>Создан</td>
          <td>Создан</td>
          <td>
            <a href="#">
              <img src="./assets/img/icons/Goods/ButtonEdit.svg" alt="">
            </a>
            <a href="#">
              <img src="./assets/img/icons/Goods/ButtonTrash.svg" alt="">
            </a>
          </td>
        </tr>

      <?php endforeach; ?>

    </tbody>
  </table>
  <button class="nav-button bg-indigo mt-3">Добавить товар</button>
</div>