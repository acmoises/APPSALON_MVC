document.addEventListener('DOMContentLoaded', function() {
    iniciaeApp();
});

function iniciaeApp(){
    buscarPorFecha();
}

function buscarPorFecha(){
    const inputFecha = document.querySelector('#fecha');
    inputFecha.addEventListener('input', function(e) {

        const fechaSeleccionada = e.target.value;
        console.log(fechaSeleccionada);

        window.location = `?fecha=${fechaSeleccionada}`;
    });
}