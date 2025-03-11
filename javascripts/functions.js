document.addEventListener('DOMContentLoaded', () => {
    // Search and Filter Functionality
    const searchInput = document.querySelector('.search-bar input');
    const filterSelect = document.querySelector('.filter-options select');
    const productItems = document.querySelectorAll('.product-item');

    function filterProducts() {
        const searchText = searchInput.value.toLowerCase();
        const selectedCategory = filterSelect.value.toLowerCase();

        productItems.forEach(item => {
            const title = item.querySelector('h3').textContent.toLowerCase();
            const category = item.getAttribute('data-category').toLowerCase();

            const matchesSearch = title.includes(searchText);
            const matchesCategory = selectedCategory === 'all' || category === selectedCategory;

            if (matchesSearch && matchesCategory) {
                item.style.display = 'block';
            } else {
                item.style.display = 'none';
            }
        });
    }

    searchInput.addEventListener('input', filterProducts);
    filterSelect.addEventListener('change', filterProducts);


    // Form Validation
    const contactForm = document.querySelector('contact-form form');
    contactForm.addEventListener('submit', (event) => {
        const name = contactForm.querySelector('input[name="name"]').value.trim();
        const email = contactForm.querySelector('input[name="email"]').value.trim();
        const message = contactForm.querySelector('textarea[name="message"]').value.trim();

        if (!name || !email || !message) {
            alert('All fields are required!');
            event.preventDefault();
        }
    });
});

    // Wait for DOM to load
document.addEventListener('DOMContentLoaded', () => {

    // 1. Homepage Interactions
    // Show Featured Products Carousel
    let featuredProducts = document.querySelectorAll('featured-product');
    let currentIndex = 0;

    setInterval(() => {
        featuredProducts[currentIndex].classList.remove('active');
        currentIndex = (currentIndex + 1) % featuredProducts.length;
        featuredProducts[currentIndex].classList.add('active');
    }, 3000);

    // 2. Products Page
    // Filter products by category
    const categoryButtons = document.querySelectorAll('.category-button');
    const products = document.querySelectorAll('category-item');

    categoryButtons.forEach(button => {
        button.addEventListener('click', () => {
            const category = button.dataset.category;

            products.forEach(product => {
                if (category === 'all' || product.classList.contains(category)) {
                    product.style.display = 'block';
                } else {
                    product.style.display = 'none';
                }
            });
        });
    });

    // Show product details when clicked
    const productItems = document.querySelectorAll('.product-item');
    const productDetailModal = document.getElementById('product-detail-modal');
    const productDetailContent = document.getElementById('product-detail-content');

    productItems.forEach(item => {
        item.addEventListener('click', () => {
            const productName = item.querySelector('.product-name').innerText;
            const productDescription = item.querySelector('.product-description').innerText;
            const productPrice = item.querySelector('.product-price').innerText;

            productDetailContent.innerHTML = `
                <h2>${productName}</h2>
                <p>${productDescription}</p>
                <strong>${productPrice}</strong>
            `;
            productDetailModal.style.display = 'block';
        });
    });

    // 4. Contact Us Page
    // Google Map Integration (Assuming map container with id 'map')
    function initMap() {
        const storeLocation = { lat: -34.397, lng: 150.644 }; // Replace with actual coordinates
        const map = new google.maps.Map(document.getElementById('map'), {
            zoom: 15,
            center: storeLocation,
        });
        const marker = new google.maps.Marker({
            position: storeLocation,
            map: map,
        });
    }

    // 6. Customer Reviews
    // Submit a new review
    const reviewForm = document.getElementById('review-form');
    const reviewList = document.getElementById('review-list');

    reviewForm.addEventListener('submit', (event) => {
        event.preventDefault();
        const reviewText = document.getElementById('review-text').value;
        const reviewItem = document.createElement('li');
        reviewItem.innerText = reviewText;
        reviewList.appendChild(reviewItem);
        reviewForm.reset();
    });

    // 8. Footer - Newsletter Signup
    const newsletterForm = document.getElementById('newsletter-email');
    newsletterForm.addEventListener('submit', (event) => {
        alert('Thank you for subscribing to our newsletter!');
        event.preventDefault();
        newsletterForm.reset();
    });
});
