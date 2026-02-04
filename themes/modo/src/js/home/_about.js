function addPadding() {
  const text = document.querySelector(".about__text");
  const wrapper = document.querySelector(".wrapper-padding");
  const images = document.querySelector(".about__images");

  const height = text.getBoundingClientRect().height;

  let wrapperPadding = `calc(${height}px - 50vh + 7rem)`;
  let imagesPadding = `calc(${height}px - 50vh + 14rem)`;
  wrapper.style.paddingBottom = wrapperPadding;
  images.style.paddingBottom = imagesPadding;
}

window.addEventListener("load", () => {
  requestAnimationFrame(addPadding);
});

window.addEventListener("resize", () => {
  addPadding();
});
