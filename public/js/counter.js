//counter script for the numbers
const counters = document.querySelectorAll(".count-val");
const observer = new IntersectionObserver(
  (entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        const el = entry.target;
        const target = +el.dataset.target;
        const duration = 1800;
        const start = performance.now();
        const animate = (time) => {
          const progress = Math.min((time - start) / duration, 1);
          const value = Math.floor(progress * target);
          el.textContent = value.toLocaleString();
          if (progress < 1) {
            requestAnimationFrame(animate);
          } else {
            el.textContent = target.toLocaleString();
          }
        };
        requestAnimationFrame(animate);
        observer.unobserve(el);
      }
    });
  },
  {
    threshold: 0.4,
  },
);
counters.forEach((counter) => {
  observer.observe(counter);
});
