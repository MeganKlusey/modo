document.addEventListener("DOMContentLoaded", function () {
  const container = document.querySelector(".exhibitions__images");
  const images = document.querySelectorAll(".exhibitions__image");
  const items = document.querySelectorAll(".exhibitions__item");

  let height = 0;
  let activeIndex = 0;

  if (!images.length || !items.length) return;

  items[0].classList.add("active");
  images[0].classList.add("active");

  function updateHeight(noAnimation = false) {
    height = images[0].offsetHeight;

    if (!height) return;

    container.style.height = `${height}px`;

    images.forEach((image) => {
      image.style.transitionDuration = noAnimation ? "0s" : "0.4s";
      image.style.transform = `translateY(-${height * activeIndex}px)`;
    });
  }

  items.forEach((item, index) => {
    item.addEventListener("mouseenter", () => {
      activeIndex = index;

      items.forEach((i) => i.classList.remove("active"));
      item.classList.add("active");

      updateHeight();
    });
  });

  const observer = new ResizeObserver(() => {
    updateHeight(true);
  });

  observer.observe(images[0]);

  window.addEventListener("resize", () => {
    updateHeight(true);
  });
});
