function addPadding() {
  const text = document.querySelector(".about__text");
  const wrapper = document.querySelector(".wrapper-padding");
  const images = document.querySelector(".about__images");

  const height = text.getBoundingClientRect().height;

  let padding = `calc(${height}px - 50vh + 7rem)`;
  wrapper.style.paddingBottom = padding;
  images.style.paddingBottom = padding;
}

window.addEventListener("load", () => {
  requestAnimationFrame(addPadding);
});

window.addEventListener("resize", () => {
  addPadding();
});
