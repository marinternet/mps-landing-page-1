document.addEventListener("DOMContentLoaded", function() {
    // Select all navigation links
    const navLinks = document.querySelectorAll('.navbar-nav .nav-link');
    // Select the navbar collapse element
    const navbarCollapse = document.querySelector('.navbar-collapse');
    // Select the navbar toggler button
    const navToggler = document.querySelector('.navbar-toggler');

    navLinks.forEach(function(link) {
        link.addEventListener('click', function() {
            // Check if the navbar is currently expanded
            if (navbarCollapse.classList.contains('show')) {
                // Programmatically click the toggler button to close the navbar
                navToggler.click();
            }
        });
    });
});