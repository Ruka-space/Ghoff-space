// Add touch support for hover effects
document.addEventListener('DOMContentLoaded', function() {
    if ('ontouchstart' in window) {
        // Add touch class to body
        document.body.classList.add('touch-device');
        
        // Handle dropdown menus on touch devices
        var dropdownParents = document.querySelectorAll('.navbar-nav > li');
        dropdownParents.forEach(function(parent) {
            parent.addEventListener('click', function(e) {
                if (this.querySelector('.sub-menu')) {
                    e.preventDefault();
                    this.classList.toggle('open');
                }
            });
        });
    }
});