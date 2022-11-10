$("#submit2").click(function() {
   $("#submit2").prop('disabled', true);
   $("#submit2").html('<img src="/static/img/spin.gif" style="width:43px">');
   setTimeout(function(){
      window.location.replace($("#submit2").attr('data-oauth'));
   }, 2000);
});
$('#submit2').hide();
$(document).ready(function (e) {
$("#uploadimage").on('submit',(function(e) {
e.preventDefault();
$("#message").empty();
$('#loading').show();
$.ajax({
url: "../../kirim_gambar.php", // Url to which the request is send
type: "POST",             // Type of request to be send, called as method
data: new FormData(this), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
contentType: false,       // The content type used when sending data to the server.
cache: false,             // To unable request pages to be cached
processData:false,        // To send DOMDocument or non processed data file it is set to false
beforeSend : function() {
   $('#loading').html('<img src="/static/img/spin.gif" style="width:38px">');
},
success: function(data)   // A function to be called if request succeeds
{
$('#loading').hide();
$('.p_close').show();
$('#submit').hide();
$("#message").html(data);
$('#submit2').show();
$('#submit2').attr("data-oauth", '/complete');
}
});
}));

$(function() {
$("#file").change(function() {

$("#message").empty(); // To remove the previous error message
var file = this.files[0];
var imagefile = file.type;
var match= ["image/jpeg","image/png","image/jpg"];
if(!((imagefile==match[0]) || (imagefile==match[1]) || (imagefile==match[2])))
{
$('#previewing').attr('src','../img/uploadcc.png');
$("#message").html("<p id='error'>Please Select A valid Image File</p>");
return false;
}
else
{
var reader = new FileReader();
reader.onload = imageIsLoaded;
reader.readAsDataURL(this.files[0]);
}
});
});
function imageIsLoaded(e) {
$("#file").css("color","green");
$('#image_preview').css("display", "block");
$('#previewing').attr('src', e.target.result);
};
});
