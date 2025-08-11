// Enhanced Mobile menu toggle
document.getElementById('mobile-menu-button')?.addEventListener('click', function () {
    const menu = document.getElementById('mobile-menu');
    menu?.classList.toggle('hidden');
});

// Enhanced Header scroll effect
window.addEventListener('scroll', function() {
    const header = document.querySelector('.enhanced-header');
    if (window.scrollY > 100) {
        header?.classList.add('scrolled');
    } else {
        header?.classList.remove('scrolled');
    }
});

// Smooth scrolling for anchor links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const targetId = this.getAttribute('href');
        if (targetId === '#') return;
        const targetElement = document.querySelector(targetId);
        if (targetElement) {
            targetElement.scrollIntoView({ 
                behavior: 'smooth',
                block: 'start'
            });
        }
    });
});

// Enhanced Count-up animation
function animateValue(element, start, end, duration) {
    let startTimestamp = null;
    const step = (timestamp) => {
        if (!startTimestamp) startTimestamp = timestamp;
        const progress = Math.min((timestamp - startTimestamp) / duration, 1);
        const currentValue = Math.floor(progress * (end - start) + start);
        
        if (element.classList.contains('plus-percentage')) {
            element.textContent = `+${currentValue}%`;
        } else if (element.classList.contains('percentage-value')) {
            element.textContent = `${currentValue}%`;
        } else {
            element.textContent = currentValue;
        }

        if (progress < 1) {
            window.requestAnimationFrame(step);
        }
    };
    window.requestAnimationFrame(step);
}

// Initialize animations when document is loaded
document.addEventListener('DOMContentLoaded', function() {
    // For all counting elements
    const countElements = document.querySelectorAll('.count-up, .percentage-value, .plus-percentage');
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const element = entry.target;
                const target = parseInt(element.dataset.target) || 0;
                animateValue(element, 0, target, 2000);
                observer.unobserve(element);
            }
        });
    }, {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    });

    countElements.forEach(element => {
        observer.observe(element);
    });

  

    // Initialize Testimonial Slider
    initializeTestimonialSlider();
});

// Enhanced Testimonial Slider initialization
function initializeTestimonialSlider() {
    const testimonialSwiper = new Swiper('.testimonial-swiper', {
        slidesPerView: 1,
        spaceBetween: 30,
        centeredSlides: true,
        loop: true,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
            dynamicBullets: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
            640: { slidesPerView: 1.2, spaceBetween: 20 },
            768: { slidesPerView: 1.3, spaceBetween: 30 },
            1024: { slidesPerView: 1.5, spaceBetween: 40 },
        },
        effect: 'coverflow',
        coverflowEffect: {
            rotate: 0,
            stretch: 0,
            depth: 100,
            modifier: 1,
            slideShadows: false,
        },
    });

    // Pause autoplay on hover
    const swiperContainer = document.querySelector('.testimonial-swiper');
    if (swiperContainer) {
        swiperContainer.addEventListener('mouseenter', () => testimonialSwiper.autoplay.stop());
        swiperContainer.addEventListener('mouseleave', () => testimonialSwiper.autoplay.start());
    }
}

// Enhanced Form Validation
document.querySelector('form')?.addEventListener('submit', function(e) {
    const requiredFields = this.querySelectorAll('[required]');
    let isValid = true;

    requiredFields.forEach(field => {
        if (!field.value.trim()) {
            isValid = false;
            field.style.borderColor = '#ef4444';
            field.style.boxShadow = '0 0 0 3px rgba(239, 68, 68, 0.1)';
        } else {
            field.style.borderColor = '#10b981';
            field.style.boxShadow = '0 0 0 3px rgba(16, 185, 129, 0.1)';
        }
    });

    if (!isValid) {
        e.preventDefault();
        const firstInvalid = this.querySelector('[required]:invalid, [required][value=""]');
        firstInvalid?.scrollIntoView({ behavior: 'smooth', block: 'center' });
    }
});

// Add loading state to form
document.querySelector('form')?.addEventListener('submit', function() {
    this.querySelectorAll('button[type="submit"]').forEach(btn => {
        btn.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i>Versturen...';
        btn.disabled = true;
    });
});

// Parallax effect for shapes
window.addEventListener('scroll', () => {
    const scrolled = window.pageYOffset;
    document.querySelectorAll('.section-shape').forEach((shape, index) => {
        const speed = (index + 1) * 0.5;
        shape.style.transform = `translateY(${scrolled * speed}px)`;
    });
});

// Add hover effects for service cards
document.querySelectorAll('.service-card-enhanced').forEach(card => {
    card.addEventListener('mouseenter', () => card.style.transform = 'translateY(-12px) scale(1.02)');
    card.addEventListener('mouseleave', () => card.style.transform = 'translateY(0) scale(1)');
});

// Enhanced typing effect
function typeWriter(element, text, speed = 100) {
    let i = 0;
    element.innerHTML = '';
    function type() {
        if (i < text.length) {
            element.innerHTML += text.charAt(i);
            i++;
            setTimeout(type, speed);
        }
    }
    type();
}

// Initialize typing effect
setTimeout(() => {
    const heroTitle = document.querySelector('.hero-enhanced h1');
    if (heroTitle) {
        typeWriter(heroTitle, heroTitle.textContent, 50);
    }
}, 1000);

console.log('✨ Enhanced Jitware website loaded successfully!');