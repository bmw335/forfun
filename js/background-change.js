$(document).ready(function () {
	$('#toggle').click(function () {
		if ($("#demo-settings").is(":hidden")) {
			$("#demo-settings").fadeIn()
			$("#toggle").hide();
			$("#toggle").animate({left:"+=260"}, 0);
			$("#toggle").fadeIn();
		} else {
			$("#demo-settings").fadeOut();
			$("#toggle").fadeOut();
			$("#toggle").animate({left:"0"}, 0);
			$("#toggle").fadeIn();
		}
	})
	
	var id;
	$(".change").click(function () { 
		id = $(this).attr('id');
		$("#hypnosis-bg").hide();
	    $("#wrap").removeClass();
	    $("#wrap").addClass(id);
	});
	
	
	$("#saveColor").click(function(){
		var background_color = id;
		$.ajax({
			type: "post",
			url: "/forfun/index.php/user/saveBackground",
			data : {
				background : background_color
			},
			success: function(data, textStatus){
				
			},
			complete: function(XMLHttpRequest, textStatus){
				//HideLoading();
			},
			error: function(){
				//请求出错处理
			}
	});
	})
});