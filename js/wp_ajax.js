jQuery(document).ready(function($) {

// Perform AJAX login on form submit
$('#login_submit').on('click', function(e){

$('#username').hide();
$('#userpwd').hide();
$('#login_submit').hide(); 
$('#status').show().text(ajax_object.loadingmessage);

$.ajax({
type: 'POST',
dataType: 'json',
url: ajax_object.ajaxurl,
data: {
        'action': 'ajaxlogin', //calls wp_ajax_nopriv_ajaxlogin
        'username': $('#username').val(),
        'password': $('#userpwd').val(),
        'security': $('.modal-body #security').val() 
        },
        success: function(data){
            $('#status').text(data.message);
            if (data.loggedin == true){
                document.location.href = ajax_object.redirecturl;
            } else{
                $('#status').text(data.message);
                $('#username').show();
                $('#userpwd').show();
                $('#login_submit').show(); 
            }
        }
});
e.preventDefault();
});



// Perform AJAX Signup on form submit
$('#signup').on('click', function(e){

$('#status').show().text(ajax_object.loadingmessage);

$.ajax({
type: 'POST',
dataType: 'json',
url: ajax_object.ajaxurl,
data: {
        'action': 'ajaxsignup', //calls wp_ajax_nopriv_ajaxlogin
        'username': $('#uname').val(),
        'password': $('#u_pwd').val(),
        'email': $('#u_email').val(),
        'security': $('#signup_modal #security').val() 
        },
        success: function(data){
            $('#status').text(data.message);
            if (data.signup == true){
                document.location.href = ajax_object.redirecturl;
            }else{
                $('#status').text(data.message);
            }
        }
});
e.preventDefault();
});

});

$( document ).ready(function() {
    var proUL = $( ".products_details" );
    if ( proUL.parent().is( "div" ) ) {
       $( ".products_details" ).unwrap();
    }
 });