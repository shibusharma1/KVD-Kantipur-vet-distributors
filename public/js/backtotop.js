const backToTop = document.getElementById("backToTop");
const whatsappBtn = document.getElementById("whatsappBtn");

window.addEventListener("scroll", () => {

    if (window.scrollY > 300) {

        backToTop.classList.remove("hidden");
        backToTop.classList.add("flex");

        whatsappBtn.classList.remove("hidden");
        whatsappBtn.classList.add("flex");

    } else {

        backToTop.classList.remove("flex");
        backToTop.classList.add("hidden");

        whatsappBtn.classList.remove("flex");
        whatsappBtn.classList.add("hidden");

    }

});

backToTop.addEventListener("click", () => {

    window.scrollTo({
        top: 0,
        behavior: "smooth"
    });

});