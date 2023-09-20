<?php require "login.php" ?>
<?php require "registration.php" ?>
<header class="header">
    <div class="header_container">
    <a href="index.php"><img class="logo" src="/img/logo.svg"></a>
    <div class="navbar__wrap">
        <ul class="menu" id="menu">
          <li><a href="catalog.php">Каталог</a></li>
          <li><a href="constructor.php">Конструктор</a></li>
          <li><a href="blog.php">Блог</a></li>
          <li><a href="about.php">О нас</a></li>
        </ul>
      </div>
      <div onclick='login()'><img  class='icon account' id='icon' src='/img/account.png' ></div>           
        <div class="menu_burger">
       <img onclick='login()' class="icon_р" src="/img/account.png">
        <div class="menu_burger__field" id="menu_burger">
          <span class="bar"></span>
          <span class="bar"></span>
          <span class="bar"></span>
        </div>
      </div>
    </div>
<!-- </div> -->
  <div class="popup" id="popup"></div>
</header>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src = '/js/jquery-3.4.1.min.js'></script>
<script src = '/js/jquery.maskedinput.min.js'></script>
<script src="/js/main.js"></script>
