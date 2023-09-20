const sliderWrapper = document.querySelector(".slider-wrapper");
const prevBtn = document.querySelector(".prev-btn");
const nextBtn = document.querySelector(".next-btn");

let slideIndex = 0;
const slides = sliderWrapper.querySelectorAll("img");
const totalSlides = slides.length;

function showSlide(index) {
  if (index < 0) {
    index = totalSlides - 1;
  } else if (index >= totalSlides) {
    index = 0;
  }

  slides.forEach((slide) => slide.classList.remove("active"));

  slides[index].classList.add("active");

  slideIndex = index;
}

prevBtn.addEventListener("click", () => {
  showSlide(slideIndex - 1);
});

nextBtn.addEventListener("click", () => {
  showSlide(slideIndex + 1);
});

showSlide(slideIndex);
 