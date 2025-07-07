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

