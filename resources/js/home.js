/* menu */
let iconoMenu = document.querySelector('.menu-movil');
let menuResponsive = document.getElementById('contenedor-menu-main');
let productos = document.getElementById('item-producto');
let coleccion = document.getElementById('item-coleccion')
let menuCat = document.getElementById('menu-categoria');
let menuCol = document.getElementById('menu-coleccion');
let iconoCerrarMenu = document.getElementById('close-menu-main');
iconoMenu.addEventListener('click', () => {
    menuResponsive.classList.add('menu-activo');
})
iconoCerrarMenu.addEventListener('click', () => {
    menuResponsive.classList.remove('menu-activo');
})

productos.addEventListener('click', () => {
    menuCat.classList.add('open-menu-categoria');
})

document.querySelector('.menu-categoria__volver').addEventListener('click', () => {
    menuCat.classList.remove('open-menu-categoria');
})

coleccion.addEventListener('click', () => {
    menuCol.classList.add('open-menu-categoria');
})

document.querySelector('.menu-col__volver').addEventListener('click', () => {
    menuCol.classList.remove('open-menu-categoria');
})

/* Carrito */
let iconoCarro = document.getElementById('link-carrito');
let menuCarro = document.getElementById('contenedor-carrito');
let cerrarCarro = document.getElementById('close-carrito');
iconoCarro.addEventListener('click', (e) => {
    e.preventDefault();
    menuCarro.classList.add('open-menu-categoria');
})
cerrarCarro.addEventListener('click', () => {
    menuCarro.classList.remove('open-menu-categoria');
})

/*Busqueda*/
let cerarBusqueda = document.getElementById('busqueda__close');
let busqueda = document.getElementById('busqueda');
let buscar = document.getElementById('link-buscar');
buscar.addEventListener('click', (e) => {
    e.preventDefault();
    busqueda.classList.add('open-menu-categoria')
})
cerarBusqueda.addEventListener('click', () => {
    busqueda.classList.remove('open-menu-categoria')
})

/* Ir arriba */
const arriba = document.getElementById('ir-arriba');
const obtener_pixeles_inicio = () => document.documentElement.scrollTop || document.body.scrollTop;
const ir_arriba = () => {
    if (obtener_pixeles_inicio() > 0) {
        requestAnimationFrame(ir_arriba);
        scrollTo(0, obtener_pixeles_inicio() - (obtener_pixeles_inicio() / 10));
        indicarScroll();
    }
}
const indicarScroll = () => {
    if (obtener_pixeles_inicio() > 100) {
        arriba.classList.add('open');
    } else {
        arriba.classList.remove('open')
    }
}

arriba.addEventListener('click', ir_arriba);

//addEventListener('DOMContentLoaded', ir_arriba);
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