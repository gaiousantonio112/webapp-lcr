$(document).ready(function(){
    // userid
    $.ajax({
      url : global.settings.url+'/',
      type : 'POST',
      data : {
        id : userid
      },
      dataType : 'json',
      success : function (res){
        console.log(res);
      },
      error: function(){

      }
    });


});
