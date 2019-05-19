//to uncheck the burger-menu icon when resizing 
window.addEventListener('resize', (e) => {
	if (window.matchMedia('(min-width: 768px)').matches) {
        document.getElementById('nav-toggle').checked = false;
    }
	});
