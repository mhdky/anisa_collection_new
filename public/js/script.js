const span1 = document.querySelector('.span1');
const span2 = document.querySelector('.span2');
const span3 = document.querySelector('.span3');
const burgerButton = document.querySelector('.burger-button');
const listMobile = document.querySelector('.list-mobile');
burgerButton.addEventListener('click', () => {
    span1.classList.toggle('absolute');
    span1.classList.toggle('top-2')
    span1.classList.toggle('rotate-45');

    span2.classList.toggle('hidden');

    span3.classList.toggle('absolute');
    span3.classList.toggle('top-2')
    span3.classList.toggle('-rotate-45');

    listMobile.classList.toggle('-translate-y-0');
    listMobile.classList.toggle('z-30');
    listMobile.style.transition = '0.2s';
});

const searchDesktop = document.querySelector('.search-desktop');
const formSearchDesktop = document.querySelector('.form-search-desktop');
const iconSearch = document.querySelector('.icon-search');
const closeformSearch = document.querySelector('.close-form-search');

searchDesktop.addEventListener('click', () => {
    formSearchDesktop.style.display = 'block';
    iconSearch.style.color = '#DF9903';
    closeformSearch.style.display = 'block';

    function autofocusSearch() {
        document.getElementById('input-search').focus();
    }
    setTimeout(() => {
        autofocusSearch()
    }, 500);
});
closeformSearch.addEventListener('click', () => {
    formSearchDesktop.style.display = 'none';
    iconSearch.style.color = '#1E1E1E';
    closeformSearch.style.display = 'none';
})