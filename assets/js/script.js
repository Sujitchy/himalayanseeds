document.addEventListener('DOMContentLoaded', function() {
    const mainNav = document.querySelector('.main-nav');
    if (mainNav) {
        // Get the initial offset of the navbar from the top of the page
        const stickyOffset = mainNav.offsetTop;

        function handleScroll() {
            if (window.scrollY >= stickyOffset) {
                mainNav.classList.add('sticky-nav');
            } else {
                mainNav.classList.remove('sticky-nav');
            }
        }

        // Attach the scroll event listener
        window.addEventListener('scroll', handleScroll);

        // Call it once on load to check initial position
        handleScroll();
    }
});