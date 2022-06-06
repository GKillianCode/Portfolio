
const colors = document.querySelector('.input-colors');

const color = sessionStorage.getItem('mainColor');

if(typeof(color)!= null){
    document.body.style.setProperty('--color-primary', color);
    document.body.style.setProperty('--color-secondary', color);
}

colors.addEventListener('change', () => {
    document.body.style.setProperty('--color-primary', colors.value);
    document.body.style.setProperty('--color-secondary', colors.value);

    sessionStorage.setItem('mainColor', colors.value);
});