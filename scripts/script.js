"use strict";

const nav = document.querySelector(".nav");
const navMobileMenuIcon = document.querySelector(".nav .mobile-menu-icon");

navMobileMenuIcon.addEventListener("click", function() {
	nav.classList.toggle("active");
    document.body.classList.toggle("lock-scroll");
});

const navMobileOverlay = document.querySelector(".nav .mobile-overlay");
document.body.addEventListener("click", function(e) {
    if (document.body.classList.contains("lock-scroll")) {
        if (e.target == navMobileOverlay) {
            nav.classList.toggle("active");
            document.body.classList.toggle("lock-scroll");
        }
    }
});

window.addEventListener("resize", function() {
    if (document.body.classList.contains("lock-scroll")) {
        if (window.innerWidth > 1115) {
            nav.classList.toggle("active");
            document.body.classList.toggle("lock-scroll");
        }
    }
});
