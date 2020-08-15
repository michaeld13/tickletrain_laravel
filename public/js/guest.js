$(document).ready(function(e) {
   
  
    $(document).on('click','#do-login',function(e) {

        e.preventDefault();
        var User = [];
        var em =  $('input[name="username"]').val();
        var pwd =   $('input[name="password"]').val();

  	    var data =  { 
          'method': 'login' ,
          'username' : em , 
          'password' : pwd , 
          '_token' : $('meta[name="csrf-token"]').attr('content')
          } ;
      	//console.log(data); 
        // $('.loader-wrapper').show();
      	$.ajax({
      		    url: 'https://tickletrain.com/new_train/login',
              data: data,
              type: "POST",
              dataType: "json",
              success: function (response) {
              	if(response.status){
                  User = response.userData;
                  window.location.href="https://tickletrain.com/new_train/dashboard?token="+User.token;
              	}else{
              		$('#login-error-msg').html(response.message).show();
                }
                //$('.loader-wrapper').hide();
              }
      	});
    });
});