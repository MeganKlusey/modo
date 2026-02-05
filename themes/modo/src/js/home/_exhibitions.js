document.addEventListener("DOMContentLoaded", function () {
  const items = document.querySelectorAll(".exhibitions__item");

  items[0].style.opacity = 1;

  items.forEach((item) => {
    item.addEventListener("mouseenter", () => {
      items.forEach((i) => (i.style.opacity = 0.3));
      item.style.opacity = 1;
    });
  });
});
