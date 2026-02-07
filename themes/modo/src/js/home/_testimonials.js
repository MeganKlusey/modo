document.addEventListener("DOMContentLoaded", function () {
  const container = document.querySelector(".testimonials__images");
  const images = document.querySelectorAll(".testimonials__image");
  const info = document.querySelectorAll(".testimonials__info");
  const items = document.querySelectorAll(".testimonials__item");

  let rafId = null;
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

  function updateSlider(noAnimation = false) {
    const width = container.offsetWidth;
    images.forEach((image) => {
      image.style.transitionDuration = noAnimation ? "0s" : "0.4s";
      image.style.transform = `translateX(-${width * activeIndex}px)`;
    });
  }

  window.addEventListener("resize", () => {
    updateSlider(true);
    cancelAnimationFrame(rafId);
    rafId = requestAnimationFrame(() => updateSlider(false));
  });
});
