
// Mobile menu functionality
document.addEventListener('DOMContentLoaded', function() {
    const mobileMenuBtn = document.getElementById('mobileMenuBtn');
    const mobileMenu = document.getElementById('mobileMenu');
    const menuIcon = mobileMenuBtn.querySelector('.menu-icon');
    const closeIcon = mobileMenuBtn.querySelector('.close-icon');

    mobileMenuBtn.addEventListener('click', function() {
        const isOpen = mobileMenu.classList.contains('show');
        
        if (isOpen) {
            mobileMenu.classList.remove('show');
            menuIcon.style.display = 'block';
            closeIcon.style.display = 'none';
        } else {
            mobileMenu.classList.add('show');
            menuIcon.style.display = 'none';
            closeIcon.style.display = 'block';
        }
    });

    // Close mobile menu when clicking on a link
    const mobileNavLinks = document.querySelectorAll('.mobile-nav-link');
    mobileNavLinks.forEach(link => {
        link.addEventListener('click', function() {
            mobileMenu.classList.remove('show');
            menuIcon.style.display = 'block';
            closeIcon.style.display = 'none';
        });
    });

    // Newsletter form submission
    const newsletterForm = document.getElementById('newsletterForm');
    const emailInput = document.getElementById('emailInput');

    newsletterForm.addEventListener('submit', function(e) {
        e.preventDefault();
        const email = emailInput.value.trim();
        
        if (email) {
            // Simulate newsletter subscription
            alert('Thank you for subscribing to our newsletter!');
            emailInput.value = '';
        }
    });

    // Add to cart functionality
    const addToCartBtns = document.querySelectorAll('.add-to-cart-btn');
    const cartCount = document.querySelector('.cart-count');
    let currentCartCount = 3; // Starting with 3 items as shown in design

    addToCartBtns.forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            
            // Animation effect
            btn.style.transform = 'scale(0.95)';
            btn.textContent = 'Added!';
            btn.style.background = '#059669';
            
            // Update cart count
            currentCartCount++;
            cartCount.textContent = currentCartCount;
            
            // Reset button after 1 second
            setTimeout(() => {
                btn.style.transform = 'scale(1)';
                btn.textContent = 'Add to Cart';
                btn.style.background = '#2563eb';
            }, 1000);
        });
    });

    // Quick add to cart functionality
    const quickAddBtns = document.querySelectorAll('.quick-add-btn');
    
    quickAddBtns.forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            
            // Animation effect
            btn.style.transform = 'scale(1.2)';
            
            // Update cart count
            currentCartCount++;
            cartCount.textContent = currentCartCount;
            
            // Show feedback
            const originalColor = btn.style.background;
            btn.style.background = '#059669';
            
            setTimeout(() => {
                btn.style.transform = 'scale(1)';
                btn.style.background = originalColor;
            }, 300);
        });
    });

    // Wishlist functionality
    const wishlistBtns = document.querySelectorAll('.wishlist-btn');
    
    wishlistBtns.forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            
            const svg = btn.querySelector('svg path');
            const isLiked = btn.classList.contains('liked');
            
            if (isLiked) {
                btn.classList.remove('liked');
                svg.setAttribute('fill', 'none');
                btn.style.color = '#6b7280';
            } else {
                btn.classList.add('liked');
                svg.setAttribute('fill', 'currentColor');
                btn.style.color = '#dc2626';
            }
            
            // Animation effect
            btn.style.transform = 'scale(1.2)';
            setTimeout(() => {
                btn.style.transform = 'scale(1)';
            }, 200);
        });
    });

    // Search functionality
    const searchInputs = document.querySelectorAll('.search-input');
    
    searchInputs.forEach(input => {
        input.addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                e.preventDefault();
                const searchTerm = input.value.trim();
                if (searchTerm) {
                    alert(`Searching for: "${searchTerm}"`);
                    // Here you would typically redirect to search results page
                    // window.location.href = `/search?q=${encodeURIComponent(searchTerm)}`;
                }
            }
        });
    });

    // Category card hover effects
    const categoryCards = document.querySelectorAll('.category-card');
    
    categoryCards.forEach(card => {
        card.addEventListener('click', function() {
            const categoryName = card.querySelector('.category-title').textContent;
            alert(`Navigating to ${categoryName} category`);
            // Here you would typically redirect to category page
            // window.location.href = `/category/${categoryName.toLowerCase().replace(/[^a-z0-9]/g, '-')}`;
        });
    });

    // Smooth scroll for anchor links
    const anchorLinks = document.querySelectorAll('a[href^="#"]');
    
    anchorLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const targetId = link.getAttribute('href').substring(1);
            const targetElement = document.getElementById(targetId);
            
            if (targetElement) {
                targetElement.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    // Intersection Observer for fade-in animations
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('fade-in');
            }
        });
    }, observerOptions);

    // Observe elements for animation
    const animateElements = document.querySelectorAll('.category-card, .product-card, .newsletter-content');
    animateElements.forEach(el => observer.observe(el));

    // Handle window resize
    let resizeTimer;
    window.addEventListener('resize', function() {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(function() {
            // Close mobile menu on resize to desktop
            if (window.innerWidth >= 768) {
                mobileMenu.classList.remove('show');
                menuIcon.style.display = 'block';
                closeIcon.style.display = 'none';
            }
        }, 250);
    });

    // Hero buttons functionality
    const heroButtons = document.querySelectorAll('.hero-buttons .btn');
    
    heroButtons.forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            
            if (btn.textContent.trim() === 'Shop Now') {
                alert('Redirecting to shop page...');
                // window.location.href = '/shop';
            } else if (btn.textContent.trim() === 'View Collection') {
                alert('Redirecting to collection page...');
                // window.location.href = '/collection';
            }
        });
    });

    // View All Products button
    const viewAllBtn = document.querySelector('.view-all-container .btn');
    if (viewAllBtn) {
        viewAllBtn.addEventListener('click', function(e) {
            e.preventDefault();
            alert('Redirecting to all products page...');
            // window.location.href = '/products';
        });
    }

    // Footer social links
    const socialLinks = document.querySelectorAll('.social-link');
    
    socialLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const platform = this.getAttribute('aria-label') || 'social media';
            alert(`Opening ${platform} profile...`);
        });
    });

    // Contact info click handlers
    const phoneLink = document.querySelector('.contact-item:nth-child(2)');
    const emailLink = document.querySelector('.contact-item:nth-child(3)');
    
    if (phoneLink) {
        phoneLink.style.cursor = 'pointer';
        phoneLink.addEventListener('click', function() {
            window.location.href = 'tel:+15551234567';
        });
    }
    
    if (emailLink) {
        emailLink.style.cursor = 'pointer';
        emailLink.addEventListener('click', function() {
            window.location.href = 'mailto:support@shoplux.com';
        });
    }

    console.log('ShopLux ecommerce site loaded successfully!');
});

// Utility functions
function formatPrice(price) {
    return `$${price.toFixed(2)}`;
}

function debounce(func, wait) {
    let timeout;
    return function executedFunction(...args) {
        const later = () => {
            clearTimeout(timeout);
            func(...args);
        };
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
    };
}

// Export for potential use in other scripts
window.ShopLux = {
    formatPrice,
    debounce
};