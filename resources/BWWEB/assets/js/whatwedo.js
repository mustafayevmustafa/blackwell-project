        // Tab navigation functionality
        document.addEventListener('DOMContentLoaded', function() {
            const menuItems = document.querySelectorAll('.menu-item');
            
            menuItems.forEach(item => {
                item.addEventListener('click', function() {
                    // Remove active class from all menu items
                    menuItems.forEach(menuItem => {
                        menuItem.classList.remove('active');
                    });
                    
                    // Add active class to clicked menu item
                    this.classList.add('active');
                    
                    // Get tab id from data attribute
                    const tabId = this.getAttribute('data-tab');
                    
                    // Hide all tab contents
                    const tabContents = document.querySelectorAll('.whatwedo_tab_content');
                    tabContents.forEach(content => {
                        content.classList.remove('active');
                    });
                    
                    // Show selected tab content
                    document.getElementById(tabId).classList.add('active');
                });
            });
        });
   