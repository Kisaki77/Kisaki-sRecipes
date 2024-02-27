window.onload = function () {
    const menu_btn = document.querySelector('.hamburger');
    const mobile_menu = document.querySelector('.mobile-nav');
    const body = document.body;

    menu_btn.addEventListener('click', function () {
        menu_btn.classList.toggle('is-active');
        mobile_menu.classList.toggle('is-active');

        // Add or remove the disable-scroll class on the body
        body.classList.toggle('disable-scroll');

        // If the menu is open, prevent scrolling on the body
        if (body.classList.contains('disable-scroll')) {
            body.style.overflow = 'hidden';
        } else {
            body.style.overflow = ''; // Remove the style attribute to re-enable scrolling
        }
    });

    document.getElementById('searchIcon').addEventListener('click', function () {
        // Use AJAX or Fetch API to request search results from the server
        fetch('search.php')
            .then(response => {
                if (!response.ok) {
                    throw new Error(`HTTP error! Status: ${response.status}`);
                }
                return response.json();
            })
            .then(results => {
                // Clear any previous search results
                const searchResultsContainer = document.getElementById('searchResults');
                searchResultsContainer.innerHTML = '';
    
                // Check if there are results
                if (results.length > 0) {
                    // Loop through the results and create HTML elements
                    results.forEach(result => {
                        const resultContainer = document.createElement('div');
                        resultContainer.classList.add('result-container');
    
                        const titleElement = document.createElement('h3');
                        titleElement.textContent = result.title;
    
                        const descriptionElement = document.createElement('p');
                        descriptionElement.textContent = result.description;
    
                        // Append title and description to the result container
                        resultContainer.appendChild(titleElement);
                        resultContainer.appendChild(descriptionElement);
    
                        // Append the result container to the search results section
                        searchResultsContainer.appendChild(resultContainer);
                    });
                } else {
                    // Display a message if there are no results
                    searchResultsContainer.innerHTML = '<p>No results found.</p>';
                }
            })
            .catch(error => console.error('Error fetching and parsing search results:', error));
    });
    
    

    document.addEventListener('DOMContentLoaded', function () {
        var headerContainer = document.getElementById('header-container');
    
        window.addEventListener('scroll', function () {
            console.log('Scrolling...');
            if (window.scrollY > 0) {
                headerContainer.classList.add('scrolled');
            } else {
                headerContainer.classList.remove('scrolled');
            }
        });
    });    
    
}




