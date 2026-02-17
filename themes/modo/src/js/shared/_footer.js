document.addEventListener("DOMContentLoaded", async function () {
  gsap.registerPlugin(ScrollTrigger);
  gsap.registerPlugin(SplitText);

  await document.fonts.ready;

  const track = document.querySelector(".carousel__track");
  track.classList.add("animate");

  let tl = gsap.timeline({
    scrollTrigger: {
      trigger: ".case-studies",
      start: "top 85%",
    },
  });

  let textSplit = SplitText.create(".case-studies__text", { type: "lines" });

  tl.from(".case-studies__title", {
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
