const items = document.querySelectorAll(".exhibitions__item");

items.forEach((item) => {
  item.addEventListener("mouseenter", () => {
    items.forEach((i) => (i.style.opacity = 0.3));
    item.style.opacity = 1;
  });
});
