document.addEventListener("DOMContentLoaded", function () {
  const items = document.querySelectorAll(".exhibitions__item");

  items[0].style.opacity = 1;

  items.forEach((item) => {
    item.addEventListener("mouseenter", () => {
      items.forEach((i) => {
        i.classList.remove("active");
        i.style.transitionDuration = "0.4s";
        i.style.opacity = 0.4;
      });
      item.classList.add("active");
      item.style.opacity = 1;
    });
  });
});
