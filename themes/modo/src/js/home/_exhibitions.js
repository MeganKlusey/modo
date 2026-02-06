document.addEventListener("DOMContentLoaded", function () {
  const items = document.querySelectorAll(".exhibitions__item");
  const images = document.querySelectorAll(".exhibitions__image");
  const container = document.querySelector(".exhibitions__images");

  let height = images[0].offsetHeight;
  container.style.height = `${height}px`;

  let lastActiveIndex = 0;

  items[0].classList.add("active");
  images[0].classList.add("active");

  items.forEach((item, itemIndex) => {
    item.addEventListener("mouseenter", () => {
      items.forEach((i) => {
        i.style.transitionDuration = "0.4s";
        i.classList.remove("active");
      });
      item.classList.add("active");

      const diff = itemIndex - lastActiveIndex;

      images.forEach((image) => {
        image.style.transform = `translateY(-${height * diff}px)`;
      });
    });
  });
});
