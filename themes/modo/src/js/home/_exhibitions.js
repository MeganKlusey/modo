document.addEventListener("DOMContentLoaded", function () {
  const items = document.querySelectorAll(".exhibitions__item");
  const images = document.querySelectorAll(".exhibitions__image");
  const container = document.querySelector(".exhibitions__images");

  let height = images[0].offsetHeight;
  let lastActiveIndex = 0;

  container.style.height = `${height}px`;

  items[0].classList.add("active");
  images[0].classList.add("active");

  items.forEach((item, itemIndex) => {
    item.addEventListener("mouseenter", () => {
      const diff = itemIndex - lastActiveIndex;

      items.forEach((i) => {
        i.style.transitionProperty = "opacity";
        i.style.transitionDuration = "0.4s";
        i.classList.remove("active");
      });
      item.classList.add("active");

      images.forEach((image) => (image.style.transform = `translateY(-${height * diff}px)`));
    });
  });
});
