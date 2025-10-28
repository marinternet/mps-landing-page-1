document.addEventListener("DOMContentLoaded", function() {
    // Select all navigation links
    const navLinks = document.querySelectorAll('.navbar-nav .nav-link');
    // Select the navbar collapse element
    const navbarCollapse = document.querySelector('.navbar-collapse');
    // Select the navbar toggler button
    const navToggler = document.querySelector('.navbar-toggler');

    navLinks.forEach(function(link) {
        link.addEventListener('click', function() {
            // Check if the navbar is currently expanded
            if (navbarCollapse.classList.contains('show')) {
                // Programmatically click the toggler button to close the navbar
                navToggler.click();
            }
        });
    });

    const servicesContainer = document.getElementById('services-container');
    if (servicesContainer) {
        const services = [
            {
                img: 'assets/images/ser1_11_11zon.webp',
                alt: 'Calibration',
                title: 'Calibration',
                description: 'We provide calibration services to ensure that your marine equipment is operating at its best.',
            },
            {
                img: 'assets/images/ser2_12_11zon.webp',
                alt: 'Maintenance',
                title: 'Maintenance',
                description: 'We provide maintenance services to keep your marine equipment running smoothly.',
            },
            {
                img: 'assets/images/ser3_13_11zon.webp',
                alt: 'Repair',
                title: 'Repair',
                description: 'We provide repair services to keep your marine equipment running smoothly.',
            },
            {
                img: 'assets/images/ser4_14_11zon.webp',
                alt: 'Installation',
                title: 'Installation',
                description: 'We provide installation services to ensure that your marine equipment is installed correctly.',
            },
            {
                img: 'assets/images/A1_1_11zon.webp',
                alt: 'Consultation',
                title: 'Consultation',
                description: 'We provide consultation services to help you choose the right marine equipment for your needs.',
            },
            {
                img: 'assets/images/ser0_10_11zon.webp',
                alt: 'Marine Instrumentation',
                title: 'Marine Instrumentation',
                description: 'We offer state-of-the-art marine instrumentation for navigation and control systems.',
            },
        ];

        services.forEach(service => {
            const serviceItem = document.createElement('div');
            serviceItem.className = 'col-lg-4 col-md-6 mb-4';

            serviceItem.innerHTML = `
                <div class="service-item p-4">
                    <img src="${service.img}" alt="${service.alt}" class="img-fluid mb-4">
                    <h5 class="text-white">${service.title}</h5>
                    <p class="text-white">${service.description}</p>
                </div>
            `;

            servicesContainer.appendChild(serviceItem);
        });
    }
});