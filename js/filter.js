document.addEventListener('DOMContentLoaded', function () {
    const searchInput = document.getElementById('productSearch');
    const priceRange = document.getElementById('priceRange');
    const priceValue = document.getElementById('priceValue');
    const categoryCheckboxes = document.querySelectorAll('.categoryFilter');
    const sortSelect = document.getElementById('sortOrder');
    
    // Live update price value display
    priceRange.addEventListener('input', function () {
        priceValue.textContent = this.value; // Update displayed value
        filterProducts(); // Call filter function
    });

    // Filter on search input
    searchInput.addEventListener('input', function () {
        filterProducts(); // Call filter function when user types
    });

    // Filter on category change
    categoryCheckboxes.forEach(checkbox => {
        checkbox.addEventListener('change', filterProducts); // Call filter function when category selection changes
    });

    // Filter on sort order change
    sortSelect.addEventListener('change', filterProducts); // Call filter function when sort order changes

    // Core filter function to send filter data to PHP
    function filterProducts() {
        const search = searchInput.value.trim();
        const price = priceRange.value;
        const sort = sortSelect.value;

        // Collect selected categories
        const selectedCategories = Array.from(categoryCheckboxes)
            .filter(cb => cb.checked)
            .map(cb => cb.value);

        // Create POST request to filter.php with selected filters
        fetch('filter.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
            body: new URLSearchParams({
                search: search,
                price: price,
                sort: sort,
                categories: JSON.stringify(selectedCategories)
            })
        })
        .then(response => response.text()) // Handle the response (HTML)
        .then(data => {
            // Inject filtered product data into the product container
            document.getElementById('productContainer').innerHTML = data;
        })
        .catch(error => {
            console.error('Error fetching filtered products:', error);
        });
    }

    // Initial load (optional, can be removed if unnecessary)
    filterProducts();
});
