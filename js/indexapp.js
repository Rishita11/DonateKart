const navbarToggler = document.querySelector(".navbar-toggler");
const collapseNav = document.querySelector("#navbarNav");
navbarToggler.addEventListener("click", () => {
    collapseNav.classList.toggle("show");
});
