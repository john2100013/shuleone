import './bootstrap';
// Add to your existing app.js or create a new file
document.addEventListener('DOMContentLoaded', function() {
    // Mobile Navigation
    const mobileNavToggle = document.querySelector('.mobile-nav-toggle');
    const navMenu = document.querySelector('.navmenu');

    if (mobileNavToggle) {
        mobileNavToggle.addEventListener('click', function(e) {
            navMenu.classList.toggle('navbar-mobile');
            this.classList.toggle('bi-list');
            this.classList.toggle('bi-x');
        });
    }

    // Handle dropdown clicks on mobile
    const navDropdowns = document.querySelectorAll('.navmenu .dropdown');

    navDropdowns.forEach(dropdown => {
        dropdown.addEventListener('click', function(e) {
            if (navMenu.classList.contains('navbar-mobile')) {
                e.preventDefault();
                this.classList.toggle('active');
                this.querySelector('.dropdown-menu').classList.toggle('dropdown-active');
            }
        });
    });
});
