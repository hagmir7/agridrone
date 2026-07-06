const navbar = document.getElementById("navbar");
const menuBtn = document.getElementById("menuBtn");
const mobileMenu = document.getElementById("mobileMenu");

menuBtn.addEventListener("click", () => {
    mobileMenu.classList.toggle("grid-rows-[1fr]");
    mobileMenu.classList.toggle("grid-rows-[0fr]");
});

window.addEventListener("scroll", () => {

    if (window.scrollY > 40) {

        navbar.classList.add(
            "shadow-2xl",
            "shadow-black/30",
            "bg-emerald-950/90",
            "border-white/20"
        );

    } else {

        navbar.classList.remove(
            "shadow-2xl",
            "shadow-black/30",
            "bg-emerald-950/90",
            "border-white/20"
        );

    }

});
