let cards = {
  0: {
    name: "КУЛОН В ФОРМЕ СЕРДЦА",
    photo: "/img/item1.png",
    price: "40 BYN",
    type: "Кулон",
    color: "Прозрачный",
    flower: "Спирея",
    form: "Сердце",
    display: "block",
    id: 0,
  },
  1: {
    name: "ГВОЗДИКИ В ФОРМЕ КАПЛИ ",
    photo: "/img/item2.png",
    price: "35 BYN",
    type: "Гвоздики",
    color: "Прозрачный",
    flower: "Ромашка",
    form: "Капля",
    display: "block",
    id: 1,
  },
  2: {
    name: "СЕРЬГИ В ФОРМЕ СЕРДЦЕ",
    photo: "/img/item3.png",
    price: "35 BYN",
    type: "Серьги",
    color: "Прозрачный",
    flower: "Незабудка",
    form: "Сердце",
    display: "block",
    id: 2,
  },
  3: {
    name: "СЕРЬГИ В ФОРМЕ КАПЛИ",
    photo: "/img/item4.png",
    price: "35 BYN",
    type: "Серьги",
    color: "Прозрачный",
    flower: "Озатамнус",
    form: "Капля",
    display: "block",
    id: 3,
  },
  4: {
    name: "КОЛЬЦО С НЕЗАБУДКАМИ",
    photo: "/img/item5.png",
    price: "20 BYN",
    type: "Кольцо",
    color: "Прозрачный",
    flower: "Незабудка",
    form: "",
    display: "block",
    id: 4,
  },
  5: {
    name: "КУЛОН В ФОРМЕ КАПЛИ",
    photo: "/img/item6.png",
    price: "40 BYN",
    type: "Кулон",
    color: "Прозрачный",
    flower: "Незабудка",
    form: "Капля",
    display: "block",
    id: 5,
  },
};
let catlog_cards = document.querySelector(".catalog_cards");
function createCards(cards) {
  catlog_cards.innerHTML = "";
  for (let card in cards) {
    let content =
      ' <a href="item.php" style="display: ' +
      cards[card].display +
      '"><div class="card"  id="' +
      cards[card].id +
      '"> <img class="item_photo" src="' +
      cards[card].photo +
      '" /><div class="name_price"><p>' +
      cards[card].name +
      "</p><p>" +
      cards[card].price +
      "</p></div></div></a>";
    catlog_cards.innerHTML += content;
  }
}
createCards(cards);

$(".chckbx").click(function () {
  let res = 0;
  let type_id = [],
    form_id = [],
    color_id = [],
    flower_id = [];

  $(".type:checked").each(function (key) {
    type_id[key] = $(this).val();
  });
  $(".forms:checked").each(function (key) {
    form_id[key] = $(this).val();
  });
  $(".color:checked").each(function (key) {
    color_id[key] = $(this).val();
  });
  $(".flower:checked").each(function (key) {
    flower_id[key] = $(this).val();
  });

  if (flower_id == "" && color_id == "" && form_id == "" && type_id == "") {
    for (let i in cards) {
      cards[i].display = "block";
    }
    createCards(cards);
  } else {
    for (let i in cards) {
      cards[i].display = "none";
      if (
        type_id.includes(cards[i].type) ||
        form_id.includes(cards[i].form) ||
        flower_id.includes(cards[i].flower) ||
        color_id.includes(cards[i].color)
      ) {
        cards[i].display = "block";

      }
      
     
    }
    createCards(cards);
  } 
//   for (let i in cards) {
//         if (cards[i].display === "none");
//         res++;
//       }
  if (res == Object.keys(cards).length) {
       
          catlog_cards.innerHTML = "";

          let content = "Результат не найден";
          catlog_cards.innerHTML += content;
        
      }
 
});
