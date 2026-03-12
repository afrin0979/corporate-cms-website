// ==============================
// Sticky Navbar
// ==============================

window.addEventListener("scroll", function () {
  const navbar = document.querySelector(".navbar");

  if (window.scrollY > 50) {
    navbar.classList.add("shadow", "bg-white");
  } else {
    navbar.classList.remove("shadow", "bg-white");
  }
});


// ==============================
// Smooth Scrolling
// ==============================

document.querySelectorAll('a[href^="#"]').forEach(anchor => {
  anchor.addEventListener("click", function (e) {
    e.preventDefault();

    document.querySelector(this.getAttribute("href")).scrollIntoView({
      behavior: "smooth"
    });
  });
});


// ==============================
// Back To Top Button
// ==============================

const backToTop = document.createElement("button");
backToTop.innerHTML = "↑";
backToTop.id = "backToTop";

document.body.appendChild(backToTop);

backToTop.style.position = "fixed";
backToTop.style.bottom = "30px";
backToTop.style.right = "30px";
backToTop.style.padding = "10px 15px";
backToTop.style.border = "none";
backToTop.style.background = "#007bff";
backToTop.style.color = "#fff";
backToTop.style.borderRadius = "5px";
backToTop.style.cursor = "pointer";
backToTop.style.display = "none";

window.addEventListener("scroll", function () {
  if (window.scrollY > 300) {
    backToTop.style.display = "block";
  } else {
    backToTop.style.display = "none";
  }
});

backToTop.addEventListener("click", function () {
  window.scrollTo({
    top: 0,
    behavior: "smooth"
  });
});


// ==============================
// Simple Scroll Animation
// ==============================

const revealElements = document.querySelectorAll(".reveal");

function revealOnScroll() {

  const windowHeight = window.innerHeight;

  revealElements.forEach(function (el) {

    const elementTop = el.getBoundingClientRect().top;

    if (elementTop < windowHeight - 100) {
      el.classList.add("active");
    }

  });

}

window.addEventListener("scroll", revealOnScroll);


// ==============================
// Contact Form Validation
// ==============================

const contactForm = document.querySelector("form");

if (contactForm) {

  contactForm.addEventListener("submit", function (e) {

    const name = document.querySelector("input[name='name']");
    const email = document.querySelector("input[name='email']");
    const message = document.querySelector("textarea[name='message']");

    if (name.value.trim() === "" || email.value.trim() === "" || message.value.trim() === "") {

      alert("Please fill all required fields.");
      e.preventDefault();

    }

  });

}


// ==============================
// Mobile Menu Close on Click
// ==============================

const navLinks = document.querySelectorAll(".navbar-nav a");
const navbarCollapse = document.querySelector(".navbar-collapse");

navLinks.forEach(function(link){

  link.addEventListener("click", function(){

    if(navbarCollapse.classList.contains("show")){
      new bootstrap.Collapse(navbarCollapse).toggle();
    }

  });

});