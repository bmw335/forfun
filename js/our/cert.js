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
	if(!validateBeforeSubmit()){
		return;
	}
	$.ajax({
		type: 'POST',
		url: BASE_URL+"/index.php/cert/submitCert",
		data: $("#frm").serialize(),
		success: function(response){
			alert("submit cert success: cert_id="+response.cert_id);
			window.open(BASE_URL+"/index.php/cert/showCert?cert_id="+response.cert_id,"_self");
		},
		dataType: 'json'
	});
}

function validateBeforeSubmit(){
	var lover_1_name = $.trim($('#lover_1_name').val());
	var lover_1_province = $.trim($('#lover_1_province').val());
	var lover_1_city = $.trim($('#lover_1_city').val());
	
	var lover_2_name = $.trim($('#lover_2_name').val());
	var lover_2_province = $.trim($('#lover_2_province').val());
	var lover_2_city = $.trim($('#lover_2_city').val());
	
	var love_oath = $.trim($('#love_oath').val());
	var count_down_month = $.trim($('#count_down_month').val());
	var	uploadedImageName = $.trim($('#uploadedImageName').val());
	
	if(lover_1_name.length == 0 || lover_1_province.length == 0 || lover_1_city.length == 0
			||lover_2_name.length == 0 || lover_2_province.length == 0 || lover_2_city.length == 0
			||love_oath.length == 0 || count_down_month.length == 0 || uploadedImageName.length == 0){
		alert("please fill all fields with *");
		return false;
	}
	return true;
}

