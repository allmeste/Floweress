<?php
 session_start();
?> 
<?php require "order.php" ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="/css/main.css">
  <!-- <link rel="stylesheet" href="/css/index.css"> -->
  <link rel="stylesheet" href="/css/item.css">
  <title>FLOWRESS</title>
</head>
<body>

<?php require "header.php" ?>

<div class="tn_container">
    <div class="container">
        <div class="navigate">Главная-Каталог-Серьги</div>
         <div class="title_"> СЕРЬГИ-СЕРДЕЧКИ </div>
       
    </div>
</div>
<div class="container">
    <div class="item_container">
<div class="slider">
        <div class="slider-wrapper">
          <img  src="/img/item1_.png" alt="Product 1">
          <img class="image" src="/img/item11_.png" alt="Product 2">
        </div>
        <div class="buttons">
        <button class="prev-btn">Prev</button>
        <button class="next-btn">
            <img class="arrow" src="/img/arrow.svg">
        </button>
    </div>
</div>
<div class="description">
    
<p>Серьги в форме сердца, внутри находится незабудка.
    <br> Размер сережек - 1,8х1,8 см.
    <br> Фурнитура - нержавеющая сталь под серебро. Крепление - английский замок.</p><br>
<p class="price">35 BYN</p>
<button class="order_btn" onclick=order() >Заказать</button>

</div>
</div>
</div>



<?php require "footer.php" ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src = '/js/jquery-3.4.1.min.js'></script>
<script src = '/js/jquery.maskedinput.min.js'></script>
<script src="/js/item_slider.js"></script>
<script src="/js/main.js"></script>
<script>

</script>
</body>
</html>