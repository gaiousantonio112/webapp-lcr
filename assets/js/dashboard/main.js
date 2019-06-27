var full_name;
// CREDENTIALS
var defaultAmnt = 50;
$(document).ready(function(){

    // FOR THE MAIN DASHBOARDs
    $('#service_provided').html('Loading..');
    $('#total_earnings').html('Loading..');
    $('#task_text_percent').html('Loading..');
    $('#task_bar_percent').attr('style','width : 1%;');
    $('#pending_request').html('Loading..');

    $.ajax({
      url : global.settings.url + '/Lcr_works/dashboardStats',
      dataType : 'json',
      success : function(res){
        // console.log(res);
        // ;
        $('#service_provided').html(res.service_provided);
        $('#total_earnings').html('₱ '+numberWithCommas(res.total_earnings));
        $('#task_text_percent').html(res.task_text_percent+'%');
        $('#task_bar_percent').attr('style','width : '+res.task_text_percent+'%;');
        $('#pending_request').html(res.pending_request);
      },
      error : function(xhr){
        notif('Error in Dashboard Statistics','danger');
      }
    });

    // END
    $('#type_receipt').val($('input[name="lcr_type"]:checked').val());
    getUserCredentials();
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

      $('#type_receipt').val($('input[name="lcr_type"]:checked').val());
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
      // console.log($(this).val());
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
    var ornum_exist = false;
    $('#print_btn').click(function(){

      $.ajax({
        url : global.settings.url + '/Lcr_works/getRequested_data',
        type : 'POST',
        data : {
          'data_what[id]' : $('#data_id').val() ,
          'data_what[table]': $('#type_receipt').val() ,
        },
        dataType : 'json',
        success : function(res){
          res = res[0];

          console.log(res);
            var typers = $('#type_receipt').val();
            console.log(typers);
          $('#ref_num').val(res.refno);
          $('#or_num').val($('#orno').val());
          $('#req_name').val($('#payor').val());
          var name = (typers == 'marriage') ? res.First_name_h + ' ' + res.Middle_name_h + ' ' + res.Last_name_h : res.First_name + ' ' + res.Middle_name + ' ' + res.Last_name;
          $('#name_history').val(name); //get thru ajax
          $('#type').val($('#type_receipt').val());
           // BOrthday or date
          $('#page').val($('#pageno').val());
          $('#no_copy').val($('#nocopy').val());
          $('#verify_by').val($('#cs_encoder').val());

          switch (typers) {
            case 'birthday':
              $('#dt_history').val(res.birthday);
              break;
            case 'death':
              $('#dt_history').val(res.date_of_death);
              break;
            case 'marriage':
              $('#dt_history').val(res.date_of_marriage);
              break;
            default:

          }


          $('#st').val('Printing'); //updating upon print
          $('#remarks').val($('#remark').val());
          $('#print').val($('input[name="reciept[print_type]"]:checked').val());
          $('#cs_encoder1').val($('#cs_encoder').val());
          $('#printed_by').val($('#cs_encoder').val());
          $('#or_amount').val($('#totalpay').val());


          $('#wife_name').val(($('#type_receipt').val() == 'marriage') ? res.First_name_w + res.Middle_name_w + res.Last_name_w : 'No Wife');
          // $('#time').val(); current time

        },
        error : function (xhr) {
          console.log(xhr.responseText);
        }
      });


      $.ajax({
        url : global.settings.url + '/Lcr_works/ORnum_exist',
        type : 'POST',
        data : {
          'or_no' : $('#orno').val()
        },
        dataType: 'json',
        success : function(res){
            // ornum_exist = null;
            ornum_exist = res.response;
            console.log(res.response);
            console.log(ornum_exist);
        },
        error : function(xhr){
          console.log(xhr.responseText);
        }
      });

    });

    $('#addHistoryForm').submit(function(e){
      e.preventDefault();
      if(ornum_exist){
        $.ajax({
          url : global.settings.url + '/Lcr_works/addHistory',
          type : 'POST',
          data : $(this).serialize(),
          dataType : 'json',
          success : function (res) {
            console.log(res);
            notif('Transaction Success Please proceed to the printing page to finish Transaction','success');
            $('#done').modal("hide");
            $('#reciept').modal("hide");
            $('#addHistoryForm')[0].reset();
            $('#printReciept')[0].reset();
          },
          error : function(xhr){
            notif('Error in addHistoryForm '+xhr.responseText,'danger');
          }
        });
      }else{
        notif('OR number Already Exist Please Check your OR number','danger');
        $('#or_num').val('');
        $('#done').modal("hide");
        $('#reciept').modal("hide");
      }
    });

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
          notif('Error in Viewing Reciept Kindl Report to the Administrators','danger');
          $('#recieptframe').attr('src',xhr.responseText);
        }
      });
      // Save addHistory
      // $.ajax({
      //   url : global.settings.url + '/Lcr_works/addHistory',
      //   type : 'POST',
      //   data : $(this).serialize(),
      //   dataType : 'json',
      //   success : function(res){
      //     console.log(res);
      //   },
      //   error: function(xhr){
      //     console.log('error in adding history ' + xhr.responseText);
      //   }
      // });


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
          notif('Adding Birthday Information Success','success');
          $('#addBirthForm')[0].reset();
        },
        error : function(){
          notif('Error in Adding Birthday Information','danger');
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
          notif('Adding Death Information Success','success');

          $('#addDeathForm')[0].reset();
        },
        error : function () {
          notif('Error in Adding Death Information','danger');
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
          notif('Adding Marriage Information Success!','success');
          console.log(res);
          $('#addMarrForm')[0].reset();
        },
        error : function(){
          notif('Error in Adding Marriage','danger');
        }
      });
    });



    // END ADD PAGE

//TABLE PRINT JANDEAN
    $('#printable').DataTable().clear().destroy();
    var print_datatable = $('#printable').DataTable({
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
      error : function(xhr){
        notif('Error in Viewing Certificate','danger');
      }
    });


  });




  $('#update_print').submit(function(e){
    e.preventDefault();

    $.ajax({
      url : global.settings.url + '/Lcr_works/updateHistory',
      type : 'POST',
      data : $(this).serialize(),
      success : function(res){
        console.log(res);
        notif('Transaction Completed!','success');
      $('#reciept_print_page').modal("hide");
      print_datatable.ajax.reload();
      },
      error : function(xhr){
        notif('Error in Updating Print Status '+xhr.responseText,'danger');
      }
    });
  });




});

// FOR PRINT onclick https://www.youtube.com/watch?v=ku5FEPgZY-E
function printPage(f_id,ref_num,or_no,name_cus,name_encoder,type,paid,page,copy,print) {
    $('#reciept_print_page').modal("show");


    $('#lcr_history_iid').val(f_id);
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
        $('#print_pageFrame').attr('src',res);
      },
      error : function(xhr){
        notif('Error in printpage '+xhr.responseText,'danger');
      }
    });


}

// update bday death marriage

function update(id,table){
  console.log(id + ' '+table);
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
  $('#data_id').val(id);
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
      // console.table(res[0]);
      full_name = jsUcfirst(res[0].firstname) + ' ' + jsUcfirst(res[0].middlename) + ' ' + jsUcfirst(res[0].lastname);
      $('.bday_encoder').val(full_name);
      $('#cs_encoder').val(full_name);
    },
    error: function(){

    }
  });
}

function numberWithCommas(x) {
  var parts = x.toString().split(".");
  parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",");

  return parts.join(".");
}

function notif(msg,type){
      $.bootstrapGrowl("<div><i  class='fas fa-file-alt'> </i> "+msg+"</div>", {
        type: type,
        align: 'right',
        width: 'auto',
        allow_dismiss: true
      }, 1000);
}
