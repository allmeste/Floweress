<?php
 session_start();
?> 
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="/css/index.css">
  <link rel="stylesheet" href="/css/main.css">

  <link rel="stylesheet" href="/css/slider.css">
  <title>FLOWRESS</title>
</head>
<body>
    <!-- <div class="container"> -->
  <?php require "header.php" ?>
    <!-- </div> -->
    <div class="main_screen">
        <div class="text_back">
            <p class="main_text">FLOWRESS</p>
            <p class="sub_text">ИЗДЕЛИЯ ИЗ ЭПОКСИДНОЙ СМОЛЫ РУЧНОЙ РАБОТЫ</p>
            <a href="catalog.php"><button class="main_btn">Перейти в катлог</button></a>
        </div>
        <!-- <img class="main_screen_back" src="/img/main_screen_back.jpg"> -->
    </div>
  
        <div class="letter_title">Дорогой  гость,</div>
        <div class="letter_text">Более 3 лет наша мастерская создает уникальные украшения для вас и ваших близких.
            <br><br><br>
            Мы аккуратно собираем и бережно засушиваем сезонные цветы и другие растения, далее используем самые качествееные материалы, чтобы наши украшения радовали очень долго.
            <br><br><br>
            Мы уверенны, что качественным продуктом продуктом должна стоять ответсвенность и полная отдача своему делу. Поэтому мы подходим с нежностью и аккуратностью не только к нашим украшения, но и к отношению с клиентом.
            <span style="font-family: mr_HamiltoneG; font-size: 24px; ">твои Flowress</span>
        </div>
        <div class="branch1">
        <img  class="branch1_img" src="/img/branch1.png"></div>
        
        <div class="branch2">
            <img class="branch2_img" src="/img/branch2.png">
        </div>
        <div class="container">
            <div class="popular">
            <p class="title">ПОПУЛЯРНЫЕ ИЗДЕЛИЯ</p> 
                <div class="popular_left">
                    <img class="item" src="/img/popular_item1.jpg">
                    <div class="popular_description_left">
                    <p>Серьги средние с незабудками и озотамнусом</p>
                    <br>
                    <p>35 BYN</p>
                    <a href="item.php"><button class="order_btn" >Заказать</button></a>
                    </div>
                </div>    
                <div class="popular_right">
                    <img class="branch3_img " src="/img/branch3.png">
            <div class="popular_description_right">
                    <p>Серьги средние с незабудками и озотамнусом</p>
                    <br>
                    <p>35 BYN</p>
                    <a href="item.php"><button class="order_btn" >Заказать</button></a>
                    </div>
                    <img class="item" src="/img/popular_item1.jpg">
                </div>  

                <div class="popular_left">
                    <img  class="item"src="/img/popular_item1.jpg">
                    <div class="popular_description_left">
                    <p>Серьги средние с незабудками и озотамнусом</p>
                    <br>
                    <p>35 BYN</p>
                    <a href="item.php"><button class="order_btn" style="z-index:3" >Заказать</button></a>
                    </div>
                   
                </div> 
            </div>  
        </div>
        <div class="branch4">
        <img class="branch1_img" style="transform: rotate(180deg);" src="/img/branch1.png">
         </div>
         <div class="container">
         <div class="constructor">
            <img class="constructor_img" src="/img/constuctor.png">
            <div class="constructor_text">
                <p class="title">КОНСТРУКТОР</p>
                <p class="constructor_txt">Конструктор - это уникальная возможность создать уникальное сочетание  цветов, форм и материалов и создать идеальное для вас украшение .<br><br>
                    Каждое украшение уже является уникальным, потому что изготавливается в ручную, однако конструктор поможет более точно сформиравать свою идею, также мы получаем конкретные пожелания при создании, что обеспечивает точное попадание в ваше сердце.</p>
               <a href="constructor.php" style="width:60%"> <button class="constructor_btn" style="margin-top: 50px;">Оставить заявку</button></a>
            </div>
        </div>
        </div>
        <!-- <div class="branch2">
            <img class="branch2_img" src="/img/branch2.png">
        </div>
         -->
        <div class="advantages">
            <div class="adv_title">
            <div class="title" style="margin-bottom: 0;"> ПОЧЕМУ ИМЕННО    
            </div>
            <img class="logo_a" src="/img/logo.png">
        </div>
            <div class="tips">
                <img src="/img/point.png">
                <p>&emsp;БОЛЕЕ 3-Х ЛЕТ РАБОТЫ</p>
            </div>
            <div class="tips">
                <img src="/img/point.png">
                <p>&emsp;БОЛЕЕ 1000 ЗАКАЗЧИКОВ ПО ВСЕМУ МИРУ</p>
            </div>
            <div class="tips">
                <img src="/img/point.png">
                <p>&emsp;ИСПОЛЬЗОВАНИЕ ТОЛЬКО КАЧЕСТВЕННЫХ МАТЕРИАЛОВ</p>
            </div>
        </div>
        <div class="branch6">
            <img class="branch2_img" src="/img/branch5.png">
        </div>
        <div class="container">
            <div class="title" style="margin-bottom: 0;"> МЫ БЛАГОДАРИМ ЗА ВАШ ВЫБОР
            </div>
        
            <div class="container_slider">
                <div class="slider">
                    <div class="slide">
                      <img class="slides" src="/img/feedback1.png">
                      <img class="slides" src="/img/feedback2.png">
                      <img  class="slides" src="/img/feedback3.png">
                      <img class="slides" src="/img/feedback1.png">
                      <img class="slides" src="/img/feedback2.png">
                      <img  class="slides"src="/img/feedback3.png">
                    </div>
                  </div> 
            </div>
        </div>
        <div class="advantages inst_div">
            <div class="adv_title">
            <img class="logo_a" src="/img/logo.png">
            <div class="title" style="margin-bottom: 0;">&emsp; В ИНСТАГРАМ  
            </div>

        </div>
        </div>
        <div class="instagram_container">
            <img class="branch3_img " style="margin-left: 0;" src="/img/branch3.png">
            <img class="instagram" src="/img/instagram.png">
        </div>
  <?php require "footer.php" ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="/js/slider.js"></script>
<script src="/js/main.js"></script>
</body>
</html>