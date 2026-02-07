document.addEventListener("DOMContentLoaded", function () {
  const items = document.querySelectorAll(".testimonials__item");
  const images = document.querySelectorAll(".testimonials__image");
  const container = document.querySelector(".testimonials__images");
  const info = document.querySelectorAll(".testimonials__info");

  let activeIndex = 0;
  let lastActiveIndex = 0;
  let width = images[0].offsetWidth;
  container.style.width = `${width}px`;

  items[0].classList.add("active");
  images[0].classList.add("active");
  info[0].classList.add("active");

  items.forEach((item, itemIndex) => {
    item.addEventListener("click", () => {
      activeIndex = itemIndex;
      const diff = itemIndex - lastActiveIndex;

      items.forEach((i) => {
        i.style.transitionProperty = "opacity";
        i.style.transitionDuration = "0.4s";
        i.classList.remove("active");
      });
      item.classList.add("active");

      images.forEach((image) => (image.style.transform = `translateX(-${container.offsetWidth * diff}px)`));
      info.forEach((i) => i.classList.remove("active"));
      info[itemIndex].classList.add("active");
    });
  });

  function updateSlider() {
    const width = container.offsetWidth;
    images.forEach((image) => {
      image.style.transform = `translateX(-${width * activeIndex}px)`;
    });
  }

  window.addEventListener("resize", () => updateSlider());
});
