/******/ (() => { // webpackBootstrap
/*!*****************************************!*\
  !*** ./resources/js/detalleProducto.js ***!
  \*****************************************/
var stock = document.getElementById('producto-stock');
var openGuia = document.getElementById('guiaTallas');
var modalGuia = document.getElementById('modal-guia');
var closeModal = document.getElementById('close-modal-guia');
var selecTalla = document.getElementById('product-select');
var listItems = document.querySelectorAll('.talla-lista__item');
var cantAdd = document.querySelector('.cantidad-agregar');
var noDisponible = document.getElementById('no-stock');
var cantidadUp = document.getElementById('cantida-up');
var cantidadDown = document.getElementById('cantida-down'); // const contactanos = document.getElementById('contactanos');

var inputCantidad = document.getElementById('cantidad');
var showTalla = document.getElementById('selected-talla'); //abrir modal de guía de tallas

openGuia.addEventListener('click', function () {
  modalGuia.classList.toggle('active');
});
closeModal.addEventListener('click', function () {
  modalGuia.classList.toggle('active');
}); // document.addEventListener('click', (e) => {
//     console.log(e)
//     console.log(e.target.parentNode)
// })

listItems.forEach(function (item) {
  item.addEventListener('click', function () {
    if (!item.classList.contains('active')) {
      listItems.forEach(function (list) {
        list.classList.remove('active');
      });
      var estado = item.getAttribute('data-cantidad');

      if (estado == 0) {
        cantAdd.classList.add('hidden');
        stock.classList.add('sin-stock');
        stock.classList.remove('con-stock');
        noDisponible.classList.add('active');
        contactanos.classList.add('active');
        inputCantidad.max = item.getAttribute('data-cantidad');
        inputCantidad.value = 0;
        showTalla.textContent = item.getAttribute('data-text');
      } else if (estado > 0) {
        cantAdd.classList.remove('hidden');
        contactanos.classList.remove('active');
        noDisponible.classList.remove('active');
        stock.classList.remove('sin-stock');
        stock.classList.add('con-stock');
        inputCantidad.max = item.getAttribute('data-cantidad');
        inputCantidad.value = 1;
        showTalla.textContent = item.getAttribute('data-text');
      }

      selecTalla.value = item.getAttribute('data-value');
      item.classList.add('active');
    }
  });
});
cantidadUp.addEventListener('click', function (e) {
  e.preventDefault();

  if (inputCantidad.value != inputCantidad.max) {
    inputCantidad.value = parseInt(inputCantidad.value) + 1;
  }
});
cantidadDown.addEventListener('click', function (e) {
  e.preventDefault();

  if (inputCantidad.value != inputCantidad.min) {
    inputCantidad.value = parseInt(inputCantidad.value) - 1;
  }
});
/******/ })()
;