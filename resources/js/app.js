import './bootstrap';
import Dropzone from 'dropzone';

//importamos dropzone 
//buscamos elementos con la clase de dropzone, lo ponemos en falso
//para generar las rutas y estilos a nuestro componente
Dropzone.autoDiscover = false;


//instanciamos dropzone y lo personalizamos 
const dropzone = new Dropzone('#dropzone', {
    dictDefaultMessage: 'Carga tu imagen aquí',
    acceptedFiles: ".png, .jpg, .jpeg,  .gif",
    addRemoveLinks: true,
    //me permite remover archivos
    dictRemoveFile: 'Eliminar archivos',
    maxFiles: 1,
    uploadMultiple: false,

    init: function () {
        if (document.querySelector('[name = "imagen"]').value.trim()) {
            const imagenPublicada = {};
            imagenPublicada.size = 2222;
            imagenPublicada.name = document.querySelector('[name = "imagen"]').value;
            this.options.addedfile.call(this, imagenPublicada);
            this.options.thumbnail.call(this, imagenPublicada, '/uploads/${imagenPublicada.name}');
            imagenPublicada.previewElement.classList.add("dz-success", "dz-complete");

        }
    },
});

dropzone.on("success", function (file, response) {
    document.querySelector('[name = "imagen"]').value = response.imagen;

});

dropzone.on("remove", function (file, message) {
    document.querySelector('[name = "imagen"]').value = "";

});
