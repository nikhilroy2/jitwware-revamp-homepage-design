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
        } else {
            element.textContent = `${currentValue}%`;
        }

        if (progress < 1) {
            window.requestAnimationFrame(step);
        }
    };
    window.requestAnimationFrame(step);
}

// Initialize count-up animations when document is loaded
document.addEventListener('DOMContentLoaded', function() {
    // For elements with percentage values
    document.querySelectorAll('.percentage-value, .plus-percentage').forEach(element => {
        const target = parseInt(element.getAttribute('data-target')) || 0;
        
        // Create Intersection Observer
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateValue(element, 0, target, 2000); // 2000ms = 2 seconds duration
                    observer.unobserve(element); // Only animate once
                }
            });
        }, {
            threshold: 0.1
        });

        observer.observe(element);
    });

    // Rest of your DOMContentLoaded code...
    // ...existing code for testimonial slider...
});

// Enhanced Testimonial Slider
// ...existing code...

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
        if (firstInvalid) {
            firstInvalid.scrollIntoView({ behavior: 'smooth', block: 'center' });
        }
    }
});

// Add loading state to form
document.querySelector('form')?.addEventListener('submit', function() {
    const submitButtons = this.querySelectorAll('button[type="submit"]');
    submitButtons.forEach(btn => {
        btn.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i>Versturen...';
        btn.disabled = true;
    });
});

// Parallax effect for shapes
window.addEventListener('scroll', () => {
    const scrolled = window.pageYOffset;
    const shapes = document.querySelectorAll('.section-shape');
    
    shapes.forEach((shape, index) => {
        const speed = (index + 1) * 0.5;
        shape.style.transform = `translateY(${scrolled * speed}px)`;
    });
});

// Add hover effects for service cards
document.querySelectorAll('.service-card-enhanced').forEach(card => {
    card.addEventListener('mouseenter', function() {
        this.style.transform = 'translateY(-12px) scale(1.02)';
    });
    
    card.addEventListener('mouseleave', function() {
        this.style.transform = 'translateY(0) scale(1)';
    });
});

// Enhanced typing effect for hero section
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
        const originalText = heroTitle.textContent;
        typeWriter(heroTitle, originalText, 50);
    }
}, 1000);

console.log('✨ Enhanced Jitware website loaded successfully!');


// Enhanced Count-up animation
function animateCountUp(element, target, suffix = '', duration = 2000) {
    let start = 0;
    const startTimestamp = performance.now();
    
    function update(currentTimestamp) {
        const elapsed = currentTimestamp - startTimestamp;
        const progress = Math.min(elapsed / duration, 1);
        
        const current = Math.floor(progress * target);
        element.textContent = `${current}${suffix}`;
        
        if (progress < 1) {
            requestAnimationFrame(update);
        }
    }
    
    requestAnimationFrame(update);
}

// Initialize count-up animations when document is loaded
document.addEventListener('DOMContentLoaded', function() {
    const countUpElements = document.querySelectorAll('.count-up');
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const element = entry.target;
                const target = parseInt(element.dataset.target);
                const suffix = element.textContent.includes('%') ? '%' : '';
                animateCountUp(element, target, suffix);
                observer.unobserve(element);
            }
        });
    }, {
        threshold: 0.1
    });

    countUpElements.forEach(element => {
        observer.observe(element);
    });
});