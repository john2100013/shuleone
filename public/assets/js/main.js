document.addEventListener('DOMContentLoaded', function() {
    "use strict";

    // Initialize components
    initSpinner();
    initNavbar();
    initBackToTop();
    initCarousels();
    initVideoModal();
    initCounters();

    // Initialize WOW.js if available
    if (typeof WOW !== 'undefined') {
        new WOW().init();
    }

    // Spinner functionality
    function initSpinner() {
        setTimeout(() => {
            const spinner = document.getElementById('spinner');
            if (spinner) {
                spinner.classList.remove('show');
            }
        }, 1);
    }

    // Navbar functionality
    function initNavbar() {
        // Handle navbar shadow on scroll
        window.addEventListener('scroll', () => {
            const stickyNav = document.querySelector('.sticky-top');
            if (stickyNav) {
                if (window.scrollY > 300) {
                    stickyNav.classList.add('shadow-sm');
                    stickyNav.style.top = '0px';
                } else {
                    stickyNav.classList.remove('shadow-sm');
                    stickyNav.style.top = '-200px';
                }
            }
        });

        // Close navbar on click outside and on menu item click (mobile)
        const navbarToggler = document.querySelector('.navbar-toggler');
        const navbarCollapse = document.querySelector('.navbar-collapse');

        if (navbarCollapse && navbarToggler) {
            // Close on clicking menu items
            const navLinks = navbarCollapse.querySelectorAll('.nav-link');
            navLinks.forEach(link => {
                link.addEventListener('click', () => {
                    if (window.innerWidth < 992) { // Bootstrap's lg breakpoint
                        navbarCollapse.classList.remove('show');
                        navbarToggler.classList.add('collapsed');
                    }
                });
            });

            // Close on clicking outside
            document.addEventListener('click', (e) => {
                if (!navbarCollapse.contains(e.target) && !navbarToggler.contains(e.target)) {
                    if (navbarCollapse.classList.contains('show')) {
                        navbarCollapse.classList.remove('show');
                        navbarToggler.classList.add('collapsed');
                    }
                }
            });
        }
    }

    // Back to top functionality
    function initBackToTop() {
        const backToTop = document.querySelector('.back-to-top');
        if (backToTop) {
            window.addEventListener('scroll', () => {
                if (window.scrollY > 300) {
                    backToTop.style.display = 'flex';
                    backToTop.style.opacity = '1';
                } else {
                    backToTop.style.opacity = '0';
                    setTimeout(() => {
                        backToTop.style.display = 'none';
                    }, 500);
                }
            });

            backToTop.addEventListener('click', (e) => {
                e.preventDefault();
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            });
        }
    }

    // Carousel initialization
    function initCarousels() {
        // Initialize only if jQuery and OwlCarousel are available
        if (typeof jQuery !== 'undefined' && typeof jQuery.fn.owlCarousel !== 'undefined') {
            // Pricing carousel
            jQuery(".pricing-carousel").owlCarousel({
                autoplay: true,
                smartSpeed: 2000,
                dots: true,
                loop: true,
                margin: 25,
                nav: true,
                navText: [
                    '<i class="bi bi-arrow-left"></i>',
                    '<i class="bi bi-arrow-right"></i>'
                ],
                responsive: {
                    0: { items: 1 },
                    576: { items: 2 },
                    768: { items: 2 },
                    992: { items: 3 },
                    1200: { items: 4 }
                }
            });

            // Testimonial carousel
            jQuery(".testimonial-carousel").owlCarousel({
                autoplay: true,
                smartSpeed: 2000,
                dots: true,
                loop: true,
                margin: 25,
                nav: true,
                navText: [
                    '<i class="bi bi-arrow-left"></i>',
                    '<i class="bi bi-arrow-right"></i>'
                ],
                responsive: {
                    0: { items: 1 },
                    576: { items: 1 },
                    768: { items: 1 },
                    992: { items: 2 },
                    1200: { items: 2 }
                }
            });
        }
    }

    // Video modal functionality
    function initVideoModal() {
        if (typeof jQuery !== 'undefined') {
            let videoSrc;

            jQuery('.btn-play').click(function() {
                videoSrc = jQuery(this).data("src");
            });

            jQuery('#videoModal').on('shown.bs.modal', function() {
                jQuery("#video").attr('src', videoSrc + "?autoplay=1&modestbranding=1&showinfo=0");
            });

            jQuery('#videoModal').on('hide.bs.modal', function() {
                jQuery("#video").attr('src', videoSrc);
            });
        }
    }

    // Counter functionality
    function initCounters() {
        if (typeof jQuery !== 'undefined' && typeof jQuery.fn.counterUp !== 'undefined') {
            jQuery('[data-toggle="counter-up"]').counterUp({
                delay: 5,
                time: 2000
            });
        }
    }

    // const carousel = document.getElementById('carousel');
    // let scrollAmount = 0;
    // let autoScroll = setInterval(() => {
    //     scrollAmount += carousel.children[0].offsetWidth + 30;
    //     if (scrollAmount >= carousel.scrollWidth - carousel.offsetWidth) {
    //         scrollAmount = 0;
    //     }
    //     carousel.style.transform = `translateX(-${scrollAmount}px)`;
    // }, 3000);

    document.addEventListener('DOMContentLoaded', function() {
        const carousel = document.getElementById('carousel');
        const prevBtn = document.getElementById('prevBtn');
        const nextBtn = document.getElementById('nextBtn');
        const itemWidth = carousel.querySelector('.carousel-item-services').offsetWidth + 30; // Including gap
        const totalItems = carousel.children.length;
        let currentIndex = 0;
        let isAutoScrolling = true;
        let autoScrollInterval;

        // Function to update carousel position
        function updateCarousel() {
            carousel.style.transform = `translateX(-${currentIndex * itemWidth}px)`;
        }

        // Next slide function
        function nextSlide() {
            currentIndex = (currentIndex + 1) % totalItems;
            updateCarousel();
        }

        // Previous slide function
        function prevSlide() {
            currentIndex = (currentIndex - 1 + totalItems) % totalItems;
            updateCarousel();
        }

        // Start auto-scroll
        function startAutoScroll() {
            if (isAutoScrolling) {
                autoScrollInterval = setInterval(nextSlide, 3000);
            }
        }

        // Stop auto-scroll
        function stopAutoScroll() {
            clearInterval(autoScrollInterval);
        }

        // Event listeners
        prevBtn.addEventListener('click', () => {
            prevSlide();
            stopAutoScroll();
            setTimeout(startAutoScroll, 5000);
        });

        nextBtn.addEventListener('click', () => {
            nextSlide();
            stopAutoScroll();
            setTimeout(startAutoScroll, 5000);
        });

        // Pause on hover
        carousel.addEventListener('mouseenter', () => {
            isAutoScrolling = true;
            stopAutoScroll();
        });

        carousel.addEventListener('mouseleave', () => {
            isAutoScrolling = true;
            startAutoScroll();
        });

        // Start the auto-scroll
        startAutoScroll();

        // Handle window resize
        window.addEventListener('resize', () => {
            // Recalculate item width on resize
            const newItemWidth = carousel.querySelector('.carousel-item-services').offsetWidth + 30;
            updateCarousel();
        });

 /**
     * Sticky Header on Scroll
     */
 const selectHeader = document.querySelector('#header');
 if (selectHeader) {
     let headerOffset = selectHeader.offsetTop;
     let nextElement = selectHeader.nextElementSibling;

     const headerFixed = () => {
         if ((headerOffset - window.scrollY) <= 0) {
             selectHeader.classList.add('sticked');
             if (nextElement) nextElement.classList.add('sticked-header-offset');
         } else {
             selectHeader.classList.remove('sticked');
             if (nextElement) nextElement.classList.remove('sticked-header-offset');
         }
     }
     window.addEventListener('load', headerFixed);
     document.addEventListener('scroll', headerFixed);
 }

 /**
  * Mobile nav toggle
  */
 const mobileNavShow = document.querySelector('.mobile-nav-show');
 const mobileNavHide = document.querySelector('.mobile-nav-hide');

 document.querySelectorAll('.mobile-nav-toggle').forEach(el => {
     el.addEventListener('click', function(event) {
         event.preventDefault();
         mobileNavToogle();
     })
 });

 function mobileNavToogle() {
     document.querySelector('body').classList.toggle('mobile-nav-active');
     mobileNavShow.classList.toggle('d-none');
     mobileNavHide.classList.toggle('d-none');
 }

 /**
  * Hide mobile nav on same-page/hash links
  */
 document.querySelectorAll('#navmenu a').forEach(navmenu => {
     navmenu.addEventListener('click', () => {
         if (document.querySelector('.mobile-nav-active')) {
             mobileNavToogle();
         }
     });
 });

 /**
  * Dropdown menus
  */
 document.querySelectorAll('.dropdown').forEach(function (dropdown) {
     dropdown.addEventListener('click', function (e) {
         if (this.classList.contains('dropdown-active')) {
             this.classList.remove('dropdown-active');
         } else {
             this.classList.add('dropdown-active');
         }
     });
 });

 /**
  * Toggle mobile nav dropdowns
  */
 const navDropdowns = document.querySelectorAll('.navmenu .has-dropdown');

 navDropdowns.forEach(el => {
     el.addEventListener('click', function(event) {
         if (document.querySelector('.mobile-nav-active')) {
             event.preventDefault();
             this.classList.toggle('active');
             this.querySelector('.dropdown-content').classList.toggle('active');
         }
     })
 });

 /**
  * Scroll top button
  */
 const scrollTop = document.querySelector('.scroll-top');
 if (scrollTop) {
     const togglescrollTop = function() {
         window.scrollY > 100 ? scrollTop.classList.add('active') : scrollTop.classList.remove('active');
     }
     window.addEventListener('load', togglescrollTop);
     document.addEventListener('scroll', togglescrollTop);
     scrollTop.addEventListener('click', window.scrollTo({
         top: 0,
         behavior: 'smooth'
     }));
 }

 /**
  * Initiate AOS
  */
 function aos_init() {
     AOS.init({
         duration: 800,
         easing: 'ease-in-out',
         once: true,
         mirror: false
     });
 }
 window.addEventListener('load', () => {
     aos_init();
 });

 /**
  * Handle Video Play Button
  */
 const playButtons = document.querySelectorAll('.play-btn');
 if (playButtons) {
     playButtons.forEach(button => {
         button.addEventListener('click', function() {
             // Here you would typically implement video loading logic
             // For demonstration, we'll just update the UI
             const videoContainer = this.closest('.video-container');
             if (videoContainer) {
                 const imgElement = videoContainer.querySelector('img');
                 if (imgElement) {
                     // This would be replaced with actual video embed code
                     const videoPlaceholder = document.createElement('div');
                     videoPlaceholder.className = 'ratio ratio-16x9 bg-dark d-flex align-items-center justify-content-center';
                     videoPlaceholder.innerHTML = '<div class="text-white">Video would play here</div>';
                     imgElement.parentNode.replaceChild(videoPlaceholder, imgElement);
                     this.style.display = 'none';
                 }
             }
         });
     });
 });
