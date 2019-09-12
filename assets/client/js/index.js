$(document).ready(function(){

  $('#Deathcert').submit(function(e){
    e.preventDefault();
    $.ajax({
      url : global.settings.url + '/Client/addRequest_died',
      type : 'POST',
      data : $(this).serialize(),
      dataType : 'json',
      success : function(res){
        if (res) {
          alert('Thank you for requesting. Please check your email. It may took 48hours to be verified.');
          var full_names = $('#death_fname').val() + ' ' +  $('#death_mname').val() + ' ' +  $('#death_lname').val();
          sendTo('Death',full_names);

          $('#Deathcert')[0].reset();
          $('#death').modal('hide');
        }
      },
      error : function(xhr){
        console.log(xhr.responseText);
      }
    });
  });

  $('#Birthcert').submit(function(e){
    e.preventDefault();
    $.ajax({
      url : global.settings.url + '/Client/addRequest_bday',
      type : 'POST',
      data : $(this).serialize(),
      dataType : 'json',
      success : function(res){
        if (res) {
          alert('Thank you for requesting. Please check your email. It may took 48hours to be verified.');
          var full_names = $('#bday_fname').val() + ' ' +  $('#bday_mname').val() + ' ' +  $('#bday_lname').val();
          sendTo('Birthday',full_names);
          $('#Birthcert')[0].reset();
          $('#birthday').modal('hide');
        }
      },
      error : function(xhr){
        console.log(xhr.responseText);
      }
    });
  });

  $('#mmarrigecert').submit(function(e){
    e.preventDefault();
    $.ajax({
      url : global.settings.url + '/Client/addRequest_marr',
      type : 'POST',
      data : $(this).serialize(),
      dataType : 'json',
      success : function(res){
        if (res) {
          alert('Thank you for requesting. Please check your email. It may took 48hours to be verified.');
          var full_names = $('#marris_fname').val() + ' ' +  $('#marris_mname').val() + ' ' +  $('#marris_lname').val();

          $('#mmarrigecert')[0].reset();
          sendTo('Marriage',full_names);
          $('#marr').modal('hide');
        }
      },
      error : function(xhr){
        console.log(xhr.responseText);
      }
    });
  });

});

function sendTo(type,requestor) {
  var jsonData = {
    // from_user : 'sampleUser',
    ref_no :'Client Refno',
    type : type,
    issued_date :formatDate(Date()),
    status : 'Pending',
    from : requestor
  };

  websocket.send(JSON.stringify(jsonData));
}
