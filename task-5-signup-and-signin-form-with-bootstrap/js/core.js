const contentContainer = document.getElementById('content-container')

if (window.innerWidth <= 988) {
    contentContainer.classList.remove('w-25')
    contentContainer.classList.add('w-50')
}

window.addEventListener('resize', () => {
    if (window.innerWidth <= 988) {
        if (contentContainer.classList.contains('w-25')) {
            contentContainer.classList.remove('w-25')
            contentContainer.classList.add('w-50')
        }
    } else {
        if (contentContainer.classList.contains('w-50')) {
            contentContainer.classList.remove('w-50')
            contentContainer.classList.add('w-25')
        }
    }
})