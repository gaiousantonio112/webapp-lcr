var full_name;
// CREDENTIALS
var defaultAmnt = 50;
$(document).ready(function(){
    // userid
    console.log(userid);

    getUserCredentials();
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

    $('#pageno').on('input',function(e){
      var s = $(this).val();

      //console.log(s[0]);

      //console.log(Math.abs(-345));
      switch ($('input[name="printOption"]:checked').val()) {
        case 'default':
          //console.log('all is default');
          break;
        case 'specific':
          //console.log('Specific page number moves same as default ');
          break;
        case 'range':
          //console.log('range is seleted');
          var numPages = Math.abs(s[0] - s[s.length-1]) + 1;
          var totalPages = numPages - 2;

          defaultAmnt = (totalPages * 50) + 50;
          break;
        default:

      }
    });

    $('#nocopy').on('input',function(e){
      if ($(this).val() == "") {
         $('#totalpay').val(defaultAmnt);
      }else $('#totalpay').val(defaultAmnt * $(this).val());
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


    $('#printReciept').submit(function(e){
      // recieptframe
      e.preventDefault();
      $.ajax({
        url : global.settings.url + '/Lcr_works/viewPrint',
        type : 'POST',
        data : {
          'rec[what]' : $('input[name="lcr_type"]:checked').val(),
          'rec[orno]' : $('#orno').val(),
          'rec[totalpay]' : $('#totalpay').val(),
          'rec[payor]' : $('#payor').val()
        },
        dataType :'text',
        success : function(res){
          console.log(res);
          $('#recieptframe').attr('src',global.settings.url+'/pages/viewreciepter/'+res);
          $('#recieptframe_white').attr('src',global.settings.url+'/pages/printreciept/'+res);
          //base_url().'/

        },
        error : function(xhr){
          console.log('Error in printReciept '+xhr.responseText);
          $('#recieptframe').attr('src',xhr.responseText);
        }
      });

    });

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

//TABLE PRINT JANDEAN
    $('#printable').DataTable().clear().destroy();
    $('#printable').DataTable({
        "ajax" : {
          "url" : global.settings.url + '/Lcr_works/showprint',
          dataSrc : 'data'
        },
        "columns" : [{
            "data" : "ref_num"
        }, {
            "data" : "or_num"
        }, {
            "data" : "name"
        },{
            "data" : "encoder_name"
        }, {
            "data" : "type"
        }, {
            "data" : "date"
        }, {
            "data" : "page"
        }, {
            "data" : "no_copy"
        }, {
            "data" : "btn"
        }]
      });


  // PRINT END

  $('#previewBtn').click(function(){
    // console.log('clicked');
    // console.log($('#refno').val());
    $.ajax({
      url : global.settings.url + '/Lcr_works/viewCerificate',
      type : 'POST',
      data : {
          'what[refno]' : $('#refno').val(),
          'what[categogry]' : $('input[name="lcr_type"]:checked').val()
        },
      dataType : 'text',
      success : function(res){
        $('#viewpdf').attr('src',global.settings.url+'/pages/viewCerts/'+res);
      },
      error : function(){

      }
    });


  });

});

// FOR PRINT onclick https://www.youtube.com/watch?v=ku5FEPgZY-E
function printPage(f_id,ref_num,or_no,name_cus,name_encoder,type,paid,page,copy,print) {
    $('#reciept').modal("show");
    $.ajax({
      url : global.settings.url + '/Lcr_works/printPage',
      type : 'POST',
      data : {
        'print[f_id]' : f_id,
        'print[ref_num]' : ref_num,
        'print[or_no]' : or_no,
        'print[name_cus]' : name_cus,
        'print[name_encoder]' : name_encoder,
        'print[type]' : type,
        'print[paid]' : paid,
        'print[page]' : page,
        'print[copy]' : copy,
        'print[print]' : print
      },
      dataType : 'text',
      success : function(res){
        console.log(res);
        $('#print_pageFrame').attr('src',res);
      },
      error : function(){
        console.log('Error in printpage ajax');
      }

    });


}

// END


function jsUcfirst(string)
{
    return string.charAt(0).toUpperCase() + string.slice(1);
}

function view(id,refno,full_name,current_date,name_wife) {

  document.getElementById('inputpage').scrollIntoView();
  $('#refno').val(refno);
  $('#name').val(full_name);
  $('#date').val(current_date);
  $('#name2').val(name_wife);

}





function getUserCredentials() {
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
}
