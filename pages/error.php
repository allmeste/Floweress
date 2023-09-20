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
    <link rel="stylesheet" href="/css/error.css" />
    <link rel="stylesheet" href="/css/account.css" />
    <title>FLOWRESS</title>
  </head>
  <body>
    <?php require "header.php" ?>

      <div class="error_container">
        <div class="error">
          <p class="number">4</p>
          <img src="/img/flower1.png" />
          <p class="number">4</p>
        </div>
        <h3>Страница не найдена</h3>
        <button class="main_btn">Перейти на главную</button>
      </div>
    <?php require "footer.php" ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="/js/jquery-3.4.1.min.js"></script>
    <script src="/js/jquery.maskedinput.min.js"></script>
    <script src="/js/main.js"></script>
  </body>
</html>
