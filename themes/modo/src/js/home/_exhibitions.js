document.addEventListener("DOMContentLoaded", function () {
  const container = document.querySelector(".exhibitions__images");
  const images = document.querySelectorAll(".exhibitions__image");
  const items = document.querySelectorAll(".exhibitions__item");

  let rafId = null;
  let height = 0;
  let activeIndex = 0;
  let resizeTimeout;

  items[0].classList.add("active");
  images[0].classList.add("active");

  items.forEach((item, index) => {
    item.addEventListener("mouseenter", () => {
      activeIndex = index;

      items.forEach((i) => i.classList.remove("active"));
      item.classList.add("active");

      images.forEach((image) => (image.style.transform = `translateY(-${height * activeIndex}px)`));
    });
  });

  function updateHeight(noAnimation = false) {
    height = images[0].offsetHeight;
    container.style.height = `${height}px`;

    images.forEach((image) => {
      image.style.transitionDuration = noAnimation ? "0s" : "0.4s";
      image.style.transform = `translateY(-${height * activeIndex}px)`;
    });
  }

  window.addEventListener("load", updateHeight(false));

  window.addEventListener("resize", () => {
    updateHeight(true);
    cancelAnimationFrame(rafId);
    rafId = requestAnimationFrame(() => updateHeight(false));
  });
});
