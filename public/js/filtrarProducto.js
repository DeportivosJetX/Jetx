/******/ (() => { // webpackBootstrap
/*!*****************************************!*\
  !*** ./resources/js/filtrarProducto.js ***!
  \*****************************************/
var filtroProducto = document.getElementById('content__orderBy');
var listaFiltro = document.getElementById('list-orderBy');
var listaItem = document.querySelectorAll('.list-orderBy__item');
var orderBy = document.getElementById('orderBy');
var contOrderBy = document.getElementById('cont-orderBy');
document.addEventListener('DOMContentLoaded', function () {
  var active = document.querySelector('.list-orderBy__item.active');
  orderBy.textContent = active.getAttribute('data-filtro');
});
filtroProducto.addEventListener('click', function () {
  listaFiltro.classList.toggle('active');
});
listaItem.forEach(function (item) {
  item.addEventListener('click', function () {
    orderBy.textContent = item.getAttribute('data-filtro');
  });
});
document.addEventListener('click', function (e) {
  //console.log(e);
  //console.log(filtroProducto == e.target);
  if (e.target != filtroProducto && e.target != orderBy && e.target != contOrderBy) {
    listaFiltro.classList.remove('active');
  }
});
/******/ })()
;