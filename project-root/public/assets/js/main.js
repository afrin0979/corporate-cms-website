// ------------------------------
// Hero Slider Functionality
// ------------------------------
let slideIndex = 0;
const slides = document.querySelectorAll(".hero-slider img");

function showSlides() {
    slides.forEach((slide) => (slide.style.display = "none"));
    slideIndex++;
    if (slideIndex > slides.length) { slideIndex = 1; }
    slides[slideIndex - 1].style.display = "block";
    setTimeout(showSlides, 5000); // Change slide every 5 seconds
}

if(slides.length > 0){
    showSlides();
}

// ------------------------------
// Smooth Scroll for Navbar Links
// ------------------------------
const navLinks = document.querySelectorAll("nav ul li a[href^='#']");

navLinks.forEach(link => {
    link.addEventListener("click", function(e){
        e.preventDefault();
        const target = document.querySelector(this.getAttribute("href"));
        if(target){
            target.scrollIntoView({ behavior: "smooth" });
        }
    });
});

// ------------------------------
// Back to Top Button
// ------------------------------
const backToTop = document.createElement("div");
backToTop.id = "backToTop";
backToTop.textContent = "↑";
backToTop.style.position = "fixed";
backToTop.style.bottom = "20px";
backToTop.style.right = "20px";
backToTop.style.backgroundColor = "#007bff";
backToTop.style.color = "#fff";
backToTop.style.padding = "10px 15px";
backToTop.style.borderRadius = "50%";
backToTop.style.cursor = "pointer";
backToTop.style.display = "none";
document.body.appendChild(backToTop);

window.addEventListener("scroll", () => {
    if(window.scrollY > 300){
        backToTop.style.display = "block";
    } else {
        backToTop.style.display = "none";
    }
});

backToTop.addEventListener("click", () => {
    window.scrollTo({ top: 0, behavior: "smooth" });
});