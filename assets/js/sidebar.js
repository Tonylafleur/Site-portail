document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.social-icon').forEach(icon => {
        icon.addEventListener('click', () => {
            icon.style.transform = 'translateY(-5px) scale(0.9)';
            setTimeout(() => {
                icon.style.transform = 'translateY(-5px)';
            }, 300);
        });
    });
});
