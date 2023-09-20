const slide = document.querySelector(".slide");
const slideWidth = slide.clientWidth;
const slideCount = slide.children.length;
let counter = 0;

setInterval(() => {
  counter++;
  if (counter >= slideCount - 2) {
    counter = 0;
  }
  slide.style.transform = `translateX(-${(slideWidth * counter) / 3 + 15}px)`;
}, 3000);
