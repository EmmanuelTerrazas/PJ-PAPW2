$(document).ready(function(){

    $('#form_registro').submit(function(event){

        var formData = {
            'nombre'              : $('#txt_nombre').val(),
            'apellido'            : $('#txt_apellido').val(),
            'correo'              : $('#txt_correo').val(),
            'pass'                : $('#txt_pass').val(),
            'passConfirma'        : $('#txt_passConfirma').val(),
            'fechaNacimiento'     : $('#txt_fechaNacimiento').val()
        };

        

        event.preventDefault();
    });
});