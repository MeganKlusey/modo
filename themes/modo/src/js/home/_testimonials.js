document.addEventListener("DOMContentLoaded", function () {
  const items = document.querySelectorAll(".testimonials__item");
  const images = document.querySelectorAll(".testimonials__image");
  const container = document.querySelector(".testimonials__images");

  let width = images[0].offsetWidth;
  container.style.width = `${width}px`;

  let lastActiveIndex = 0;

  items[0].classList.add("active");
  images[0].classList.add("active");

  items.forEach((item, itemIndex) => {
    item.addEventListener("click", () => {
      items.forEach((i) => {
        i.style.transitionProperty = "opacity";
        i.style.transitionDuration = "0.4s";
        i.classList.remove("active");
      });
      item.classList.add("active");

      const diff = itemIndex - lastActiveIndex;

      images.forEach((image) => {
        image.style.transform = `translateX(-${width * diff}px)`;
      });
    });
  });
});
