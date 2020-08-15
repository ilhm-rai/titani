let visible = document.querySelectorAll('.visible');
console.log(visible);
visible.forEach(e => {
    e.addEventListener('click', () => {
        e.classList.toggle('fa-eye');
        e.classList.toggle('fa-eye-slash');
        let password = e.previousElementSibling
        if (password.getAttribute('type') == 'password') {
            password.setAttribute('type', 'text');
        } else {
            password.setAttribute('type', 'password');
        }

    });
});