document.addEventListener("DOMContentLoaded", async function () {
  gsap.registerPlugin(SplitText);

  let titleSplit = SplitText.create(".hero__title", { type: "words" });
  let tl = gsap.timeline();

  await document.fonts.ready;

  tl.from(".hero__offsite-links > li", {
    duration: 1,
    x: 100,
    autoAlpha: 0,
    stagger: 0.25,
  })
    .from(
      ".hero__description",
      {
        duration: 1,
        x: -100,
        autoAlpha: 0,
      },
      0.25,
    )
    .from(
      titleSplit.words,
      {
        duration: 1,
        x: -100,
        autoAlpha: 0,
        stagger: -0.25,
      },
      0.5,
    )
    .from(
      ".hero__image",
      {
        duration: 1.5,
        scale: 1.2,
      },
      0,
    );

  ScrollTrigger.refresh();
});
