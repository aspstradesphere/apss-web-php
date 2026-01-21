/**
 * Image Slider JavaScript
 * Auto-advance with Ken Burns effect
 */

class ImageSlider {
    constructor(sliderElement) {
        this.slider = sliderElement;
        this.slides = this.slider.querySelectorAll('.slide');
        this.dots = this.slider.querySelectorAll('.dot');
        this.prevBtn = this.slider.querySelector('.slider-nav.prev');
        this.nextBtn = this.slider.querySelector('.slider-nav.next');
        this.currentSlide = 0;
        this.slideInterval = null;
        this.isPaused = false;

        this.init();
    }

    init() {
        // Show first slide
        this.showSlide(0);

        // Auto advance
        this.startAutoSlide();

        // Event listeners
        if (this.prevBtn) {
            this.prevBtn.addEventListener('click', () => this.prevSlide());
        }

        if (this.nextBtn) {
            this.nextBtn.addEventListener('click', () => this.nextSlide());
        }

        // Dot navigation
        this.dots.forEach((dot, index) => {
            dot.addEventListener('click', () => this.goToSlide(index));
        });

        // Pause on hover
        this.slider.addEventListener('mouseenter', () => this.pause());
        this.slider.addEventListener('mouseleave', () => this.resume());

        // Touch support
        this.addTouchSupport();
    }

    showSlide(index) {
        // Remove active class from all slides and dots
        this.slides.forEach(slide => slide.classList.remove('active'));
        this.dots.forEach(dot => dot.classList.remove('active'));

        // Add active class to current slide and dot
        this.slides[index].classList.add('active');
        if (this.dots[index]) {
            this.dots[index].classList.add('active');
        }

        this.currentSlide = index;
    }

    nextSlide() {
        let next = (this.currentSlide + 1) % this.slides.length;
        this.showSlide(next);
        this.resetAutoSlide();
    }

    prevSlide() {
        let prev = (this.currentSlide - 1 + this.slides.length) % this.slides.length;
        this.showSlide(prev);
        this.resetAutoSlide();
    }

    goToSlide(index) {
        this.showSlide(index);
        this.resetAutoSlide();
    }

    startAutoSlide() {
        this.slideInterval = setInterval(() => {
            if (!this.isPaused) {
                this.nextSlide();
            }
        }, 6000); // 6 seconds as per WordPress settings
    }

    resetAutoSlide() {
        clearInterval(this.slideInterval);
        this.startAutoSlide();
    }

    pause() {
        this.isPaused = true;
    }

    resume() {
        this.isPaused = false;
    }

    addTouchSupport() {
        let touchStartX = 0;
        let touchEndX = 0;

        this.slider.addEventListener('touchstart', (e) => {
            touchStartX = e.changedTouches[0].screenX;
        });

        this.slider.addEventListener('touchend', (e) => {
            touchEndX = e.changedTouches[0].screenX;
            this.handleSwipe();
        });

        const handleSwipe = () => {
            if (touchEndX < touchStartX - 50) {
                this.nextSlide();
            }
            if (touchEndX > touchStartX + 50) {
                this.prevSlide();
            }
        };

        this.handleSwipe = handleSwipe;
    }
}


// Initialize slider when DOM is ready
document.addEventListener('DOMContentLoaded', function () {
    const sliderElement = document.querySelector('.hero-slider');
    if (sliderElement) {
        new ImageSlider(sliderElement);
    }
    
    // Initialize Document Carousel if present
    const docSliderContainer = document.querySelector('.document-slider-container');
    if (docSliderContainer) {
        new CardCarousel(docSliderContainer);
    }
});

/**
 * Card Carousel for Documents
 * Handles multiple items per view sliding
 */
class CardCarousel {
    constructor(container) {
        this.container = container;
        this.track = container.querySelector('.document-track');
        this.slides = Array.from(this.track.children);
        this.nextBtn = container.querySelector('.doc-slider-btn.next');
        this.prevBtn = container.querySelector('.doc-slider-btn.prev');
        
        this.slideWidth = 300; // base width
        this.gap = 30; // gap
        this.currentIndex = 0;
        
        this.init();
    }
    
    init() {
        this.updateDimensions();
        window.addEventListener('resize', () => this.updateDimensions());
        
        if (this.nextBtn) {
            this.nextBtn.addEventListener('click', () => this.slideNext());
        }
        if (this.prevBtn) {
            this.prevBtn.addEventListener('click', () => this.slidePrev());
        }
    }
    
    updateDimensions() {
        // Calculate how many slides fit
        // This is a simple implementation; flexible widths might need more complex calculation
        if (this.slides.length > 0) {
            const slideStyle = window.getComputedStyle(this.slides[0]);
            this.slideWidth = this.slides[0].offsetWidth;
            this.gap = parseInt(slideStyle.marginRight) || 30; // Assuming gap is margin or flex gap
        }
    }
    
    slideNext() {
        // Move one slide width + gap
        const maxScroll = (this.slides.length * (this.slideWidth + this.gap)) - this.container.offsetWidth;
        const currentScroll = Math.abs(this.getTranslateX());
        
        if (currentScroll < maxScroll) {
            this.currentIndex++;
            this.updatePosition();
        } else {
             // Loop back to start for infinite feel (optional)
             this.currentIndex = 0;
             this.updatePosition();
        }
    }
    
    slidePrev() {
        if (this.currentIndex > 0) {
            this.currentIndex--;
            this.updatePosition();
        }
    }
    
    getTranslateX() {
        const style = window.getComputedStyle(this.track);
        const matrix = new WebKitCSSMatrix(style.transform);
        return matrix.m41;
    }
    
    updatePosition() {
        const moveAmount = -(this.slideWidth + this.gap) * this.currentIndex;
        this.track.style.transform = `translateX(${moveAmount}px)`;
    }
}
