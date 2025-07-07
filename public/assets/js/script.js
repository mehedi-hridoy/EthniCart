  document.addEventListener('DOMContentLoaded', function() {
            const mobileSearchToggle = document.querySelector('.md\\:hidden .fa-magnifying-glass').parentElement;
            const mobileSearchBar = document.querySelector('.md\\:hidden.bg-white.border-t');
            
            let isSearchVisible = true;
            
            mobileSearchToggle.addEventListener('click', function() {
                isSearchVisible = !isSearchVisible;
                mobileSearchBar.style.display = isSearchVisible ? 'block' : 'none';
            });
        });



// script for nav bar left bar
    const categoryBtn = document.getElementById('categoryBtn');
        const categoryDropdown = document.getElementById('categoryDropdown');

        categoryBtn.addEventListener('click', function(e) {
            e.preventDefault();
            categoryDropdown.classList.toggle('hidden');
        });

        // Close dropdown when clicking outside
        document.addEventListener('click', function(e) {
            if (!categoryBtn.contains(e.target) && !categoryDropdown.contains(e.target)) {
                categoryDropdown.classList.add('hidden');
            }
        });

        // Handle category clicks
        const categoryLinks = categoryDropdown.querySelectorAll('a');
        categoryLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                const category = this.getAttribute('href').substring(1);
                
                // Hide dropdown
                categoryDropdown.classList.add('hidden');
                
                // Here you can add your routing logic
                console.log('Navigating to category:', category);
                
                // For demonstration, you can replace this with your actual routing
                // window.location.href = this.getAttribute('href');
            });
        });

// script for courasol images 
document.addEventListener('DOMContentLoaded', function() {
    const carousel = document.getElementById('carousel-wrapper');
    const prevBtn = document.getElementById('prev-btn');
    const nextBtn = document.getElementById('next-btn');
    const dots = document.querySelectorAll('.carousel-dot');
    
    let currentSlide = 0;
    const totalSlides = 4;
    let autoSlideInterval;
    
    // Function to go to a specific slide
    function goToSlide(slideIndex) {
        currentSlide = slideIndex;
        const translateX = -slideIndex * 100;
        carousel.style.transform = `translateX(${translateX}%)`;
        
        // Update dots
        dots.forEach((dot, index) => {
            if (index === slideIndex) {
                dot.classList.remove('bg-opacity-50');
                dot.classList.add('bg-opacity-75');
            } else {
                dot.classList.remove('bg-opacity-75');
                dot.classList.add('bg-opacity-50');
            }
        });
    }
    
    // Next slide function
    function nextSlide() {
        currentSlide = (currentSlide + 1) % totalSlides;
        goToSlide(currentSlide);
    }
    
    // Previous slide function
    function prevSlide() {
        currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
        goToSlide(currentSlide);
    }
    
    // Auto slide function
    function startAutoSlide() {
        autoSlideInterval = setInterval(nextSlide, 4000); // Change slide every 4 seconds
    }
    
    function stopAutoSlide() {
        clearInterval(autoSlideInterval);
    }
    
    // Event listeners
    nextBtn.addEventListener('click', () => {
        stopAutoSlide();
        nextSlide();
        startAutoSlide();
    });
    
    prevBtn.addEventListener('click', () => {
        stopAutoSlide();
        prevSlide();
        startAutoSlide();
    });
    
    // Dot navigation
    dots.forEach((dot, index) => {
        dot.addEventListener('click', () => {
            stopAutoSlide();
            goToSlide(index);
            startAutoSlide();
        });
    });
    
    // Touch/swipe support for mobile
    let touchStartX = 0;
    let touchEndX = 0;
    
    carousel.addEventListener('touchstart', (e) => {
        touchStartX = e.changedTouches[0].screenX;
    });
    
    carousel.addEventListener('touchend', (e) => {
        touchEndX = e.changedTouches[0].screenX;
        handleSwipe();
    });
    
    function handleSwipe() {
        const swipeThreshold = 50;
        const diff = touchStartX - touchEndX;
        
        if (Math.abs(diff) > swipeThreshold) {
            stopAutoSlide();
            if (diff > 0) {
                nextSlide(); // Swipe left - next slide
            } else {
                prevSlide(); // Swipe right - previous slide
            }
            startAutoSlide();
        }
    }
    
    // Pause auto-slide on hover
    const carouselContainer = carousel.parentElement;
    carouselContainer.addEventListener('mouseenter', stopAutoSlide);
    carouselContainer.addEventListener('mouseleave', startAutoSlide);
    
    // Start auto-slide
    startAutoSlide();
});