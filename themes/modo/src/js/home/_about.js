document.addEventListener("DOMContentLoaded", function () {
  gsap.registerPlugin(SplitText);
  gsap.registerPlugin(ScrollTrigger);
  let tl = gsap.timeline({
    scrollTrigger: {
      trigger: ".about__text h2",
      start: "top 80%",
    },
  });

  let textSplit = SplitText.create(".about__text p", { type: "lines" });

  tl.from(".about__text h2", {
    duration: 0.8,
    y: 10,
    autoAlpha: 0,
  }).from(
    textSplit.lines,
    {
      duration: 0.8,
      y: 10,
      autoAlpha: 0,
      stagger: 0.15,
    },
    0.15,
  );
});
