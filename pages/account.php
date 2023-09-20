<?php
 session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="/css/main.css" />
    <!-- <link rel="stylesheet" href="/css/index.css"> -->
    <link rel="stylesheet" href="/css/account.css" />
    <title>FLOWRESS</title>
  </head>
  <body>
    <?php require "header.php" ?>

    <div class="tn_container">
      <div class="container">
        <div class="navigate">Главная-Аккаунт</div>
        <div class="title_">МОЙ АККАУНТ</div>
      </div>
    </div>
    <div class="container">
      <div class="main_container">
        <div class="account_container">
          <div class="info">
            <input
              class="input_add"
              style="margin-top: 0"
              type="text"
              placeholder="Имя"
            />
            <input class="input_add" type="text" placeholder="Номeр телефона" />
            <input class="input_add" type="text" placeholder="Email" />
            <div class="buttons">
              <button class="change_info">Сохранить</button>
              <!-- <button class="change_info" onclick=change_pass()>Изменить пароль</button> -->
            </div>
          </div>

          <div class="info pass">
            <input
              class="input_add"
              style="margin-top: 0; width:100%"
              type="text"
              placeholder="Новый пароль"
            />
            <input
              class="input_add"
              type="text"
              style=" width:100%"
              placeholder="Повоторите пароль"
            />
            <div class="buttons">
              <button class="change_info">Сохранить</button>
            </div>
          </div>
          <!-- <div class = 'posts'> -->
          <!-- -->
        </div>

        <div class="orders">
          <div class="title_ product">МОИ ЗАКАЗЫ</div>
          <div class="order_scroll">
          <div class="order_background">
            <div class="name"><b>СЕРЬГИ-ГВОЗДИКИ КАПЕЛКИ </b></div>

            <div class="order_details">
              <img class="order_photo" src="/img/item1.png" />
              <div class="description">
                <div class="details">
                  <p class="type">Категория: Серьги</p>
                  <p class="forms">Форма: Круг</p>
                  <p class="color">Цвет заливки: Прозрачный</p>
                  <p class="flower">Цветок: Ромашка</p>
                  <p class="flower">Цена: 35 BYN</p>
                </div>
                <div class="date">Дата: 12.04.2023</div>
              </div>
            </div>
          </div>

          <div class="order_background">
            <div class="name"><b>СЕРЬГИ-ГВОЗДИКИ КАПЕЛКИ </b></div>

            <div class="order_details">
              <img class="order_photo" src="/img/item1.png" />
              <div class="description">
                <div class="details">
                  <p class="type">Категория: Серьги</p>
                  <p class="forms">Форма: Круг</p>
                  <p class="color">Цвет заливки: Прозрачный</p>
                  <p class="flower">Цветок: Ромашка</p>
                  <p class="flower">Цена: 35 BYN</p>
                </div>
                <div class="date">Дата: 12.04.2023</div>
              </div>
            </div>
          </div>

          <div class="order_background">
            <div class="name"><b>СЕРЬГИ-ГВОЗДИКИ КАПЕЛКИ </b></div>

            <div class="order_details">
              <img class="order_photo" src="/img/item1.png" />
              <div class="description">
                <div class="details">
                  <p class="type">Категория: Серьги</p>
                  <p class="forms">Форма: Круг</p>
                  <p class="color">Цвет заливки: Прозрачный</p>
                  <p class="flower">Цветок: Ромашка</p>
                  <p class="flower">Цена: 35 BYN</p>
                </div>
                <div class="date">Дата: 12.04.2023</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>

    <?php require "footer.php" ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="/js/jquery-3.4.1.min.js"></script>
    <script src="/js/jquery.maskedinput.min.js"></script>
    <script src="/js/main.js"></script>
  </body>
</html>
