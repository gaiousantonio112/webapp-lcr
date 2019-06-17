var full_name;
// CREDENTIALS
$(document).ready(function(){
    // userid
    console.log(userid);
    $.ajax({
      url : global.settings.url+'/Lcr_works/getUserCredentials',
      type : 'POST',
      data : {
        id : userid
      },
      dataType : 'json',
      success : function (res){
        console.table(res[0]);
        full_name = jsUcfirst(res[0].firstname) + ' ' + jsUcfirst(res[0].middlename) + ' ' + jsUcfirst(res[0].lastname);
        $('.bday_encoder').val(full_name);
      },
      error: function(){

      }
    });

// SEARCH PAGE
    // primary table loader
    $('#tb_mainlcr').DataTable().clear().destroy();
    $('#tb_mainlcr').DataTable({
        "ajax" : {
          "url" : global.settings.url + '/Lcr_works/loadTableBday',
          dataSrc : 'data'
        },
        "columns" : [{
            "data" : "id"
        }, {
            "data" : "refno"
        }, {
            "data" : "birthday"
        }, {
            "data" : "full_name"
        }, {
            "data" : "btn"
        }]
      });
      $('#whatType').html('Date of Birth');
      $('#whatType2').html('Date of Birth');


    // $('#tb_mainlcr').DataTable();
    $('.dataTables_length').addClass('bs-select');

    $('input[name="lcr_type"]').change(function(){
      switch ($(this).val()) {
        case 'birthday' :
          $('#name_husband').html('Name');
          $('#name_wife').html('Name');
          $('#tb_mainlcr').DataTable().clear().destroy();
          $('#tb_mainlcr').DataTable({
            "ajax" : {
              "url" : global.settings.url + '/Lcr_works/loadTableBday',
              dataSrc : 'data'
            },
            "columns" : [{
                "data" : "id"
            }, {
                "data" : "refno"
            }, {
                "data" : "birthday"
            }, {
                "data" : "full_name"
            }, {
                "data" : "btn"
            }]
          });
          $('#whatType').html('Date of Birth');
          $('#whatType2').html('Date of Birth');
          break;
        case 'death':
        $('#name_husband').html('Name');
        $('#name_wife').html('Name');
          $('#tb_mainlcr').DataTable().clear().destroy();
          $('#tb_mainlcr').DataTable({
            "ajax" : {
              "url" : global.settings.url + '/Lcr_works/loadTableDeath',
              dataSrc : 'data'
            },
            "columns" : [{
                "data" : "id"
            }, {
                "data" : "refno"
            }, {
                "data" : "date_of_death"
            }, {
                "data" : "full_name"
            }, {
                "data" : "btn"
            }]
          });
          $('#whatType').html('Date of Death');
          $('#whatType2').html('Date of Death');
          break;
        case 'marriage' :
          $('#name_husband').html('Name of Husband');
          $('#name_wife').html('Name of Wife');
          $('#tb_mainlcr').DataTable().clear().destroy();
          $('#tb_mainlcr').DataTable({
            "ajax" : {
              "url" : global.settings.url + '/Lcr_works/loadTableMarr',
              dataSrc : 'data'
            },
            "columns" : [{
                "data" : "id"
            }, {
                "data" : "refno"
            }, {
                "data" : "date_of_marriage"
            }, {
                "data" : "full_name"
            }, {
                "data" : "btn"
            }]
          });
          $('#whatType').html('Date of Marriage');
          $('#whatType2').html('Date of Marriage');
          break;
        default:

      }
    });

    $('input[name="printOption"]').change(function(){
      console.log($(this).val());
    });

    // pageno
    $('#nocopy').on('input',function(e){
      if ($(this).val() == "") {
         $('#totalpay').val(50);
      }else $('#totalpay').val(50 * $(this).val());
    });
    // totalpay
    $('#cashten').on('input',function(e){
        $('#totalam').val($(this).val());
        $('#changed').val($(this).val() - $('#totalpay').val());
    });

    $('#cashten').change(function(){
      if($(this).val() == ""){
        $(this).val(0);
      }
    });
    // changed

    // END SEARCH PAGE

    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });

// ADD PAGES
    $('#addBirthForm').submit(function(e){
      e.preventDefault();

      $.ajax({
        url : global.settings.url + '/Lcr_works/addBirthday',
        type : 'POST',
        data : $(this).serialize(),
        dataType : 'json',
        success : function(res){
          alert('Adding Birthday Success');

          $('#addBirthForm')[0].reset();
        },
        error : function(){
          console.log('Error in addBirthday');
        }
      });
    });

    $('#addDeathForm').submit(function(e) {
      e.preventDefault();

      $.ajax({
        url : global.settings.url + '/Lcr_works/addDeath',
        type : 'POST',
        data : $(this).serialize(),
        dataType : 'json',
        success : function(res){
          alert('Adding Death Information Success');
          console.log(res);
          $('#addDeathForm')[0].reset();
        },
        error : function () {
          console.log('Error in addDeathForm');
        }
      });
    });

    $('#addMarrForm').submit(function(e){
      e.preventDefault();
      $.ajax({
        url : global.settings.url + '/Lcr_works/addMarriage',
        type : 'POST',
        data : $(this).serialize(),
        dataType : 'json',
        success : function(res){
          alert('Adding Marriage Information Success!');
          console.log(res);
          $('#addMarrForm')[0].reset();
        },
        error : function(){

        }
      });
    });



    // END ADD PAGE

});

function jsUcfirst(string)
{
    return string.charAt(0).toUpperCase() + string.slice(1);
}

function view(id,refno,full_name,current_date,name_wife) {
  $('#refno').val(refno);
  $('#name').val(full_name);
  $('#date').val(current_date);
  $('#name2').val(name_wife);

}
