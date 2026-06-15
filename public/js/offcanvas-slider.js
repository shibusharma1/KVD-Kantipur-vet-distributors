const offcanvas = document.getElementById("offcanvas-flip");
const overlay = document.getElementById("oc-overlay");

const openBtn = document.getElementById("offcanvas-toggle");
const closeBtn = document.getElementById("offcanvas-close");

// ========================= OPEN =========================
function openOffcanvas() {
  offcanvas.classList.add("open");
  overlay.classList.add("open");

  document.body.style.overflow = "hidden";
}

// ========================= CLOSE =========================
function closeOffcanvas() {
  offcanvas.classList.remove("open");
  overlay.classList.remove("open");

  document.body.style.overflow = "";
}

// Open
if (openBtn) {
  openBtn.addEventListener("click", openOffcanvas);
}

// Close
if (closeBtn) {
  closeBtn.addEventListener("click", closeOffcanvas);
}

// Overlay Close
if (overlay) {
  overlay.addEventListener("click", closeOffcanvas);
}

// ESC Close
window.addEventListener("keydown", (e) => {
  if (e.key === "Escape") {
    closeOffcanvas();
  }
});