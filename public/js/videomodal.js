const videoButtons = document.querySelectorAll(".video-btn");
const videoModal = document.getElementById("videoModal");
const popupVideo = document.getElementById("popupVideo");
const videoWrapper = document.getElementById("videoWrapper");
const closeVideo = document.getElementById("closeVideo");

videoButtons.forEach((button) => {
  button.addEventListener("click", () => {
    const videoSrc = button.getAttribute("data-video");

    popupVideo.querySelector("source").src = videoSrc;

    popupVideo.load();

    videoModal.classList.remove("hidden");
    videoModal.classList.add("flex");

    document.body.style.overflow = "hidden";

    setTimeout(() => {
      videoWrapper.classList.remove("scale-[0.9]", "opacity-0");
      videoWrapper.classList.add("scale-100", "opacity-100");
    }, 50);
  });
});

function closeVideoModal() {
  videoWrapper.classList.remove("scale-100", "opacity-100");
  videoWrapper.classList.add("scale-[0.9]", "opacity-0");

  setTimeout(() => {
    videoModal.classList.add("hidden");
    videoModal.classList.remove("flex");

    popupVideo.pause();
    popupVideo.currentTime = 0;

    document.body.style.overflow = "";
  }, 250);
}

closeVideo.addEventListener("click", closeVideoModal);

videoModal.addEventListener("click", (e) => {
  if (e.target === videoModal) {
    closeVideoModal();
  }
});
