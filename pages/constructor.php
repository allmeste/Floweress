<?php
 session_start();
?> 
<?php require "order.php" ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="/css/main.css" />
    <!-- <link rel="stylesheet" href="/css/index.css"> -->
    <link rel="stylesheet" href="/css/constructor.css" />
    <title>FLOWRESS</title>
  </head>
  <body>
  <?php require "header.php" ?>

    <div class="tn_container">
      <div class="container">
        <div class="navigate">Главная-Конструктор</div>
        <div class="title_">КОНСТРУКТОР</div>
      </div>
    </div>
    <div class="container">
      <div class="construct_title">КАТЕГОРИЯ ИЗДЕЛИЯ</div>
      <div class="categores_photo">
        <div class="category_type category" name="0" id="1" >
          <img  class="type" src="/img/cat1.png" />
          <br />
          <p>СЕРЬГИ</p>
        </div>
        <div class="category_type category" name="0" id="2" >
          <img class="type" src="/img/cat2.png" />
          <br />
          <p>ГВОЗДИКИ</p>
        </div>
        <div class="category_type category" name="0" id="3">
          <img  class="type" src="/img/cat3.png"  />
          <br />
          <p>КУЛОН</p>
        </div>
        <div class="category_type category" name="0" id="4">
          <img  class="type" src="/img/cat4.png"  />
          <br />
          <p>КОЛЬЦО</p>
        </div>
      </div>

      <div class="construct_title">ФОРМА</div>
      <div class="categores">
        <div class="category_form category_btn" name="0" id="1">
          <p>КРУГ</p>
        </div>
        <div class="category_form category_btn" name="0" id="2">
          <p>ОВАЛ</p>
        </div>
        <div class="category_form category_btn" name="0" id="3">
          <p>КВАДРАТ</p>
        </div>
        <div class="category_form category_btn" name="0" id="4">
          <p>СЕРДЦЕ</p>
        </div>
        <div class="category_form category_btn" name="0" id="5">
          <p>МЕСЯЦ</p>
        </div>
        <div class="category_form category_btn" name="0" id="6">
          <p>КАПЛЯ</p>
        </div>
      </div>

      <div class="construct_title">ЦВЕТОК</div>
      <div class="categores_photo">
        <div class="row1">
          <div class="category category_flower " name="0" id="1">
            <img class="flower" src="/img/flower1.png" />
            <br />
            <p>РОМАШКА</p>
          </div>
          <div class="category_flower category" name="0" id="2">
            <img  class="flower" src="/img/flower2.png" />
            <br />
            <p>ВАСИЛЕК</p>
          </div>
          <div class="category_flower category" name="0" id="3">
            <img  class="flower" src="/img/flower3.png" />
            <br />
            <p>ГЕНИСТА</p>
          </div>
          <div class="category_flower category" name="0" id="4">
            <img  class="flower" src="/img/flower4.png" />
            <br />
            <p>НЕЗАБУДКА</p>
          </div>
        </div>
        <div class="row2">
          <div class="category_flower category" name="0" id="5">
            <img  class="flower" src="/img/flower5.png" />
            <br />
            <p>СПИРЕЯ</p>
          </div>
          <div class="category_flower category" name="0" id="6">
            <img  class="flower" src="/img/flower6.png" />
            <br />
            <p>ОЗАТАМНУС</p>
          </div>
          <div class="category_flower category" name="0" id="7">
            <img  class="flower" src="/img/flower7.png" />
            <br/>
            <p>КОБЕЯ</p>
          </div>
          <div class="category_flower category " name="0" id="8">
            <img  class="flower" src="/img/flower8.png" />
            <br />
            <p>КОСМЕЯ</p>
          </div>
        </div>
      </div>
      <div class="construct_title">ЦВЕТ</div>
      <div class="categores">
        <div class="category_btn_color" name="0" id="1">
          <p>ПРОЗРАЧНЫЙ</p>
        </div>
        <div class="category_btn_color" name="0" id="2">
          <p>РОЗОВЫЙ</p>
        </div>
        <div class="category_btn_color" name="0" id="3">
          <p>ЗОЛОТОЙ</p>
        </div>
        <div class="category_btn_color" name="0" id="4">
          <p>СЕРЕБРЯНЫЙ</p>
        </div>
        <div class="category_btn_color" name="0" id="5">
          <p>ПЕРЛАМУТРОВЫЙ</p>
        </div>
      </div>
    </div>
    <div class="branch1">
        <img class="branch1_img"   src="/img/branch1_flip.png">
    </div>
    <div class="container">
    <div class="add_form_container">

<div class="add_form">
<p  class="title">ПОДЕЛИТЕСЬ ВАШИМ ВИДИНЕЕМ</p>
<p style="color: #A7A7A7 ;">Это не обязательное поле, но с помощью него нам будет проще понять вашу задумку.</p>

<input class="input_add" type="text" placeholder="Ваше видение">
<button class="order_btn" style="margin-top: 44px;" onclick='order()' >Заказать за 40 BYN</button>
    </div>  
</div> 
</div>
<?php require "footer.php" ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="/js/slider.js"></script>
<script src="/js/main.js"></script>
    <script src="/js/constructor.js"></script>
  </body>
</html>
