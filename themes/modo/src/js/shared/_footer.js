document.addEventListener("DOMContentLoaded", async function () {
  gsap.registerPlugin(ScrollTrigger, SplitText);

  await document.fonts.ready;

  const track = document.querySelector(".carousel__track");

  if (track) {
    const breakpoints = ["(min-width: 768px)", "(min-width: 1024px)"];

    track.classList.add("animate");

    function restartAnimation() {
      track.classList.remove("animate");
      void track.offsetWidth;
      track.classList.add("animate");
    }

    breakpoints.forEach((query) => {
      const mq = window.matchMedia(query);
      mq.addEventListener("change", restartAnimation);
    });
  }

  let textSplit = SplitText.create(".case-studies__text", { type: "lines" });

  let tl = gsap.timeline({
    scrollTrigger: {
      trigger: ".case-studies",
      start: "top 85%",
    },
  });

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
