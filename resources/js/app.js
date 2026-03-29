import './bootstrap';

// Snackbar auto-hide
const snackbar = document.getElementById('snackbar');
if (snackbar) {
    setTimeout(() => {
        snackbar.style.display = 'none';
    }, 3000);
}

document.addEventListener('DOMContentLoaded', () => {
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('active');
            } else {
                entry.target.classList.remove('active');
            }
        });
    }, { threshold: 0.1 });

    document.querySelectorAll('section').forEach(section => {
        section.classList.add('reveal');
        observer.observe(section);
    });
});
