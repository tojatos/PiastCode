var baseUrl = "http://localhost/PiastCode/";
/*
|--------------------------------------------------------------------------
| Logout
|--------------------------------------------------------------------------
|
*/
$(document).on("submit", '.logout_form', function(e) {
	e.preventDefault();
	var data = $(this).serialize();
	$.ajax({
		url: baseUrl + 'Login/ajax_logout',
		type: 'POST',
		data: data,
		success: function(serverResponse) {
			if(serverResponse==='[LOGOUT_FINISHED]')
			{
				window.location.replace(baseUrl);
			}
			else{
				showResponse(serverResponse);
			}
		},
		error: function() {
			showResponse('Błąd związany z wysyłaniem danych.<br>Sprawdź swoje połączenie internetowe.');
		}
	});
});

/*
|--------------------------------------------------------------------------
| Ajax
|--------------------------------------------------------------------------
|
*/
function showResponse(response) {
	$('.blur').show();
	$('.response').show();
	$('.response > .text').html(response);
	$('.accept-response').focus();
}

function hideResponse() {
	$('.blur').hide();
	$('.response').hide();
}

function sendPostData(data, url) {
	$.ajax({
		url: baseUrl + url,
		type: 'POST',
		data: data,
		success: function(serverResponse, refresh) {
			showResponse(serverResponse, refresh);
		},
		error: function() {
			showResponse('Błąd związany z wysyłaniem danych.<br>Sprawdź swoje połączenie internetowe.');
		}
	});
}



function sendPostDataOnSubmit(handler, url, refresh = false) {

	$(document).on("submit", handler, function(e) { //$(document) na początku żeby działało dla dynamicznych elementów
		e.preventDefault();
		var data = $(this).serialize();
		sendPostData(data, url);
		if (refresh) {
			$('.accept-response').addClass("refresh");
		} else {
			$('.accept-response').removeClass("refresh");
		}
	});
}
$(function() {
	$('.accept-response').on("click", function() {
		if ($(this).hasClass('refresh')) {
			location.reload();
		} else {
			hideResponse();
		}
	});
	sendPostDataOnSubmit('.login_form', 'Login/ajax_login', true);
	sendPostDataOnSubmit('.register_form', 'Register/ajax_register');
	sendPostDataOnSubmit('.forgotten_password_form', 'UserPassword/ajax_forgottenPassword', true);
	sendPostDataOnSubmit('.change_password_form', 'UserPassword/ajax_changePassword', true);
	sendPostDataOnSubmit('.create_event_form', 'Event/ajax_create_event');
	sendPostDataOnSubmit('.create_category_form', 'Category/ajax_create_category');

	/*
	|--------------------------------------------------------------------------
	| JqueryUI
	|--------------------------------------------------------------------------
	|
	*/
	$('.datepicker').datepicker({ dateFormat: 'yy-mm-dd' });
});
/*
|--------------------------------------------------------------------------
| Hamburger
|--------------------------------------------------------------------------
|
*/

$(function(){
$('#hamburger').on('click', function(){
	$(this).toggleClass('open');
	$('.navbar-left').slideToggle();
	$('.navbar-right').slideToggle();
});
});
