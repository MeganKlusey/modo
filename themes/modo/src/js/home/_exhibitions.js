document.addEventListener("DOMContentLoaded", function () {
  const items = document.querySelectorAll(".exhibitions__item");
  const images = document.querySelectorAll(".exhibitions__image");

  items[0].classList.add("active");
  images[0].classList.add("active");

  items.forEach((item, index) => {
    item.addEventListener("mouseenter", () => {
      items.forEach((i) => {
        i.style.transitionDuration = "0.4s";
        i.classList.remove("active");
      });
      images.forEach((img) => img.classList.remove("active"));

      item.classList.add("active");
      images[index].classList.add("active");
    });
  });
});
