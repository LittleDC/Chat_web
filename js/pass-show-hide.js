const pswordField = document.querySelector('.form input[type="password"]')
toggleBtn = document.querySelector('.form .field i')

toggleBtn.onclick = () => {
    if (pswordField.type == "password") {
        pswordField.type = 'text'
        toggleBtn.classList.add('active')
    } else {
        pswordField.type = 'password'
        toggleBtn.classList.remove('active')
    }
}