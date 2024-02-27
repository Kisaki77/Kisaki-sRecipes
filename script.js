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




