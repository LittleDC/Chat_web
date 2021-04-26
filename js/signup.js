// console.log('Hello');
const form = document.querySelector('.signup form')
const continueBtn = form.querySelector('.button input')

form.onsubmit = e => {
    e.preventDefault()
}

continueBtn.onclick = () => {
    console.log('hello');
}