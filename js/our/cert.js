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
	
	//number only for the count_down_month
	$("#count_down_month").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
             // Allow: Ctrl+A
            (e.keyCode == 65 && e.ctrlKey === true) || 
             // Allow: home, end, left, right
            (e.keyCode >= 35 && e.keyCode <= 39)) {
                 // let it happen, don't do anything
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });
}


function saveDraftCert(){
//	var frm = $('#frm');
//	frm.attr("action", BASE_URL+"/index.php/cert/saveCert");
	$.ajax({
		type: 'POST',
		url: BASE_URL+"/index.php/cert/saveCert",
		data: $("#frm").serialize(),
		success: function(response){
			alert("save cert success: cert_id="+response.cert_id);
		},
		dataType: 'json'
	});
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
	var lover_1_id_number = $.trim($('#lover_1_id_number').val());
	
	var lover_2_name = $.trim($('#lover_2_name').val());
	var lover_2_province = $.trim($('#lover_2_province').val());
	var lover_2_city = $.trim($('#lover_2_city').val());
	var lover_2_id_number = $.trim($('#lover_2_id_number').val());
	
	var love_oath = $.trim($('#love_oath').val());
	var count_down_month = $.trim($('#count_down_month').val());
	var	uploadedImageName = $.trim($('#uploadedImageName').val());
	
	if(lover_1_name.length == 0 || lover_1_province.length == 0 || lover_1_city.length == 0
			||lover_2_name.length == 0 || lover_2_province.length == 0 || lover_2_city.length == 0
			||love_oath.length == 0 || count_down_month.length == 0){
		alert("带*的为必填项目");
		return false;
	}
	
	if(lover_1_name.length >= 20){
		alert("你的名字过长");
		return false;
	}
	if(lover_1_province.length > 20){
		alert("你的省份过长");
		return false;
	}
	if(lover_1_city.length > 20){
		alert("你的城市过长");
		return false;
	}
	if(lover_1_id_number.length > 20){
		alert("你的身份证过长");
		return false;
	}
	if(lover_2_name.length > 20){
		alert("TA的名字过长");
		return false;
	}
	if(lover_2_province.length > 20){
		alert("TA的省份过长");
		return false;
	}
	if(lover_2_city.length > 20){
		alert("TA的城市过长");
		return false;
	}
	if(lover_2_id_number.length > 20){
		alert("TA的身份证过长");
		return false;
	}
	if(love_oath.length > 100){
		alert("爱情宣言过长");
		return false;
	}
	if(count_down_month.length > 3){
		alert("倒计时设置过长");
		return false;
	}
	if(uploadedImageName == 0){
		alert("请上传图片");
		return false;
	}
	return true;
}

