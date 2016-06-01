$(document).foundation();

// function sendAjax(method, url, data, done, onFail){

// 	function error(error) {
// 		var message = 'Request fail: ';
// 		if (error.status == 0) {
// 			message += 'No internet connection';
// 		} else {
// 			message += error.statusText;
// 		}
// 		console.log(message);
// 		if (typeof onFail === 'undefined') {
// 			return;
// 			else {
// 				onFail();
// 			}
// 		}

// 		$.ajax({
// 			type: method,
// 			cache: false,
// 			url: url,
// 			data: data,
// 			success: done,
// 			error: error
// 		}).always(function () {
// 			console.log('Ajax finished: Buttons are enabled--->');
// 		});
// 	}

	// requestToServerLogged('POST','?page=deny', data, denyOffer);
	// function denyOffer(response) {
	// 	response = parseXMLtoJSON(response);
	// 	console.log(response);
	// 	showToast(MESSAGE.Done, 'center', 3000);
	// 	$('.btn_back').click();
	// }

	requestToServerLogged(method, action, data, done, onFail)
