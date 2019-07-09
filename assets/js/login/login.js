$(document).ready(function(){
  $('#login_form').submit(function(e){
    // console.log(global.settings.url+'/lcr_works/login_user');


    e.preventDefault();
    $.ajax({
      url : global.settings.url+'/lcr_works/login_user',
      type : 'POST',
      data : $(this).serialize(),
      dataType : 'json',
      success : function(res){
        // console.log(res.length);
        if(res.length == 1){
          // goto next page
          window.location.href = global.settings.url + '/pages/dash/index'
        }else{
              // notif('Incorrect Username or Password','danger');
            $.bootstrapGrowl("Incorrect Username or Password", {
                type: 'danger',
                align: 'right',
                width: 'auto',
                allow_dismiss: true
              }, 1000);
          $('#username').val("");
          $('#password').val("");
        }
      },
      error : function(xhr){
        console.log(xhr.responseText);
      }
    });
  });
});
