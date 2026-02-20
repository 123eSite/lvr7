var app = {
    init: function () {
        console.log("App initialized");
        this.headerFix();
        this.plugins();
    },

    headerFix: function () {
        var header = document.querySelector('.header-main');
        if (!header) return;

        // Clone header
        var clone = header.cloneNode(true);
        clone.classList.add('fix');
        clone.classList.remove('header-main');
        document.body.prepend(clone);

        // Scroll Event
        window.addEventListener('scroll', function () {
            if (window.scrollY > 200) {
                clone.classList.add('show');
            } else {
                clone.classList.remove('show');
            }
        });
    },

    plugins: function () {
        // Initialize Swiper
        if (typeof Swiper !== 'undefined') {
            document.querySelectorAll('.swiper').forEach(function (swiperContainer) {
                var config = {
                    loop: swiperContainer.getAttribute('data-loop') === 'true',
                    pagination: {
                        el: swiperContainer.querySelector('.swiper-pagination') ? '.swiper-pagination' : null,
                        clickable: true
                    },
                    navigation: {
                        nextEl: swiperContainer.querySelector('.swiper-button-next') ? '.swiper-button-next' : null,
                        prevEl: swiperContainer.querySelector('.swiper-button-prev') ? '.swiper-button-prev' : null,
                    },
                    autoplay: swiperContainer.getAttribute('data-autoplay') === 'true' ? {
                        delay: parseInt(swiperContainer.getAttribute('data-autoplay-delay') || 3000),
                        disableOnInteraction: false
                    } : false,
                    breakpoints: {
                        320: {
                            slidesPerView: parseInt(swiperContainer.getAttribute('data-mobile') || 1),
                            spaceBetween: parseInt(swiperContainer.getAttribute('data-space') || 20)
                        },
                        768: {
                            slidesPerView: parseInt(swiperContainer.getAttribute('data-tablet') || 2),
                            spaceBetween: parseInt(swiperContainer.getAttribute('data-space') || 30)
                        },
                        1024: {
                            slidesPerView: parseInt(swiperContainer.getAttribute('data-desktop') || 3),
                            spaceBetween: parseInt(swiperContainer.getAttribute('data-space') || 40)
                        }
                    }
                };
                new Swiper(swiperContainer, config);
            });
        }

        // ScrollSpy / Active Link Logic
        const sections = document.querySelectorAll('section');
        const navLi = document.querySelectorAll('.navbar-nav .nav-item .nav-link');

        window.addEventListener('scroll', () => {
            let current = '';
            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.clientHeight;
                if (pageYOffset >= (sectionTop - 150)) {
                    current = section.getAttribute('id');
                }
            });

            navLi.forEach(li => {
                li.classList.remove('active');
                if (li.getAttribute('href').includes(current)) {
                    li.classList.add('active');
                }
            });
        });
    }
};

document.addEventListener('DOMContentLoaded', function () {
    app.init();
});
