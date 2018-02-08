$(document).ready(function () {
    $('#successSignup').on('click', function () {
        swal({
            title: 'You are almost Ready!',
            text: 'Check your Inbox to complete your registration.',
            type: 'success',
            confirmButtonText: 'Cool'
        })
    })
});

$(document).ready(function () {
    $('#successSignupClient').on('click', function () {
        swal({
            title: 'You are almost Ready!',
            text: 'Check your inbox to validate your account.',
            type: 'success',
            confirmButtonText: 'Cool'
        })
    })
});

$(document).ready(function () {
    $('#successRecovery').on('click', function () {
        swal({
            title: 'Check your inbox',
            text: 'We send you instructions to recover your password.',
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
