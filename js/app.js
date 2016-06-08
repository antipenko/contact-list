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

// 	requestToServerLogged('POST','?page=deny', data, denyOffer);
// 	function denyOffer(response) {
// 		response   parseXMLtoJSON(response);
// 		console.log(response);
// 		showToast(MESSAGE.Done, 'center', 3000);
// 		$('.btn_back').click();
// 	}

// 	requestToServerLogged(method, action, data, done, onFail)

// }
var $idButton = 1;
$('.buttonModale').live('click', function() {
     $('.modal-window').css('display','block');
     $idButton = $(this).attr("id")
     console.log($idButton);

     var id = $idButton;
     console.log(id);
     $.ajax({
          type: "POST",
          cache: false,
          url: 'includes/select.php',
          data: {id:id},
          dataType : 'json',
          success: function(data){
               console.log(data);
               $("#name").text(data.name);
               $("#surname").text(data.surname);
               $("#birthday").text(data.birthday);
               console.log(data);
          },
          error: function( jqXHR,  textStatus, errorThrown){
               console.log(jqXHR);
          }
          }).always(function () {
               console.log('Ajax finished: Buttons are enabled--->');
          });
     });


// $('.buttonModale').click(function(){
//      var id = $idButton;
//      console.log(id);
//      $.ajax({
//      	type: "POST",
//      	cache: false,
//      	url: 'includes/select.php',
//      	// data: {id:staffId},
//      	data: 'id='+ id,
//      	dataType : 'json',
//      	success: function(data){
//      		$("#name").text(data);
//      		console.log(data);
//      	},
//      	error: function( jqXHR,  textStatus, errorThrown){
//      		console.log(jqXHR);
//      	}
// 			//error: error
// 		}).always(function () {
// 			console.log('Ajax finished: Buttons are enabled--->');
// 		});
// 	});



