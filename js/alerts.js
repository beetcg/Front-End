$(document).ready(function () {
    $('#successSignup').on('click', function () {
        swal({
            title: 'Registro satisfactorio!',
            text: 'Revisa tu bandeja de entrada para que valides tu cuenta',
            type: 'success',
            confirmButtonText: 'Cool'
        })
    })
});

$(document).ready(function () {
    $('#successRecovery').on('click', function () {
        swal({
            title: 'Revisa tu bandeja de entrada',
            text: 'Te hemos enviado las isntrucciones para recuperar tu clave',
            type: 'success',
            confirmButtonText: 'Cool'
        })
    })
});

$(document).ready(function () {
    $('#successUpload').on('click', function () {
        swal({
            title: 'Registro completado!',
            text: 'En 48 horas tal tal..',
            type: 'success',
            confirmButtonText: 'Cool'
        })
    })
});
