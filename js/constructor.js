$(".category_flower").click(function () {
  if ($(this).attr("name") == 0) {
    $(this).css({
      "box-shadow": "0 0 20px #DC879C",
    });
    $(this).attr("name", 1);
  } else if ($(this).attr("name") == 1) {
    $(this).css({
      "box-shadow": "",
    });
    $(this).attr("name", 0);
  }
  console.log("ID_flower: "+$(this).attr("id"));
});
$(".category_type").click(function () {
  if ($(this).attr("name") == 0) {
    $(this).css({
      "box-shadow": "0 0 20px #DC879C",
    });
    $(this).attr("name", 1);
  } else if ($(this).attr("name") == 1) {
    $(this).css({
      "box-shadow": "",
    });
    $(this).attr("name", 0);
  }
  console.log("ID_type: "+$(this).attr("id"));
});
$(".category_form").click(function () {
  if ($(this).attr("name") == 0) {
    $(this).css({
      border: "none",
      "box-shadow": "0 0 20px #DC879C",
    });
    $(this).attr("name", 1);
  } else if ($(this).attr("name") == 1) {
    $(this).css({
      "box-shadow": "",
      border: "1px solid #DC879C",
    });
    $(this).attr("name", 0);
  }
  console.log("ID_form: "+$(this).attr("id"));
});

$(".category_btn_color").click(function () {
  if ($(this).attr("name") == 0) {
    $(this).css({
      border: "none",
      "box-shadow": "0 0 20px #DC879C",
    });
    $(this).attr("name", 1);
  } else if ($(this).attr("name") == 1) {
    $(this).css({
      "box-shadow": "",
      border: "1px solid #DC879C",
    });
    $(this).attr("name", 0);
  }
  console.log("ID_color: "+$(this).attr("id"));
});
