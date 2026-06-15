// silder script for the partners section
const partnerSlider = document.getElementById("partnersSlider");
const partnerPrev = document.getElementById("partnerPrev");
const partnerNext = document.getElementById("partnerNext");

partnerNext.addEventListener("click", () => {
  partnerSlider.scrollBy({
    left: 320,
    behavior: "smooth",
  });
});

partnerPrev.addEventListener("click", () => {
  partnerSlider.scrollBy({
    left: -320,
    behavior: "smooth",
  });
});
