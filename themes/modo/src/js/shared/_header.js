document.addEventListener("DOMContentLoaded", function () {
  const button = document.querySelector(".header__toggle");
  const hamburger = document.querySelector(".hamburger");
  const nav = document.querySelector(".header__nav");

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

  let mm = gsap.matchMedia();

  mm.add("(max-width: 767px)", () => {
    gsap.from(".header__title", {
      duration: 1,
      y: -100,
      autoAlpha: 0,
      stagger: 0.08,
    });
  }).add("(min-width: 768px)", () => {
    gsap.from(".header .js-animate", {
      duration: 1,
      y: -100,
      autoAlpha: 0,
      stagger: 0.08,
    });
  });
});
