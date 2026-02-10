document.addEventListener("DOMContentLoaded", function () {
  const button = document.querySelector(".hamburger-button");
  const hamburger = document.querySelector(".hamburger");

  button.addEventListener("click", () => {
    hamburger.classList.toggle("active");
  });
});
