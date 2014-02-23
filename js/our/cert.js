$(document).ready(function() 
{
	init();
}); 

function init(){
	var url = BASE_URL+'/index.php/cert/uploadImage';
	$('#fileupload').fileupload({
		url: url,
		dataType: 'json',
		done: function (e, data) {
			$.each(data.result.files, function (index, file) {
				$('<p/>').text(file.name).appendTo('#files');
				var downloadParam = file.url.split("?");
				downloadParam = downloadParam[downloadParam.length -1];
				$('#uploadedImage').attr("src", BASE_URL + "/index.php/cert/getImage?"+downloadParam);
				$('#uploadedImageName').val(file.name);
			});
		},
		progressall: function (e, data) {
			var progress = parseInt(data.loaded / data.total * 100, 10);
			$('#progress .progress-bar').css(
					'width',
					progress + '%'
			);
		}
	}).prop('disabled', !$.support.fileInput)
	.parent().addClass($.support.fileInput ? undefined : 'disabled');
}


function saveDraftCert(){
	var frm = $('#frm');
	frm.attr("action", BASE_URL+"/index.php/cert/saveCert");
}

function validateAndSubmit(){
//	$.post(BASE_URL+"/index.php/cert/submitCert", 
//			$("#testform").serialize()
//	);
	
	$.ajax({
		type: 'POST',
		url: BASE_URL+"/index.php/cert/submitCert",
		data: $("#frm").serialize(),
		success: function(response){
			alert("validateAndSubmit success:"+response);
		},
		dataType: 'json'
	});
	
//	if(!validateBeforeSubmit()){
//		return false;
//	}
//	var frm = $('#frm');
//	frm.attr("action", BASE_URL+"/index.php/cert/submitCert");
}

function validateBeforeSubmit(){
	var lover_1_name = $('#lover_1_name').val();
	alert(lover_1_name);
	return false;
}

