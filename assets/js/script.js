const url = document.getElementById('url');
const copiar = document.getElementById('copiar');

copiar.addEventListener('click', () => {
    navigator.clipboard.writeText(url.value);
});