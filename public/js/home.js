/******/ (() => { // webpackBootstrap
/*!******************************!*\
  !*** ./resources/js/home.js ***!
  \******************************/
/* menu */
var iconoMenu = document.querySelector('.menu-movil');
var menuResponsive = document.getElementById('contenedor-menu-main');
var productos = document.getElementById('item-producto');
var coleccion = document.getElementById('item-coleccion');
var menuCat = document.getElementById('menu-categoria');
var menuCol = document.getElementById('menu-coleccion');
var iconoCerrarMenu = document.getElementById('close-menu-main');
iconoMenu.addEventListener('click', function () {
  menuResponsive.classList.add('menu-activo');
});
iconoCerrarMenu.addEventListener('click', function () {
  menuResponsive.classList.remove('menu-activo');
});
productos.addEventListener('click', function () {
  menuCat.classList.add('open-menu-categoria');
});
document.querySelector('.menu-categoria__volver').addEventListener('click', function () {
  menuCat.classList.remove('open-menu-categoria');
});
coleccion.addEventListener('click', function () {
  menuCol.classList.add('open-menu-categoria');
});
document.querySelector('.menu-col__volver').addEventListener('click', function () {
  menuCol.classList.remove('open-menu-categoria');
});
/* Carrito */

var iconoCarro = document.getElementById('link-carrito');
var menuCarro = document.getElementById('contenedor-carrito');
var cerrarCarro = document.getElementById('close-carrito');
iconoCarro.addEventListener('click', function (e) {
  e.preventDefault();
  menuCarro.classList.add('open-menu-categoria');
});
cerrarCarro.addEventListener('click', function () {
  menuCarro.classList.remove('open-menu-categoria');
});
/*Busqueda*/

var cerarBusqueda = document.getElementById('busqueda__close');
var busqueda = document.getElementById('busqueda');
var buscar = document.getElementById('link-buscar');
buscar.addEventListener('click', function (e) {
  e.preventDefault();
  busqueda.classList.add('open-menu-categoria');
});
cerarBusqueda.addEventListener('click', function () {
  busqueda.classList.remove('open-menu-categoria');
});
/* Ir arriba */

var arriba = document.getElementById('ir-arriba');

var obtener_pixeles_inicio = function obtener_pixeles_inicio() {
  return document.documentElement.scrollTop || document.body.scrollTop;
};

var ir_arriba = function ir_arriba() {
  if (obtener_pixeles_inicio() > 0) {
    requestAnimationFrame(ir_arriba);
    scrollTo(0, obtener_pixeles_inicio() - obtener_pixeles_inicio() / 10);
    indicarScroll();
  }
};

var indicarScroll = function indicarScroll() {
  if (obtener_pixeles_inicio() > 100) {
    arriba.classList.add('open');
  } else {
    arriba.classList.remove('open');
  }
};

arriba.addEventListener('click', ir_arriba); //addEventListener('DOMContentLoaded', ir_arriba);

window.addEventListener('scroll', indicarScroll);
/* iniciar sesion */
// const userIcono = document.querySelectorAll('.iniciar-sesion');
// const iniciarSesion = document.querySelector('.contenedor-inicio-sesion');
// const cerrInicioSesion = document.querySelector('.cerrar-inicio-sesion');
// userIcono.forEach(elemento => {
//     elemento.addEventListener('click', (e) => {
//         e.preventDefault();
//         menuResponsive.classList.remove('menu-activo');
//         iniciarSesion.classList.add('abrir-iniciar-sesion');
//     })
// })
// cerrInicioSesion.addEventListener('click', (e) => {
//     e.preventDefault();
//     iniciarSesion.classList.remove('abrir-iniciar-sesion');
// })
/******/ })()
;