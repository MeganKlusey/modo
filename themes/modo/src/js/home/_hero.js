document.addEventListener("DOMContentLoaded", function () {
  gsap.registerPlugin(SplitText);

  let split = SplitText.create(".hero__title", { type: "words" });

  gsap.from(split.words, {
    duration: 1,
    x: -100,
    autoAlpha: 0,
    stagger: 0.25,
  });
});
