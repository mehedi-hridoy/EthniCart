  document.addEventListener('DOMContentLoaded', function() {
            const mobileSearchToggle = document.querySelector('.md\\:hidden .fa-magnifying-glass').parentElement;
            const mobileSearchBar = document.querySelector('.md\\:hidden.bg-white.border-t');
            
            let isSearchVisible = true;
            
            mobileSearchToggle.addEventListener('click', function() {
                isSearchVisible = !isSearchVisible;
                mobileSearchBar.style.display = isSearchVisible ? 'block' : 'none';
            });
        });