
const body = document.querySelector('body');
const toggleDark = document.querySelector('.toggle-night input');


if(localStorage.getItem('theme') === 'dark'){
    body.classList.add('dark');
    toggleDark.checked = true;
} else {
    body.classList.remove('dark');
    toggleDark.checked = false;
}

toggleDark.addEventListener('click', () => {
    body.classList.toggle('dark');

    if(body.classList[0] == 'dark'){
        localStorage.setItem('theme', 'dark');
        toggleDark.checked = true;
    } else {
        localStorage.setItem('theme', 'light');
        toggleDark.checked = false;
    }

});
