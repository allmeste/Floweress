
<link rel="stylesheet" href="/css/login.css" type="text/css">
<link rel="stylesheet" href="/css/main.css" type="text/css">
<meta charset="utf-8">
<div class="formm regist_form none">
<div class = 'form-wrapper'>
    <div class="form_container">
    <div class="close" ><img onclick="close()" class="close_btn" src="/img/close.svg"  ></div>      

    <p class="title_">РЕГИСТРАЦИЯ</p>
   
<div class = 'form'>


<div class = 'box-input' style="width: 100%;">
<input class = 'input user_name' style="width: 100%;" require  id="name_l" name = 'user_name' type = 'text' placeholder="Имя" minlengh="3" maxlengh="20" title="Имя должно начинаться с заглавной буквы, и содержать не менее 3 символов">
</div>

<div class = 'box-input' style="width: 100%;">
<input class = 'input phone' style="width: 100%;" id="phone_l" name = 'phone_l' type = 'text' require placeholder="+375 (__) __-__-___">
</div>

<div class = 'box-input' style="width: 100%;">
    <input class = 'input email' style="width: 100%;" require name = 'email' id="pass_l" type = 'email' placeholder="Пароль" minlengh="5" maxlengh="50" title="Пароль должен содержать не менее 8 символов: цифры и латинские буквы(хотя бы одну заглавную)">
</div>


<button type = 'submit' style="margin-bottom: 0px;"  class ='order_btn_l button_login' onclick="login_valid()" >ЗАРЕГИСТРИРОВАТЬСЯ</button><br>
<div class="change_form">
<p style=" font-size:14px ">У вас уже есть аккаунт -
    <a class="login" style="padding-bottom: 10px; text-decoration: none;  color: #dc879c;" >
            Войти</a></p>
</div>
</div>
</div>

</div>
</div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="/js/jquery-3.4.1.min.js"></script>
    <script src="/js/jquery.maskedinput.min.js"></script>
    <script src="/js/main.js"></script> 

    <script>
//Код jQuery, установливающий маску для ввода телефона элементу input
//1. После загрузки страницы,  когда все элементы будут доступны выполнить...
$(function(){
  //2. Получить элемент, к которому необходимо добавить маску
  $(".phone").mask("+375 (99) 99-99-999");
});
</script>
  </body>
</html>