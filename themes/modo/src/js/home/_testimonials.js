document.addEventListener("DOMContentLoaded", async function () {
  const container = document.querySelector(".testimonials__images");
  const images = document.querySelectorAll(".testimonials__image");
  const info = document.querySelectorAll(".testimonials__info");
  const items = document.querySelectorAll(".testimonials__item");

  let rafId = null;
  let activeIndex = 0;
  let lastActiveIndex = 0;

  if (!images.length || !items.length || !info.length) return;

  items[0].classList.add("active");
  images[0].classList.add("active");
  info[0].classList.add("active");

  items.forEach((item, itemIndex) => {
    item.addEventListener("click", () => {
      const diff = itemIndex - lastActiveIndex;
      activeIndex = itemIndex;

      items.forEach((i) => {
        i.style.transitionProperty = "opacity";
        i.style.transitionDuration = "0.4s";
        i.classList.remove("active");
      });

      item.classList.add("active");

      images.forEach((image) => {
        image.style.transform = `translateX(-${container.offsetWidth * diff}px)`;
      });

      info.forEach((i) => i.classList.remove("active"));
      info[itemIndex].classList.add("active");
    });
  });

  function updateSlider(noAnimation = false) {
    const width = container.offsetWidth;

    images.forEach((image) => {
      image.style.transitionDuration = noAnimation ? "0s" : "0.4s";
      image.style.transform = `translateX(-${width * activeIndex}px)`;
    });

    ScrollTrigger.refresh();
  }

  window.addEventListener("resize", () => {
    updateSlider(true);
    cancelAnimationFrame(rafId);
    rafId = requestAnimationFrame(() => updateSlider(false));
  });

  gsap.registerPlugin(ScrollTrigger, SplitText);

  await document.fonts.ready;

  let quoteSplit = SplitText.create(".testimonials__quote", { type: "lines" });

  gsap.from(".testimonials__title", {
    scrollTrigger: {
      trigger: ".testimonials__title",
      start: "top 85%",
    },
    duration: 0.8,
    y: 10,
    autoAlpha: 0,
  });

  let tl = gsap.timeline({
    scrollTrigger: {
      trigger: ".testimonials__quote",
      start: "top 85%",
    },
  });

  tl.from(quoteSplit.lines, {
    duration: 0.8,
    y: 10,
    autoAlpha: 0,
    stagger: 0.1,
  }).from(
    ".testimonials__author",
    {
      duration: 0.8,
      y: 10,
      autoAlpha: 0,
    },
    0.2,
  );

  gsap.from(".testimonials__item", {
    scrollTrigger: {
      trigger: ".testimonials__item",
      start: "top 85%",
    },
    duration: 1,
    y: 50,
    opacity: 0,
    stagger: 0.15,
    clearProps: "opacity",
  });

  ScrollTrigger.refresh();
});
