{
  const menu_burger = document.querySelector("#menu_burger");
  const popup = document.querySelector("#popup");
  const account = document.getElementById("#icon");
  const body = document.body;

  $(".phone").mask("+375 (99) 999-99-99");
  // Клонируем меню, чтобы задать свои стили для мобильной версии
  const menu = document.querySelector("#menu").cloneNode(1);

  // При клике на иконку menu_burger вызываем ф-ию menu_burgerHandler
  menu_burger.addEventListener("click", menu_burgerHandler);

  // Выполняем действия при клике ..
  function menu_burgerHandler(e) {
    e.preventDefault();
    // Переключаем стили элементов при клике
    popup.classList.toggle("open");
    menu_burger.classList.toggle("active");
    body.classList.toggle("noscroll");
    renderPopup();
  }

  // Здесь мы рендерим элементы в наш попап
  function renderPopup() {
    popup.appendChild(menu);
  }

  // Код для закрытия меню при нажатии на ссылку
  const links = Array.from(menu.children);

  // Для каждого элемента меню при клике вызываем ф-ию
  links.forEach((link) => {
    link.addEventListener("click", closeOnClick);
  });

  // Закрытие попапа при клике на меню
  function closeOnClick() {
    popup.classList.remove("open");
    account.removeClass("display");
    menu_burger.classList.remove("active");
    body.classList.remove("noscroll");
  }

  $(".login").click(function (e) {
    console.log("button is pushed");
    e.preventDefault();
    $(".login_form").removeClass("none");
    $(".regist_form").addClass("none");
  });

  $(".regist").click(function (e) {
    console.log("button is pushed");
    e.preventDefault();
    $(".login_form").addClass("none");
    $(".regist_form").removeClass("none");
  });

  $(".close_btn").click(function (e) {
    e.preventDefault();
    $(".user_name").val("");
    $(".phone").val("");
    $(".pass").val("");

    $(".login_form").addClass("none");
    $(".order_form").addClass("none");
    body.style.overflow = "";

    document.getElementById("name").style.border = "none";
    document.getElementById("name").style.borderBottom = "1px solid #B9B9B9";
    document.getElementById("phone").style.border = "none";
    document.getElementById("phone").style.borderBottom = "1px solid #B9B9B9";
    document.getElementById("pass").style.border = "none";
    document.getElementById("pass").style.borderBottom = "1px solid #B9B9B9";

    document.getElementById("name_l").style.border = "none";
    document.getElementById("name_l").style.borderBottom = "1px solid #B9B9B9";
    document.getElementById("phone_l").style.border = "none";
    document.getElementById("phone_l").style.borderBottom = "1px solid #B9B9B9";
    document.getElementById("pass_l").style.border = "none";
    document.getElementById("pass_l").style.borderBottom = "1px solid #B9B9B9";
  });

  function order() {
    let form = document.querySelector(".order_form");
    form.classList.remove("none");
    body.style.overflow = "hidden";
    jQuery.fn.center = function () {
      this.css("position", "absolute");
      this.css(
        "top",
        Math.max(
          0,
          ($(window).height() - $(this).outerHeight()) / 2 +
            $(window).scrollTop()
        ) + "px"
      );
      this.css(
        "left",
        Math.max(
          0,
          ($(window).width() - $(this).outerWidth()) / 2 +
            $(window).scrollLeft()
        ) + "px"
      );
      return this;
    };
    $(".order_form").center();
  }
}

function login() {
  let form = document.querySelector(".login_form");
  form.classList.remove("none");
  document.body.style.overflow = "hidden";
  jQuery.fn.center = function () {
    this.css("position", "absolute");
    this.css(
      "top",
      Math.max(
        0,
        ($(window).height() - $(this).outerHeight()) / 2 + $(window).scrollTop()
      ) + "px"
    );
    this.css(
      "left",
      Math.max(
        0,
        ($(window).width() - $(this).outerWidth()) / 2 + $(window).scrollLeft()
      ) + "px"
    );
    return this;
  };
  $(".login_form").center();
}

function login_valid() {
  document.getElementById("name_l").style.border = "none";
  document.getElementById("name_l").style.borderBottom = "1px solid #B9B9B9";
  document.getElementById("phone_l").style.border = "none";
  document.getElementById("phone_l").style.borderBottom = "1px solid #B9B9B9";
  document.getElementById("pass_l").style.border = "none";
  document.getElementById("pass_l").style.borderBottom = "1px solid #B9B9B9";

  let form = document.querySelector(".order_form");
  let name = document.getElementById("name_l").value;
  let tel = document.getElementById("phone_l").value;
  let pass = document.getElementById("pass_l").value;
  const regexName = "/[A-ZА-ЯЁ]{1}[a-zа-яё]{3,}/ui"; //u для русских, i для//   $regexPhone ='/\w/';
  const regexPassword = "/^[A-Za-z0-9]w{8,}$/";
  // const regexPhone = "/^+375 ((25|29|33|44)) [0-9]{2}-[0-9]{2}-[0-9]{3}$/";

  const name_reg = regexName.match(name);
  const pass_reg = regexPassword.match(pass);
  // const phone_reg = regexPhone.match(tel);
  let errors=0;
  if (!name_reg || name == "") {
    document.getElementById("name_l").style.border = "1px solid red";
    errors++;
  } else
  if (!pass_reg || pass == "") {
    document.getElementById("pass_l").style.border = "1px solid red";
    errors++;
  } else
  if (!phone_reg  || tel == "") {
    // alert("Заполните все поля формы");
    document.getElementById("phone_l").style.border = "1px solid red";
    errors++;
  } if(errors==0) {
    let form = document.querySelector(".login_form");
    form.classList.add("none");
    document.body.style.overflow = "auto";
  }
}
function done() {
  let form = document.querySelector(".order_form");
  let name = document.getElementById("name").value;
  let tel = document.getElementById("phone").value;
  let email = document.getElementById("email").value;
  if (name == "" || tel == "" || email == "") {
    alert("Заполните все поля формы");
    document.getElementById("name").style.border = "1px solid red";
    document.getElementById("phone").style.border = "1px solid red";
    document.getElementById("email").style.border = "1px solid red";
  } else {
    let order = document.querySelector(".order");
    let done = document.querySelector(".done");
    let done_block = document.querySelector(".done_block");
    done.classList.remove("none");
    let order_block = document.querySelector(".order_block");
    order.style.display = "none";
    order_block.style.display = "none";
    done_block.style.display = "block";
  }
}
