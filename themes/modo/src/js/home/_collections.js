document.addEventListener("DOMContentLoaded", async function () {
  gsap.registerPlugin(SplitText);
  gsap.registerPlugin(ScrollTrigger);

  await document.fonts.ready;

  let tl = gsap.timeline({
    scrollTrigger: {
      trigger: ".collections__title",
      start: "top 85%",
    },
  });

  let textSplit = SplitText.create(".collections__text", { type: "lines" });

  tl.from(".collections__title", {
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

  ScrollTrigger.refresh();
});
