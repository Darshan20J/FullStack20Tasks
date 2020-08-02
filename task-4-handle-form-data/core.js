const reset = document.getElementById('reset');
const form = document.getElementById('sign-up')


// Reset the whole form by reset() method associated with in proto of form
reset.addEventListener('click', () => {
    form.reset()
})


// These are related to Visual Appearance of th form
// for the first time setting-up sign-up form width
if (window.innerWidth <= 988) {
    form.classList.remove('w-50')
    form.classList.add('w-70')
}

window.addEventListener('resize', () => {
    if (window.innerWidth <= 988) {
        if (form.classList.contains('w-50')) {
            form.classList.remove('w-50')
            form.classList.add('w-70')
        }
    } else {
        if (form.classList.contains('w-70')) {
            form.classList.remove('w-70')
            form.classList.add('w-50')
        }
    }
})


