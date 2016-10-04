function send_ajax(send_data_obj, success_callback) {
	send_data_obj._token = window.Laravel.csrfToken; // adding token to obj
	$.ajax({
		url     : '/ajax/related_language',
		type    : 'post',
		data    : send_data_obj,
		success : success_callback
	});
}