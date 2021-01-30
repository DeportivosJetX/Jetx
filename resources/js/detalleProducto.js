const stock = document.getElementById('producto-stock');
const openGuia = document.getElementById('guiaTallas');
const modalGuia = document.getElementById('modal-guia');
const closeModal = document.getElementById('close-modal-guia');
const selecTalla = document.getElementById('product-select');
const listItems = document.querySelectorAll('.talla-lista__item');
// const cantAdd = document.querySelector('.cantidad-agregar');
const noDisponible = document.getElementById('no-stock');
// const cantidadUp = document.getElementById('cantida-up');
// const cantidadDown = document.getElementById('cantida-down');
// const contactanos = document.getElementById('contactanos');
// const inputCantidad = document.getElementById('cantidad');
const showTalla = document.getElementById('selected-talla');
//abrir modal de guía de tallas
openGuia.addEventListener('click', () => {
    modalGuia.classList.toggle('active');
})
closeModal.addEventListener('click', () => {
    modalGuia.classList.toggle('active');
})

// document.addEventListener('click', (e) => {
//     console.log(e)
//     console.log(e.target.parentNode)
// })


listItems.forEach(item => {
    item.addEventListener('click', () => {
        if (!item.classList.contains('active')) {
            listItems.forEach(list => {
                list.classList.remove('active');
            })
            let estado = item.getAttribute('data-cantidad');
            if (estado == 0) {
                // cantAdd.classList.add('hidden');
                stock.classList.add('sin-stock');
                stock.classList.remove('con-stock');
                noDisponible.classList.add('active');
                // contactanos.classList.add('active');
                // inputCantidad.max = item.getAttribute('data-cantidad');
                // inputCantidad.value = 0;
                showTalla.textContent = item.getAttribute('data-text');
            } else if (estado > 0) {
                // cantAdd.classList.remove('hidden');
                // contactanos.classList.remove('active');
                noDisponible.classList.remove('active');
                stock.classList.remove('sin-stock');
                stock.classList.add('con-stock');
                // inputCantidad.max = item.getAttribute('data-cantidad');
                // inputCantidad.value = 1;
                showTalla.textContent = item.getAttribute('data-text');
            }
            selecTalla.value = item.getAttribute('data-value');
            item.classList.add('active');
        }
    })
})

// cantidadUp.addEventListener('click', (e) => {
//     e.preventDefault();
//     if (inputCantidad.value != inputCantidad.max) {
//         inputCantidad.value = parseInt(inputCantidad.value) + 1;
//     }
// })
// cantidadDown.addEventListener('click', (e) => {
//     e.preventDefault();
//     if (inputCantidad.value != inputCantidad.min) {
//         inputCantidad.value = parseInt(inputCantidad.value) - 1;
//     }
// })
