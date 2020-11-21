var titulo = document.getElementById('titulo');
var descripcion = document.getElementById('descripcion');

document.agregar_pelicula.addEventListener("submit", validar);
 
function validar(evObject) {
    evObject.preventDefault();
    var validacionOK = true;

    if (titulo.value.length < 3 || titulo.value.length > 30) {
        alert('Usted debe ingresar un Titulo que contenga entre 3 a 30 caracteres');
        validacionOK = false;
    
    } else if (descripcion.value.length < 5 || descripcion.value.length > 200) {
        alert('Usted debe ingresar una Descripcion que contenga entre 5 a 2000 caracteres');
        validacionOK = false;
    }

    if ( validacionOK == true ) { formulario.submit(); }

}