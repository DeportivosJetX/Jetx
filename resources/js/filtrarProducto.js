const filtroProducto = document.getElementById('content__orderBy');
const listaFiltro = document.getElementById('list-orderBy');
const listaItem = document.querySelectorAll('.list-orderBy__item');
const orderBy = document.getElementById('orderBy');
const contOrderBy = document.getElementById('cont-orderBy');
document.addEventListener('DOMContentLoaded', () => {
    const active = document.querySelector('.list-orderBy__item.active');
    orderBy.textContent = active.getAttribute('data-filtro');
})
filtroProducto.addEventListener('click', () => {
    listaFiltro.classList.toggle('active');
})
listaItem.forEach(item => {
    item.addEventListener('click', () => {
        orderBy.textContent = item.getAttribute('data-filtro');
    })
})
document.addEventListener('click', (e) => {
    //console.log(e);
    //console.log(filtroProducto == e.target);
    if (e.target != filtroProducto && e.target != orderBy && e.target != contOrderBy) {
        listaFiltro.classList.remove('active');
    }
})