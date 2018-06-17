$(document).on("submit","form.js-register",function(event){
	event.preventDefault();

	//alert("form was submitted");
	var _form = $(this);
	var _error = $(".js-error",_form);

	var data = {
		email: $("input[type='email']",_form).val(),
		password:$("input[type='password']").val()
	}

	if(data.email.length<16){
	
		_error.text("Please eneter a valid email address").show();
		return false;
	}else if(data.password.length <8){
		_error.text("Please enter a password that is atleast 8 characters long").show();
		return false;
	}




	
	_error.hide();

	$.ajax({
		type:'POST',
		url:'ajax/register.php',

		dataType:'json',
		async:true,



	})
	.done(function ajaxDone(data){
		//return whatever data is
		console.log(data);
		if(data.redirect !== undefined){
			window.location = data.redirect;
		}
	})
	.fail(function ajaxFailed(e){
		//this failed
	})
	.always(function ajaxAlwaysDoThis(data){
		//Always do this
	})



	console.log(data);
	return false;

});

