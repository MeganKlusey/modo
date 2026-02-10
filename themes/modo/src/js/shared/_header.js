document.addEventListener("DOMContentLoaded", function () {
  const button = document.querySelector(".hamburger-button");
  const hamburger = document.querySelector(".hamburger");
  const nav = document.querySelector(".header-nav");

  function toggleMenu() {
    hamburger.classList.toggle("active");
    nav.classList.toggle("active");
  }

  button.addEventListener("click", toggleMenu);

  function openMobileMenu() {
    const width = window.innerWidth;

    if (width >= 768) {
      hamburger.classList.remove("active");
      nav.classList.remove("active");
    }
  }

  window.addEventListener("load", openMobileMenu);
  window.addEventListener("resize", openMobileMenu);
});
