// Main JavaScript File
document.addEventListener('DOMContentLoaded', function() {
    // ===== ELEMENTS SELECTION =====
    const mainNav = document.querySelector('.main-nav');
    const mobileMenuBtn = document.querySelector('.mobile-menu-btn');
    const navigation = document.querySelector('.navigation ul');
    const navLinks = document.querySelectorAll('.navigation a');
    const sections = document.querySelectorAll('section');
    const languageSelect = document.querySelector('.language-select');
    
    // ===== MOBILE MENU TOGGLE =====
    if (mobileMenuBtn) {
        mobileMenuBtn.addEventListener('click', function(e) {
            e.stopPropagation(); // Prevent event bubbling
            
            if (navigation.style.display === 'flex') {
                navigation.style.display = 'none';
            } else {
                // Set mobile menu styles
                navigation.style.display = 'flex';
                navigation.style.flexDirection = 'column';
                navigation.style.position = 'absolute';
                navigation.style.top = '100%';
                navigation.style.left = '0';
                navigation.style.width = '100%';
                navigation.style.background = 'white';
                navigation.style.padding = '25px';
                navigation.style.boxShadow = '0 10px 20px rgba(0,0,0,0.1)';
                navigation.style.zIndex = '1000';
                navigation.style.gap = '15px';
                navigation.style.alignItems = 'center';
            }
        });
    }

    // ===== CLOSE MOBILE MENU WHEN CLICKING OUTSIDE =====
    document.addEventListener('click', function(event) {
        if (navigation && navigation.style.display === 'flex') {
            const isClickInsideNav = navigation.contains(event.target);
            const isClickOnMenuBtn = mobileMenuBtn?.contains(event.target);
            
            if (!isClickInsideNav && !isClickOnMenuBtn) {
                navigation.style.display = 'none';
            }
        }
    });

    // ===== LANGUAGE SELECTOR =====
    if (languageSelect) {
        languageSelect.addEventListener('change', function() {
            // You can replace this with actual language switching logic
            console.log('Language changed to: ' + this.value);
            // alert('k-Seva: Language changed to ' + this.value); // Optional
        });
    }

    // ===== SCROLL EVENT HANDLER (Combined sticky nav + active menu) =====
    function handleScroll() {
        // Sticky navigation enhancement
        if (mainNav) {
            if (window.scrollY > 100) {
                mainNav.classList.add('scrolled');
                // Apply styles via CSS class instead of inline styles
            } else {
                mainNav.classList.remove('scrolled');
            }
        }
        
        // Update active menu item based on scroll position
        if (sections.length > 0 && navLinks.length > 0) {
            let current = '';
            const scrollPosition = window.scrollY + 150; // Offset for better activation
            
            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                const sectionBottom = sectionTop + section.offsetHeight;
                
                if (scrollPosition >= sectionTop && scrollPosition < sectionBottom) {
                    current = section.getAttribute('id');
                }
            });

            navLinks.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href') === `#${current}`) {
                    link.classList.add('active');
                }
            });
        }
    }

    // Add scroll event listener
    window.addEventListener('scroll', handleScroll);
    
    // Call once on load to set initial active state
    setTimeout(handleScroll, 100);

    // ===== SMOOTH SCROLL FOR ANCHOR LINKS WITH OFFSET =====
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            
            const targetId = this.getAttribute('href');
            
            // Skip if it's just "#" or empty
            if (targetId === '#' || targetId === '') return;
            
            const targetElement = document.querySelector(targetId);
            
            if (targetElement) {
                // Close mobile menu if open
                if (navigation && navigation.style.display === 'flex') {
                    navigation.style.display = 'none';
                }
                
                // Calculate offset for fixed navbar
                const navbarHeight = mainNav ? mainNav.offsetHeight : 80;
                const targetPosition = targetElement.offsetTop - navbarHeight;
                
                window.scrollTo({
                    top: targetPosition,
                    behavior: 'smooth'
                });
            }
        });
    });

  // ===== PREVENT CLICK PROPAGATION ON TOP BAR ELEMENTS =====
    const topBarElements = document.querySelectorAll('.top-bar-left span, .top-bar-left a, .top-bar-left i');
    topBarElements.forEach(element => {
        element.addEventListener('click', function(e) {
            e.stopPropagation(); // Stop event from bubbling up
            // Keep the default behavior (like opening mailto: or tel:)
        });
    });
    
    // Also add to email and phone specifically
    const emailSpan = document.querySelector('.email');
    if (emailSpan) {
        emailSpan.addEventListener('click', function(e) {
            e.stopPropagation();
            // Optional: Open email client
            window.location.href = 'mailto:support@k-seva.in';
        });
    }
    
    const phoneSpan = document.querySelector('.phone');
    if (phoneSpan) {
        phoneSpan.addEventListener('click', function(e) {
            e.stopPropagation();
            // Optional: Open phone dialer
            window.location.href = 'tel:01169313454';
        });
    }
});
// ===== WINDOW RESIZE HANDLER =====
window.addEventListener('resize', function() {
    const navigation = document.querySelector('.navigation ul');
    
    if (!navigation) return;
    
    if (window.innerWidth > 768) {
        // Desktop view - reset mobile styles
        navigation.style.display = 'flex';
        navigation.style.flexDirection = 'row';
        navigation.style.position = 'relative';
        navigation.style.top = 'auto';
        navigation.style.left = 'auto';
        navigation.style.width = 'auto';
        navigation.style.background = 'transparent';
        navigation.style.padding = '0';
        navigation.style.boxShadow = 'none';
        navigation.style.gap = '35px';
        navigation.style.alignItems = 'center';
    } else {
        // Mobile view - hide by default
        navigation.style.display = 'none';
        // Keep other styles for when it's shown via click
    }
});

// ===== INITIAL CHECK FOR WINDOW SIZE =====
// Run on page load to set correct initial state
window.dispatchEvent(new Event('resize'));

// Testimonials Slider Functionality
// Testimonials Slider Functionality
document.addEventListener('DOMContentLoaded', function() {
    const track = document.getElementById('testimonialsTrack');
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');
    const navDots = document.querySelectorAll('.nav-dot');
    
    if (!track) return;
    
    let currentIndex = 0;
    const cards = document.querySelectorAll('.testimonial-card');
    const totalCards = cards.length;
    
    // Drag/Swipe variables
    let isDragging = false;
    let startPos = 0;
    let currentTranslate = 0;
    let prevTranslate = 0;
    let animationID = 0;
    let dragStartX = 0;
    
    // Function to get number of cards per view based on screen size
    function getCardsPerView() {
        if (window.innerWidth > 1024) return 3;
        if (window.innerWidth > 768) return 2;
        return 1;
    }
    
    // Function to get card width including gap
    function getCardWidth() {
        const card = cards[0];
        if (!card) return 400;
        return card.offsetWidth;
    }
    
    // Function to get gap
    function getGap() {
        const trackStyle = window.getComputedStyle(track);
        const gap = trackStyle.gap;
        return parseInt(gap) || 30;
    }
    
    // Function to get max index
    function getMaxIndex() {
        const cardsPerView = getCardsPerView();
        return Math.ceil(totalCards / cardsPerView) - 1;
    }
    
    // Get position based on index
    function getPositionByIndex() {
        const cardsPerView = getCardsPerView();
        const cardWidth = getCardWidth();
        const gap = getGap();
        return -(currentIndex * (cardWidth + gap) * cardsPerView);
    }
    
    // Update slider position
    function updateSlider() {
        const cardsPerView = getCardsPerView();
        const cardWidth = getCardWidth();
        const gap = getGap();
        const maxIndex = getMaxIndex();
        
        // Ensure currentIndex is within bounds
        if (currentIndex > maxIndex) {
            currentIndex = maxIndex;
        }
        
        const translateValue = -(currentIndex * (cardWidth + gap) * cardsPerView);
        track.style.transform = `translateX(${translateValue}px)`;
        
        // Update navigation dots
        navDots.forEach((dot, index) => {
            if (index === currentIndex) {
                dot.classList.add('active');
            } else {
                dot.classList.remove('active');
            }
        });
        
        // Update arrow states
        if (prevBtn && nextBtn) {
            prevBtn.disabled = currentIndex === 0;
            nextBtn.disabled = currentIndex === maxIndex;
        }
        
        // Update drag positions
        prevTranslate = translateValue;
        currentTranslate = translateValue;
    }
    
    // DRAG FUNCTIONS
    function dragStart(e) {
        e.preventDefault();
        
        // Get starting position
        if (e.type === 'touchstart') {
            startPos = e.touches[0].clientX;
            dragStartX = e.touches[0].clientX;
        } else {
            startPos = e.clientX;
            dragStartX = e.clientX;
        }
        
        isDragging = true;
        
        // Stop auto slide when dragging
        clearInterval(autoSlideInterval);
        
        // Add dragging class
        track.classList.add('dragging');
        
        // Cancel transition during drag
        track.style.transition = 'none';
        
        // Set current translate from current position
        currentTranslate = getPositionByIndex();
        prevTranslate = currentTranslate;
        
        animationID = requestAnimationFrame(animation);
    }
    
    function dragMove(e) {
        if (!isDragging) return;
        
        e.preventDefault();
        
        let currentPosition;
        if (e.type === 'touchmove') {
            currentPosition = e.touches[0].clientX;
        } else {
            currentPosition = e.clientX;
        }
        
        // Calculate distance moved
        const distance = currentPosition - startPos;
        currentTranslate = prevTranslate + distance;
        
        // Add resistance at edges
        const maxIndex = getMaxIndex();
        const cardsPerView = getCardsPerView();
        const cardWidth = getCardWidth();
        const gap = getGap();
        const minTranslate = -(maxIndex * (cardWidth + gap) * cardsPerView);
        
        if (currentTranslate > 0) {
            currentTranslate = currentTranslate * 0.3; // Resistance at start
        } else if (currentTranslate < minTranslate) {
            const overDrag = currentTranslate - minTranslate;
            currentTranslate = minTranslate + (overDrag * 0.3); // Resistance at end
        }
        
        track.style.transform = `translateX(${currentTranslate}px)`;
    }
    
    function dragEnd(e) {
        if (!isDragging) return;
        
        e.preventDefault();
        
        cancelAnimationFrame(animationID);
        
        // Calculate which slide to snap to
        const cardsPerView = getCardsPerView();
        const cardWidth = getCardWidth();
        const gap = getGap();
        const movedBy = currentTranslate - prevTranslate;
        
        // Determine if we should move to next/previous slide
        const threshold = (cardWidth * 0.2); // 20% of card width
        
        if (Math.abs(movedBy) > threshold) {
            const maxIndex = getMaxIndex();
            
            if (movedBy < 0 && currentIndex < maxIndex) {
                // Moved left - go to next
                currentIndex++;
            } else if (movedBy > 0 && currentIndex > 0) {
                // Moved right - go to previous
                currentIndex--;
            }
        }
        
        // Restore transition
        track.style.transition = 'transform 0.5s ease';
        
        // Update to final position
        updateSlider();
        
        // Reset drag state
        isDragging = false;
        track.classList.remove('dragging');
        
        // Restart auto slide
        startAutoSlide();
    }
    
    function animation() {
        if (isDragging) {
            requestAnimationFrame(animation);
        }
    }
    
    // Touch events
    track.addEventListener('touchstart', dragStart, { passive: false });
    track.addEventListener('touchmove', dragMove, { passive: false });
    track.addEventListener('touchend', dragEnd);
    track.addEventListener('touchcancel', dragEnd);
    
    // Mouse events
    track.addEventListener('mousedown', dragStart);
    track.addEventListener('mousemove', dragMove);
    track.addEventListener('mouseup', dragEnd);
    track.addEventListener('mouseleave', dragEnd);
    
    // Prevent default drag behavior on images
    track.addEventListener('dragstart', (e) => e.preventDefault());
    
    // Next button click
    if (nextBtn) {
        nextBtn.addEventListener('click', function() {
            const maxIndex = getMaxIndex();
            if (currentIndex < maxIndex) {
                currentIndex++;
                updateSlider();
            }
        });
    }
    
    // Previous button click
    if (prevBtn) {
        prevBtn.addEventListener('click', function() {
            if (currentIndex > 0) {
                currentIndex--;
                updateSlider();
            }
        });
    }
    
    // Navigation dots click
    navDots.forEach((dot, index) => {
        dot.addEventListener('click', function() {
            const maxIndex = getMaxIndex();
            if (index <= maxIndex) {
                currentIndex = index;
                updateSlider();
            }
        });
    });
    
    // Auto slide function
    let autoSlideInterval;
    
    function startAutoSlide() {
        autoSlideInterval = setInterval(function() {
            const maxIndex = getMaxIndex();
            if (currentIndex < maxIndex) {
                currentIndex++;
            } else {
                currentIndex = 0;
            }
            updateSlider();
        }, 5000);
    }
    
    // Pause auto slide on hover
    const sliderContainer = document.querySelector('.testimonials-slider-container');
    if (sliderContainer) {
        sliderContainer.addEventListener('mouseenter', function() {
            clearInterval(autoSlideInterval);
        });
        
        sliderContainer.addEventListener('mouseleave', function() {
            startAutoSlide();
        });
    }
    
    // Update on window resize
    window.addEventListener('resize', function() {
        const maxIndex = getMaxIndex();
        if (currentIndex > maxIndex) {
            currentIndex = maxIndex;
        }
        updateSlider();
    });
    
    // Initial update
    updateSlider();
    startAutoSlide();
});

// Main JavaScript File
document.addEventListener('DOMContentLoaded', function() {
    // ===== ELEMENTS SELECTION =====
    const mainNav = document.querySelector('.main-nav');
    const mobileMenuBtn = document.querySelector('.mobile-menu-btn');
    const navigation = document.querySelector('.navigation ul');
    const navLinks = document.querySelectorAll('.navigation a');
    const sections = document.querySelectorAll('section');
    const languageSelect = document.querySelector('.language-select');
    const logoLink = document.querySelector('.logo-area a');
    
    // ===== MOBILE MENU TOGGLE =====
    if (mobileMenuBtn) {
        mobileMenuBtn.addEventListener('click', function(e) {
            e.stopPropagation(); // Prevent event bubbling
            
            if (navigation.style.display === 'flex') {
                navigation.style.display = 'none';
            } else {
                // Set mobile menu styles
                navigation.style.display = 'flex';
                navigation.style.flexDirection = 'column';
                navigation.style.position = 'absolute';
                navigation.style.top = '100%';
                navigation.style.left = '0';
                navigation.style.width = '100%';
                navigation.style.background = 'white';
                navigation.style.padding = '25px';
                navigation.style.boxShadow = '0 10px 20px rgba(0,0,0,0.1)';
                navigation.style.zIndex = '1000';
                navigation.style.gap = '15px';
                navigation.style.alignItems = 'center';
            }
        });
    }

    // ===== CLOSE MOBILE MENU WHEN CLICKING OUTSIDE =====
    document.addEventListener('click', function(event) {
        if (navigation && navigation.style.display === 'flex') {
            const isClickInsideNav = navigation.contains(event.target);
            const isClickOnMenuBtn = mobileMenuBtn?.contains(event.target);
            
            if (!isClickInsideNav && !isClickOnMenuBtn) {
                navigation.style.display = 'none';
            }
        }
    });

    // ===== LANGUAGE SELECTOR =====
    if (languageSelect) {
        languageSelect.addEventListener('change', function() {
            console.log('Language changed to: ' + this.value);
        });
    }

    // ===== FUNCTION TO UPDATE ACTIVE MENU =====
    function updateActiveMenu() {
        let current = '';
        const scrollPosition = window.scrollY + 150; // Offset for better activation
        
        sections.forEach(section => {
            const sectionTop = section.offsetTop;
            const sectionBottom = sectionTop + section.offsetHeight;
            
            if (scrollPosition >= sectionTop && scrollPosition < sectionBottom) {
                current = section.getAttribute('id');
            }
        });

        navLinks.forEach(link => {
            link.classList.remove('active');
            const linkHref = link.getAttribute('href').replace('#', '');
            if (linkHref === current) {
                link.classList.add('active');
            }
        });
    }

    // ===== SCROLL EVENT HANDLER =====
    function handleScroll() {
        // Sticky navigation enhancement
        if (mainNav) {
            if (window.scrollY > 100) {
                mainNav.classList.add('scrolled');
            } else {
                mainNav.classList.remove('scrolled');
            }
        }
        
        // Update active menu item
        updateActiveMenu();
    }

    // Add scroll event listener
    window.addEventListener('scroll', handleScroll);
    
    // Call once on load to set initial active state
    setTimeout(handleScroll, 100);

    // ===== LOGO CLICK HANDLER =====
    if (logoLink) {
        logoLink.addEventListener('click', function(e) {
            e.preventDefault(); // Prevent default anchor behavior
            
            // Scroll to top smoothly
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
            
            // Update active menu to Home
            navLinks.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href') === '#home') {
                    link.classList.add('active');
                }
            });
            
            // Close mobile menu if open
            if (navigation && navigation.style.display === 'flex') {
                navigation.style.display = 'none';
            }
        });
    }

    // ===== SMOOTH SCROLL FOR ANCHOR LINKS WITH OFFSET =====
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            
            const targetId = this.getAttribute('href');
            
            // Skip if it's just "#" or empty
            if (targetId === '#' || targetId === '') return;
            
            const targetElement = document.querySelector(targetId);
            
            if (targetElement) {
                // Close mobile menu if open
                if (navigation && navigation.style.display === 'flex') {
                    navigation.style.display = 'none';
                }
                
                // Calculate offset for fixed navbar
                const navbarHeight = mainNav ? mainNav.offsetHeight : 80;
                const targetPosition = targetElement.offsetTop - navbarHeight;
                
                window.scrollTo({
                    top: targetPosition,
                    behavior: 'smooth'
                });
                
                // Update active menu
                setTimeout(() => {
                    updateActiveMenu();
                }, 300);
            }
        });
    });

    // ===== PREVENT CLICK PROPAGATION ON TOP BAR ELEMENTS =====
    const topBarElements = document.querySelectorAll('.top-bar-left span, .top-bar-left a, .top-bar-left i');
    topBarElements.forEach(element => {
        element.addEventListener('click', function(e) {
            e.stopPropagation();
        });
    });
    
    // Email and phone handlers
    const emailSpan = document.querySelector('.email');
    if (emailSpan) {
        emailSpan.addEventListener('click', function(e) {
            e.stopPropagation();
            window.location.href = 'mailto:support@k-seva.in';
        });
    }
    
    const phoneSpan = document.querySelector('.phone');
    if (phoneSpan) {
        phoneSpan.addEventListener('click', function(e) {
            e.stopPropagation();
            window.location.href = 'tel:01169313454';
        });
    }
});

// ===== WINDOW RESIZE HANDLER =====
window.addEventListener('resize', function() {
    const navigation = document.querySelector('.navigation ul');
    
    if (!navigation) return;
    
    if (window.innerWidth > 768) {
        // Desktop view - reset mobile styles
        navigation.style.display = 'flex';
        navigation.style.flexDirection = 'row';
        navigation.style.position = 'relative';
        navigation.style.top = 'auto';
        navigation.style.left = 'auto';
        navigation.style.width = 'auto';
        navigation.style.background = 'transparent';
        navigation.style.padding = '0';
        navigation.style.boxShadow = 'none';
        navigation.style.gap = '35px';
        navigation.style.alignItems = 'center';
    } else {
        // Mobile view - hide by default
        navigation.style.display = 'none';
    }
});

// ===== INITIAL CHECK FOR WINDOW SIZE =====
window.dispatchEvent(new Event('resize'));

// Add this to your assets/script.js file
document.addEventListener('DOMContentLoaded', function() {
    // Handle logo click - ensure it goes to index.php
    const logoLink = document.querySelector('.logo-area a');
    if (logoLink) {
        logoLink.addEventListener('click', function(e) {
            // Let the default behavior work
            window.location.href = 'index.php';
        });
    }

    // Handle anchor links on index page
    const navLinks = document.querySelectorAll('.navigation a[href^="index.php#"], .navigation a[href^="#"]');
    
    navLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            
            let targetId;
            if (this.getAttribute('href').includes('#')) {
                targetId = this.getAttribute('href').split('#')[1];
            } else {
                targetId = this.getAttribute('href').substring(1);
            }
            
            const targetElement = document.getElementById(targetId);
            
            if (targetElement) {
                // Smooth scroll to target
                targetElement.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
});

