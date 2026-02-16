document.addEventListener("DOMContentLoaded", function () {
  const textLinks = document.querySelectorAll("a:has(.js-roll-text)");
  const text = document.querySelectorAll(".js-roll-text");

  textLinks.forEach((textLink, index) => {
    textLink.addEventListener("mouseenter", () => {
      text[index].style.transform = "translateY(-100%)";
    });
    textLink.addEventListener("mouseleave", () => {
      text[index].style.transform = "translateY(0)";
    });
  });
});
