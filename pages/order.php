<link rel="stylesheet" href="/css/login.css" type="text/css" />
<link rel="stylesheet" href="/css/main.css" type="text/css" />
<meta charset="utf-8" />
<div class="formm order_form none">
  <div class="form-wrapper">
    <div class="form_container">
      <div class="close" onclick="close()">
        <img class="close_btn" src="/img/close.svg" />
      </div>

      <p class="title_ order ">ЗАКАЗ</p>
      <p class=" title_ done none">ВАШ ЗАКАЗ ОФОРМЛЕН</p>

      <div class="form">
        <div class="order_block">
          <div class="box-input user_name" style="width: 100%">
            <input
              class="input user_name"
              id="name"
              style="width: 100%"
              require
              name="name"
              type="text"
              placeholder="Имя"title="Имя должно начинаться с заглавной буквы, и содержать не менее 3 символов"
            />
          </div>

          <div class="box-input tel" style="width: 100%">
            <input
              class="input phone"
              style="width: 100%"
              id="phone"
              name="phone_l"
              type="text"
              require
              placeholder="+375 (__) __-__-___"
            />
          </div>

          <div class="box-input email" style="width: 100%">
            <input
              class="input email"
              id="email"
              style="width: 100%"
              require
              name="email"
              type="email"
              placeholder="Email"
            />
          </div>

          <button
            style="margin-bottom: 0px"
            class="order_btn_l"
            onclick="done()"
          >
            ЗАКАЗАТЬ</button
          ><br />
        </div>
        <div class="done_block">
        <div class="anim">
            <div class="checkmark_circle animate"></div>
            <div class="checkmark_stem animate"></div>
            <div class="checkmark_kick animate"></div>
          </div>
          <br><br>
          <div style="font-size: 14px; color: #b9b9b9">
              После оформления заказа менеджер свяжится с вам в течении 30 минут с помощью телефона, указанного при заказа
              после отправки заказа для подтверждения и уточнения деталей заказа
          </div>
                  
        </div>
</div>
    </div>
  </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="/js/jquery.maskedinput.min.js"></script>
<script src="/js/main.js"></script>

<script>
  //Код jQuery, установливающий маску для ввода телефона элементу input
  //1. После загрузки страницы,  когда все элементы будут доступны выполнить...
  $(function () {
    //2. Получить элемент, к которому необходимо добавить маску
    $(".phone").mask("+375 (99) 99-99-999");
  });
</script>
