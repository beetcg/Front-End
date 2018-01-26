$( document ).ready(function() {

	var route = {};
	$.getJSON("./../src/app_api/modules/client/routes.json", function(data) { route = data; });

	/** Create Form */
	$('#form_create').on('submit',function(e){
		e.preventDefault()

		var exp1 = validateName('#fname' ,$("#fname").val())
		var exp2 = validateName('#lname' ,$("#lname").val())
		var exp3 = validateEmail('#email' ,$("#email").val())
		var exp4 = validatePassword('#pass' ,$("#pass").val())
		var exp5 = validateTelephone('#tlf' ,$("#tlf").val())
		var exp6 = validateZip('#zip' ,$("#zip").val())

		if (exp1 && exp2 && exp3 && exp4  && exp5 && exp6) {
			$.ajax({
				beforeSend: function (){
					$('#sub').html('<i class="fa fa-spin fa-circle-o-notch" aria-hidden="true"></i>')
					$('#sub-btn').prop('disabled', true);
				},
				url: route.create.url,
				type: route.create.type,
				data: $('#form_create').serialize(),
				success: function (resp) {
					res = JSON.parse(resp)
					console.log(res)
					if (res.found) {
						alert('El usuario ya esta registrado')
					}
					if (res.save == true) {
						$('#form_create')[0].reset()
						$('#sub').html('Submit')
						alert('Registro exitoso \nMensaje provisional')
						window.location.href = "http://comiczone.hol.es/en/index";
					} else {
						$('#sub').html('<i style="color:red;" class="fa fa-exclamation-circle" aria-hidden="true"></i>')
					}
					$('#sub-btn').prop('disabled', false);
				},
				error: function (jqXHR,estado,error) {
					console.log('----------------------')
					console.log('Status: Entro en error')
					console.log(estado)
					console.log(error)
				},
				complete: function (jqXHR,estado) {
				}
			})
		}
	})

	/** Recovery Form */
	$('#recovery_form_client').on('submit',function(e){
		e.preventDefault()

		var exp = validateEmail('#emailRC' ,$("#emailRC").val())

		if (exp) {
			$.ajax({
				beforeSend: function (){
					$('#rsub').html('<i class="fa fa-spin fa-circle-o-notch" aria-hidden="true"></i>')
					$('#rec-btn').prop('disabled', true);
				},
				url: route.recovery.url,
				type: route.recovery.type,
				data: $('#recovery_form_client').serialize(),
				success: function (resp) {
					res = JSON.parse(resp)
					console.log(res)
					if (res.send == true) {
						$('#recovery_form_client')[0].reset()
						$('#rsub').html('EMAIL SENT')
						alert('Mensaje enviado')
					} else {
						$('#rsub').html('SEND EMAIL')
						alert('Ups! hubo un problema')
					}
					$('#rec-btn').prop('disabled', true);
				},
				error: function (jqXHR,estado,error) {
					console.log('----------------------')
					console.log('Status: Entro en error')
					console.log(estado)
					console.log(error)
				},
				complete: function (jqXHR,estado) {
				}
			})
		}
	})

	/** New Password */
	$('#new_pass_client').on('submit',function(e){
		e.preventDefault()

		var exp1 = validatePassword('#pass' ,$("#pass").val())
		var exp2 = validatePassword('#r_pass' ,$("#r_pass").val())
		var exp3 = validateSamePassword('#pass', '#r_pass')

		if (exp1 && exp2 && exp3) {
			$.ajax({
				beforeSend: function (){
					$('#sub').html('<i class="fa fa-spin fa-circle-o-notch" aria-hidden="true"></i>')
					$('#sub-btn').prop('disabled', true);
				},
				url: route.update_pass.url,
				type: route.update_pass.type,
				data: $('#new_pass_client').serialize(),
				success: function (resp) {
					res = JSON.parse(resp)
					console.log(res)
					if (res.update == true) {
						$('#new_pass_client')[0].reset()
						$('#sub').html('password changed')
						window.location.href = "http://comiczone.hol.es/en/login-client";
					} else {
						alert("Ups hubo un error")
						$('#sub').html('change password')
					}
					$('#sub-btn').prop('disabled', false);
				},
				error: function (jqXHR,estado,error) {
					console.log('----------------------')
					console.log('Status: Entro en error')
					console.log(estado)
					console.log(error)
				},
				complete: function (jqXHR,estado) {
				}
			})
		}
	})

	/** Login */
	$('#form_login_client').on('submit',function(e){
		e.preventDefault()

		var exp1 = validateEmail('#email_client' ,$("#email_client").val())
		var exp2 = validatePassword('#pass_client' ,$("#pass_client").val())

		if (exp1 && exp2) {
			$.ajax({
				beforeSend: function (){
					$('#sub').html('<i class="fa fa-spin fa-circle-o-notch" aria-hidden="true"></i>')
					$('#sub-btn').prop('disabled', true);
				},
				url: route.login.url,
				type: route.login.type,
				data: $('#form_login_client').serialize(),
				success: function (resp) {
					res = JSON.parse(resp)
					console.log(res)
					if (res.active) {
						Cookies.set('fname', res.data.fname , { expires: 7 });
						Cookies.set('lname', res.data.lname , { expires: 7 });
						Cookies.set('email', res.data.email , { expires: 7 });
						Cookies.set('type', 'client' , { expires: 7 });

						window.location.href = "http://comiczone.hol.es/en/index";
					} else {
						alert('Usuario y/o contraseña invalida \nVerifique que su cuenta este activa')
					}
					$('#sub').html('SIGN IN')
					$('#sub-btn').prop('disabled', false);
				},
				error: function (jqXHR,estado,error) {
					console.log('----------------------')
					console.log('Status: Entro en error')
					console.log(estado)
					console.log(error)
				}
			})
		}
	})

});


/** Validate Functions -----------------------*/

	/**
	* Only Names (First, middle and last)
	* like 'John' or 'Alfred-Man' or D'Maio
	* or others names but without numbers and
	* Others special characters
	*/
	function validateName(input, str){
		if ( str.match(/^[A-Za-z]([a-zA-Z]| |-|')+$/g) ) {
			$(input).addClass('is-valid')
			$(input).removeClass('is-invalid')

			return true
		} else {
			$(input).addClass('is-invalid')
			$(input).removeClass('is-valid')

			return false
		}
	}

	/**
	* Validate the email
	* As per RFC2822 standards.
	*/
	function validateEmail(input, str){
		if ( str.match(/[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/g) ) {
			$(input).addClass('is-valid')
			$(input).removeClass('is-invalid')

			return true
		} else {
			$(input).addClass('is-invalid')
			$(input).removeClass('is-valid')

			return false
		}
	}

	/**
	* length from 8 to 16 characters
	* MIN of 1 May / 1 number / 1 Symbol
	*/
	function validatePassword(input, str){
		if ( str.match(/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,16}$/g) ) {
			$(input).addClass('is-valid')
			$(input).removeClass('is-invalid')

			return true
		} else {
			$(input).addClass('is-invalid')
			$(input).removeClass('is-valid')

			return false
		}
	}

	/**
	* Accepts:
	* | +42 555.123.4567 | +1-(800)-123-4567 | +7 555 1234567   | +7(926)1234567  | (926) 1234567
	*	| +79261234567     | 926 1234567       | 9261234567       | 1234567         | 123-4567
	*	| 123-89-01        | 495 1234567       | 469 123 45 67    | 89261234567     | 8 (926) 1234567
	*	| 926.123.4567     | 415-555-1234      | 650-555-2345     | (416)555-3456   | 202 555 4567
	*	| 4035555678       | 1 416 555 9292    | 0424 620 0101    | 0424-620-0101   | 0424-620-01-01
	*	| (424) 620 0101   | (424)-620-0101    | +54 424 620 0101
	*/
	function validateTelephone(input, str){
		if ( str.match(/^\s*(?:\+?(\d{1,3}))?([-. (]*(\d{3})[-. )]*)?((\d{3})[-. ]*(\d{2,4})(?:[-.x ]*(\d+))?)\s*$/g) ) {
			$(input).addClass('is-valid')
			$(input).removeClass('is-invalid')

			return true
		} else {
			$(input).addClass('is-invalid')
			$(input).removeClass('is-valid')

			return false
		}
	}

	/**
	* Only 4 digits (Guatemala zip code example)
	* You can change this number
	*/
	function validateZip(input, str){
		if ( str.match(/\b(\d){4,5}\b/) ) {
			$(input).addClass('is-valid')
			$(input).removeClass('is-invalid')

			return true
		} else {
			$(input).addClass('is-invalid')
			$(input).removeClass('is-valid')

			return false
		}
	}

	/**
	* Validate the Image Format
	* the size and if this is empty
	*/
	function validateImage(input, data){
		if ( !(data == undefined) ) {
			if (data.size <= 3000000) {
				if ( data.type == 'application/pdf' || data.type == 'image/jpeg' || data.type == 'image/jpg' || data.type == 'image/gif' || data.type == 'image/png' ) {
					$(input).addClass('is-valid')
					$(input).removeClass('is-invalid')

					return true
				} else {
					$(input).addClass('is-invalid')
					$(input).removeClass('is-valid')

					return false
				}
			}else {
				$(input).addClass('is-invalid')
				$(input).removeClass('is-valid')

				return false
			}
		} else {
			$(input).addClass('is-invalid')
			$(input).removeClass('is-valid')

			return false
		}
	}

	/**
	* At least one has to be selected
	*/
	function validateCheckbox(){
		if ( $('#hardware').is(':checked')   || $('#printing').is(':checked') || $('#security').is(':checked') ||
			   $('#television').is(':checked') || $('#virus').is(':checked')    || $('#network').is(':checked')  ||
			   $('#telephone').is(':checked')  || $('#servers').is(':checked')	) {
			$('#cbm').hide()
			return true
		} else {
			$('#cbm').show()
			return false
		}
	}

	/**
	* Validate if the passwords are the same
	*/
	function validateSamePassword(input1, input2){
		if ( $(input1).val() === $(input2).val()) {
			$('#same').hide()
			return true
		} else {
			$('#same').show()
			return false
		}
	}
