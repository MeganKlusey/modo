document.addEventListener("DOMContentLoaded", function () {
  const textLinks = document.querySelectorAll("a:has(.js-roll-text)");
  const text = document.querySelectorAll(".js-roll-text");
  const arrowLinks = document.querySelectorAll("a:has(.js-roll-arrow)");
  const arrow = document.querySelectorAll(".js-roll-arrow");

  textLinks.forEach((textLink, index) => {
    textLink.addEventListener("mouseenter", () => {
      text[index].style.transform = "translateY(-100%)";
    });
    textLink.addEventListener("mouseleave", () => {
      text[index].style.transform = "translateY(0)";
    });
  });

  arrowLinks.forEach((arrowLink, index) => {
    arrowLink.addEventListener("mouseenter", () => {
      arrow[index].style.transform = "translate(16px, -16px)";
    });
    arrowLink.addEventListener("mouseleave", () => {
      arrow[index].style.transform = "translate(0, 0)";
    });
  });
});
