// Frontend Validation for Registration
document.getElementById('registration-form').addEventListener('submit', function (e) {
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;

    if (!email.includes('@')) {
        e.preventDefault();
        alert('Invalid email format.');
        return;
    }

    if (password.length < 6) {
        e.preventDefault();
        alert('Password must be at least 6 characters.');
    }
});
