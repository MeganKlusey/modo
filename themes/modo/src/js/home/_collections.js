document.addEventListener("DOMContentLoaded", function () {
  function adjustTextWidth() {
    const container = document.querySelector(".collections__right");
    const text = container.querySelector(".collections__text");

    container.style.width = "auto";

    const range = document.createRange();
    range.selectNodeContents(text);
    const rects = range.getClientRects();

    let maxWidth = 0;
    for (let i = 0; i < rects.length; i++) {
      if (rects[i].width > maxWidth) maxWidth = rects[i].width;
    }

    container.style.width = `${Math.ceil(maxWidth)}px`;
  }

  window.addEventListener("load", () => {
    requestAnimationFrame(adjustTextWidth);
  });

  window.addEventListener("resize", () => {
    adjustTextWidth();
  });
});
