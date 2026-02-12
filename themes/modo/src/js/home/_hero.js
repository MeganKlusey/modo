document.addEventListener("DOMContentLoaded", function () {
  gsap.registerPlugin(SplitText);
  let tl = gsap.timeline();

  let titleSplit = SplitText.create(".hero__title", { type: "words" });

  tl.from(".hero__description", {
    duration: 1,
    x: -100,
    autoAlpha: 0,
  }).from(
    titleSplit.words,
    {
      duration: 1,
      x: -100,
      autoAlpha: 0,
      stagger: -0.25,
    },
    0.25,
  );
});
