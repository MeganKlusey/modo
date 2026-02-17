document.addEventListener("DOMContentLoaded", function () {
  const button = document.querySelector(".header__toggle");
  const hamburger = document.querySelector(".hamburger");
  const navWrapper = document.querySelector(".header__nav-wrapper");

  function toggleMenu() {
    if (!hamburger.classList.contains("active")) {
      hamburger.classList.add("active");
      navWrapper.classList.add("active");
      navWrapper.style.transition = "opacity 0.4s ease, transform 0.4s ease";
    } else {
      hamburger.classList.remove("active");
      navWrapper.classList.remove("active");
    }
  }

  button.addEventListener("click", toggleMenu);

  function openMobileMenu() {
    const width = window.innerWidth;

    if (width >= 768) {
      hamburger.classList.remove("active");
      navWrapper.classList.remove("active");
      navWrapper.style.transition = "none";
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
