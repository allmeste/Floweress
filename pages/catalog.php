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
    <link rel="stylesheet" href="/css/catalog.css" />
    <title>FLOWRESS</title>
  </head>
  <body>
    <?php require "header.php" ?>
    <div class="tn_container">
      <div class="container">       
        <div class="navigate">Главная-Каталог</div>
        <div class="title_">КАТАЛОГ</div>
      </div>
    </div>
    <div class="container">
    <div class="catalog_container" >
    <div class="catalog">
     <div class="catalog_cards">
      </div>
      <div class="filter_container">
        <div class="filter_icon_container">
          <p>Фильтр&emsp;</p>
          <img class="icon_" src="/img/filter.png" />
        </div>
        <b><p>Изделие</p></b><br />
        <div class="options">
          <div>
            <input type="checkbox" class="chckbx type" id="1" value="Гвоздики"/>Гвоздики </div>

          <div>
          <input  type="checkbox" class="chckbx type" id="2"  value="Серьги"/>Серьги </div>
          <div>
            <input type="checkbox" class="chckbx type"  id="3" value="Кулон" />Кулон </div>
          <div>
            <input type="checkbox" class="chckbx type"  id="4"  value="Кольцо"/>Кольцо </div>
        </div>

        <br><b><p>Цветок</p></b><br>
        <div class="options">
          <div>
            <input type="checkbox" class="chckbx flower" id="1" value="Ромашка" />Ромашка</div>
          <div>
          <input  type="checkbox" class="chckbx flower" id="2" value="Незабудка"/>Незабудка</div>
          <div>
            <input type="checkbox" class="chckbx flower" ]id="3" value="Василек" />Василек </div>
          <div>
            <input type="checkbox" class="chckbx flower" id="4" value="Спирея" />Спирея</div>
          <div>
            <input type="checkbox" class="chckbx flower" id="5" value="Кобея" />Кобея</div>
          <div>
            <input type="checkbox" class="chckbx flower" id="6" value="Космея" />Космея</div>
            <div>
            <input type="checkbox" class="chckbx flower" id="7" value="Озатамнус" />Озатамнус</div>
        </div>

        <br><b><p>Форма</p></b><br>
        <div class="options">
          <div>
            <input type="checkbox" class="chckbx forms" id="1" value="Сердце" />Сердце</div>
          <div>
          <input  type="checkbox" class="chckbx forms" id="2" value="Квадрат"/>Квадрат</div>
          <div>
            <input type="checkbox" class="chckbx forms" ]id="3" value="Овал" />Овал</div>
          <div>
            <input type="checkbox" class="chckbx forms" id="4" value="Капля" />Капля</div>
         <div>
            <input type="checkbox" class="chckbx forms" id="6" value="Круг" />Круг</div>

        </div>
        
            <br><b><p>Цвет</p></b><br>
            <div class="options">
              <div>
                <input type="checkbox" class="chckbx color" id="1" value="Прозрачный" />Прозрачный</div>
    
              <div>
              <input  type="checkbox" class="chckbx color" id="2" value="Розовый"/>Розовый</div>
              <div>
                <input type="checkbox" class="chckbx color" id="3" value="Золотой" />Золотой </div>
              <div>
                <input type="checkbox" class="chckbx color" id="4" value="Серебряный" />Серебряный</div>
              <div>
                <input type="checkbox" class="chckbx color" id="5" value="Перламутровый" />Перламутровый</div>
              <div>

</div>
</div>
        </div>
      </div>
    </div>
</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="/js/slider.js"></script>
     
<script src="/js/catalog.js"></script>   
<script src="/js/main.js"></script>
    <?php require "footer.php" ?>
  </body>
</html>
