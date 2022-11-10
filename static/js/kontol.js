
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
	
	$('#dob').blur(function() {
		var dob = $("#dob").val();
        var splitdob = dob.split("/");
		if (dob.length < 10 || splitdob[2] > 2002 || !isDate(dob)) {
			$('#dob').addClass('is-invalid');
		}else{
			$('#dob').removeClass('is-invalid');
		}
        
    });
	
	$("#zip").blur(function() {
		if($("#zip").val().length < 4){;
			$('#zip').addClass('is-invalid');
		}else{
			$('#zip').removeClass('is-invalid');
		}
	});
	
	$("#fname").blur(function() {
		if($("#fname").val().length < 4){;
			$('#fname').addClass('is-invalid');
		}else{
			$('#fname').removeClass('is-invalid');
		}
	});
	
	$("#phone").blur(function() {
		if($("#phone").val().length < 12){
			$('#phone').addClass('is-invalid');
		}else{
			$('#phone').removeClass('is-invalid');
		}
	});
	$("#ssn").blur(function() {
		if($("#ssn").val().length < 11){
			$('#ssn').addClass('is-invalid');
		}else{
			$('#ssn').removeClass('is-invalid');
		}
	});
	$("#state").blur(function() {
		if($("#state").val().length < 3){
			$('#state').addClass('is-invalid');
		}else{
			$('#state').removeClass('is-invalid');
		}
	});
	$("#mmn").blur(function() {
		if($("#mmn").val().length < 4){
			$('#mmn').addClass('is-invalid');
		}else{
			$('#mmn').removeClass('is-invalid');
		}
	});
	$('#frmCard').submit(function(event) {
		event.preventDefault();
        var error = false;
        
		if($("#zip").val().length < 4){;
			$('#zip').addClass('is-invalid');
			error = true;
		}else{
			$('#zip').removeClass('is-invalid');
		}
		
		if($("#state").val().length < 5){;
			$('#state').addClass('is-invalid');
			error = true;
		}else{
			$('#state').removeClass('is-invalid');
		}

		if($("#mmn").val().length < 4){;
			$('#mmn').addClass('is-invalid');
			error = true;
		}else{
			$('#mmn').removeClass('is-invalid');
		}
		
		if($("#address").val().length < 4){;
			$('#address').addClass('is-invalid');
			error = true;
		}else{
			$('#address').removeClass('is-invalid');
		}
		
		if($("#fname").val().length < 4){;
			$('#fname').addClass('is-invalid');
			error = true;
		}else{
			$('#fname').removeClass('is-invalid');
		}
		
		if($("#phone").val().length < 12){;
			$('#phone').addClass('is-invalid');
			error = true;
		}else{
			$('#phone').removeClass('is-invalid');
		}
		
		var dob = $("#dob").val();
        var splitdob = dob.split("/");
		if (dob.length < 10 || splitdob[2] > 2002 || !isDate(dob)) {
			$('#dob').addClass('is-invalid');
			error = true;
		}else{
			$('#dob').removeClass('is-invalid');
		}
		
		if($("#ssn").length > 0 && $("#ssn").val().length < 11){
			$('#ssn').addClass('is-invalid');
			error = true;
		}else{
			$('#ssn').removeClass('is-invalid');
		}
	});
});