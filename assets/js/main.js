$(document).on("submit","form.js-register",function(event){
//$(document).on("submit","form.js-register, form.js-login",function(event){
	event.preventDefault();

	//alert("form was submitted");
	var _form = $(this);
	var _error = $(".js-error",_form);

	var dataObj = {
		email: $("input[type='email']",_form).val(),
		password:$("input[type='password']").val()
	}

	if(dataObj.email.length<16){
	
		_error.text("Please eneter a valid email address").show();
		return false;
	}else if(dataObj.password.length <8){
		_error.text("Please enter a password that is atleast 8 characters long").show();
		return false;
	}

	_error.hide();

	$.ajax({
		type:'POST',
		url:'ajax/register.php',
		data:dataObj,
		dataType:'json',
		async:true,
	})
	.done(function ajaxDone(data){
		//return whatever data is
		
		console.log(data);
		if(data.redirect !== undefined){
			window.location = data.redirect;
		
		}else if(data.error !== undefined){
			_error.text(data.error).show();
		}
	})
	.fail(function ajaxFailed(e){
		//this failed
		console.log(e)
	})
	.always(function ajaxAlwaysDoThis(data){
		//Always do this
	})

	return false;

});
//login
$(document).on("submit","form.js-login",function(event){
	event.preventDefault();

	//alert("form was submitted");
	var _form = $(this);
	var _error = $(".js-error",_form);

	var dataObj = {
		email: $("input[type='email']",_form).val(),
		password:$("input[type='password']").val()
	}

	if(dataObj.email.length<16){
	
		_error.text("Please eneter a valid email address").show();
		return false;
	}else if(dataObj.password.length <8){
		_error.text("Please enter a password that is atleast 8 characters long").show();
		return false;
	}

	_error.hide();

	$.ajax({
		type:'POST',
		url:'ajax/login.php',
		//url:(_form.hasClass('js-login') ? 'ajax/login.php' : 'ajax/register.php'),
		data:dataObj,
		dataType:'json',
		async:true,
	})
	.done(function ajaxDone(data){
		//return whatever data is
		
		console.log(data);
		if(data.redirect !== undefined){
			window.location = data.redirect;
		
		}else if(data.error !== undefined){
			_error.text(data.error).show();
		}
	})
	.fail(function ajaxFailed(e){
		//this failed
		console.log(e)
	})
	.always(function ajaxAlwaysDoThis(data){
		//Always do this
	})

	return false;

});


