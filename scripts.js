// Smooth scroll to sections
document.querySelectorAll('header ul li a').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const targetSection = document.querySelector(this.getAttribute('href'));
        if (targetSection) {
            targetSection.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }
    });
});

// Form validation for the Contact Form
document.querySelector('.contact-form form').addEventListener('submit', function (e) {
    const name = document.getElementById('name').value.trim();
    const email = document.getElementById('email').value.trim();
    const message = document.getElementById('message').value.trim();

    if (!name || !email || !message) {
        e.preventDefault(); // Prevent form submission
        alert('Please fill in all fields.');
    } else if (!validateEmail(email)) {
        e.preventDefault(); // Prevent form submission
        alert('Please enter a valid email address.');
    }
});

// Email validation helper function
function validateEmail(email) {
    const re = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
    return re.test(String(email).toLowerCase());
}
