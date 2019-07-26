var full_name;
// CREDENTIALS
var defaultAmnt = 50;
var data_seacrh_table_bday;
var data_seacrh_table_death;
var data_seacrh_table_marriage;
// ct : stackoverflow
$(".leftDiv").hover(
    function() {
        $(this).animate({"width": "100%"}, 1000);
        $(".rightDiv").animate({"width": "0%"}, 1000);
    },
    function() {
        $(this).animate({"width": "50%"}, 1000);
        $(".rightDiv").animate({"width": "50%"}, 1000);
});


$(document).ready(function(e){


    loadNotifcations();

    curr_time();
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
        // //console.log(res);
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
    data_seacrh_table_bday = $('#tb_mainlcr').DataTable({
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
          data_seacrh_table_bday = $('#tb_mainlcr').DataTable({
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
          data_seacrh_table_death = $('#tb_mainlcr').DataTable({
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
          data_seacrh_table_marriage = $('#tb_mainlcr').DataTable({
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


    // # main modal update modals

    $('#updateBirthForm').submit(function(e){
      e.preventDefault();

      $.ajax({
        url : global.settings.url + '/Lcr_works/updateBirth',
        type : 'POST',
        data : $(this).serialize(),
        dataType : 'json',
        success : function(res){
          $('#update').modal("hide");
          notif('Success in Updating Birthday Information ','success');
          $('#updateBirthForm')[0].reset();
          data_seacrh_table_bday.ajax.reload();
        },
        error : function(xhr){
          notif('Error in updateBirthForm '+ xhr.responseText);
        }

      });
    });

    $('#updateDeathForm').submit(function(e){
      e.preventDefault();

      $.ajax({
        url : global.settings.url + '/Lcr_works/updateDeath',
        type : 'POST',
        data : $(this).serialize(),
        dataType : 'json',
        success : function(res){
          $('#update').modal("hide");
          notif('Success in Updating Death Information ','success');
          $('#updateDeathForm')[0].reset();
          data_seacrh_table_death.ajax.reload();
        },
        error : function(xhr){
          notif('Error in updateDeathForm '+ xhr.responseText);
        }

      });
    });

    $('#updateMarrForm').submit(function(e){
      e.preventDefault();

      $.ajax({
        url : global.settings.url + '/Lcr_works/updateMarr',
        type : 'POST',
        data : $(this).serialize(),
        dataType : 'json',
        success : function(res){
          $('#update').modal("hide");
          notif('Success in Updating Marriage Information','success');
          $('#updateMarrForm')[0].reset();
          data_seacrh_table_marriage.ajax.reload();
        },
        error : function(xhr){
          notif('Error in updateMarrForm '+ xhr.responseText);
        }

      });
    });

    $('input[name="printOption"]').change(function(){
      // //console.log($(this).val());
    });

    $('#pageno').on('input',function(e){
      var s = $(this).val();

      ////console.log(s[0]);

      ////console.log(Math.abs(-345));
      switch ($('input[name="printOption"]:checked').val()) {
        case 'default':
          ////console.log('all is default');
          break;
        case 'specific':
          ////console.log('Specific page number moves same as default ');
          break;
        case 'range':
          ////console.log('range is seleted');
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

        $('#done').modal('show');
        // console.log($('#white_reciept').modal('show'));
        console.log($('#recieptframe_white').attr('src'));

        if ($('#recieptframe_white').attr('src') != white_reciept) {
          $('#white_reciept').modal('show');
          $('#recieptframe_white').attr('src',white_reciept);
        }else{
          document.getElementById('recieptframe_white').contentDocument.location.reload(true);
          $('#white_reciept').modal('show');
        }
        // var iframe = document.getElementById('recieptframe_white');
        // iframe.src = white_reciept;
        // iframe.src = iframe.src;
        //


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
          //console.log(res);
            var typers = $('#type_receipt').val();
            //console.log(typers);
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
          //console.log(xhr.responseText);
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
            //console.log(res.response);
            //console.log(ornum_exist);
        },
        error : function(xhr){
          //console.log(xhr.responseText);
        }
      });

    });
    var white_reciept;
    $('#addHistoryForm').submit(function(e){
      e.preventDefault();
      if(ornum_exist){
        $.ajax({
          url : global.settings.url + '/Lcr_works/addHistory',
          type : 'POST',
          data : $(this).serialize(),
          dataType : 'json',
          success : function (res) {
            //console.log(res);
            notif('Transaction Success Please proceed to the printing page to finish Transaction','success');
            $('#done').modal("hide");
            $('#reciept').modal("hide");
            $('#addHistoryForm')[0].reset();
            $('#printReciept')[0].reset();

            var jsonData = {
              // from_user : 'sampleUser',
              ref_no : $('#ref_num').val(),
              type : $('#type').val(),
              issued_date : formatDate(Date()),
              status : 'Pending',
              from : full_name
            };

            websocket.send(JSON.stringify(jsonData));
            //
            // sendNotification({
            //     title: 'Electronic Civil Registry Information System',
            //     message: 'Good Day ' + full_name + '! \n Has added one new pending request on print page.\n Click to go to Print Page.',
            //     icon : 'https://cdn2.iconfinder.com/data/icons/mixed-rounded-flat-icon/512/megaphone-64.png',
            //     // icon: global.settings.url + '/assets/img/ecrislogo.png',
            //     clickCallback: function () {
            //       window.location.href = global.settings.url + '/pages/dash/print';
            //     }
            //   });

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
          //console.log(res);
          $('#recieptframe').attr('src',global.settings.url+'/pages/viewreciepter/'+res);

          //base_url().'/

          white_reciept = global.settings.url+'/pages/printreciept/'+res;

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
      //     //console.log(res);
      //   },
      //   error: function(xhr){
      //     //console.log('error in adding history ' + xhr.responseText);
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
          //console.log(res);
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
    // //console.log('clicked');
    // //console.log($('#refno').val());
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
        //console.log(res);
        notif('Transaction Completed!','success');
      $('#reciept_print_page').modal("hide");
      print_datatable.ajax.reload();
      },
      error : function(xhr){
        notif('Error in Updating Print Status '+xhr.responseText,'danger');
      }
    });
  });









//LCR FORM GENERATOR PAGE

///BIRTHDAY
  $('#birthdayform').submit(function(e){
  e.preventDefault();
  console.log($('#birthdayform').serializeArray());

    $.ajax({
      url : global.settings.url + '/Lcr_works/formgenBday',
      type : 'POST',
      // processData: false,
      data : $(this).serialize(),
      // dataType : 'pdf',
      // contentType : 'application/pdf',
      // cache: false,
      xhrFields: {
            responseType: 'blob'
        },
      success : function(res){
        $('#modalBirthday').modal('show');
            // var a = document.createElement('a');
            var url = window.URL.createObjectURL(res);
            // a.href = url;
            $('#iframe_preview_formgen').attr('src',url);
            // a.download = 'myfile.pdf';
            // document.body.append(a);
            // a.click();
            // a.remove();
            // window.URL.revokeObjectURL(url);
      },
      error : function(xhr){
       console.log(xhr.responseText);
      }
    });

  });


//DEATH
    $('#deathform').submit(function(e){
    e.preventDefault();
    console.log($('#deathform').serializeArray());
    $.ajax({
      url : global.settings.url + '/Lcr_works/formgenDeath',
      type : 'POST',
      data : $(this).serialize(),
      xhrFields: {
            responseType: 'blob'
        },
      success : function(res){
        $('#modalBirthday').modal('show');
        var a = document.createElement('a');
        var url = window.URL.createObjectURL(res);
        a.href = url;
        $('#iframe_preview_formgen').attr('src',url);
      },
      error : function(xhr){
       console.log(xhr.responseText);
      }
    });
  });


//MARR
      $('#marrform').submit(function(e){
      e.preventDefault();
      console.log($('#marrform').serializeArray());
        $.ajax({
          url : global.settings.url + '/Lcr_works/formgenMarriage',
          type : 'POST',
          data : $(this).serialize(),
          xhrFields: {
                responseType: 'blob'
            },
          success : function(res){
            $('#modalBirthday').modal('show');
            var a = document.createElement('a');
            var url = window.URL.createObjectURL(res);
            // url.file_name =
            a.href = url;
            $('#iframe_preview_formgen').attr('src',url);
          },
          error : function(xhr){
           console.log(xhr.responseText);
          }
        });
      });

      ////////////////////////////////////////////////////////////////////////
      //userpage
            var  usertable = $('#tbl_users').DataTable({
                 "ajax" : {
                   "url" : global.settings.url + '/Lcr_works/showuserstable',
                   dataSrc : 'data'
                 },
                 "columns" : [{
                     "data" : "id"
                 },
                 {
                     "data" : "username"
                 },
                 {
                     "data" : "fullname"
                 },
                 {
                     "data" : "address"
                   },
                   {
                     "data" : "btn"
                 }]
               });
               $('.dataTables_length').addClass('bs-select');


               // Add User
               $('#adduser').submit(function(e){
                 e.preventDefault();
                 console.log($('#adduser').serializeArray());
                 $.ajax({
                   url : global.settings.url + '/Lcr_works/addusers',
                   type : 'POST',
                   data : $(this).serialize(),
                   dataType : 'json',
                   success : function(res){
                     notif('Saved Successfully','success');
                     usertable.ajax.reload();
                     $("#adduser")[0].reset();
                   },
                   error : function(xhr){
                     notif('Error in getting credentials ' + xhr.responseText,'danger');

                   }
                 });
               });



               });
                  $('#edituser').submit(function(e){
                  e.preventDefault();
                  console.log($('#edituser').serializeArray());
                        $.ajax({
                          url : global.settings.url + '/Lcr_works/updateusers',
                          type : 'POST',
                          data : $(this).serialize(),
                          dataType : 'json',
                          success : function(res){

                              notif('Update Successfully','success');
                              usertable.ajax.reload();
                              $('#editusermodal').modal('hide');

                          },
                          error : function(xhr){
                            notif('Error in getting credentials ' + xhr.responseText,'danger');

                          }
                        });
                     });
                     $('#deleteuser').submit(function(e){
                       e.preventDefault();
                       $.ajax({
                         url : global.settings.url + '/Lcr_works/deleteuser',
                         type : 'POST',
                         data : $(this).serialize(),
                         dataType : 'json',
                         success : function(res){

                             notif('Deleted Successfully','success');
                             usertable.ajax.reload();
                             $('#deleteusermodal').modal('hide');

                         },
                         error : function(xhr){
                           notif('Error in getting credentials ' + xhr.responseText,'danger');

                         }
                       });
 ////////////////////////edn user page

});

///////////////////////////////////////////////////////////
//userpage
function deleteuser(id){
  $('#deleteusermodal').modal('show');
$('#delid').val(id);
}
function edituser(id){
  console.log(id);
  $.ajax({
        url : global.settings.url + '/Lcr_works/get_data_user',
        type: "POST",
        data : {
        'data[id]' : id
        },
        dataType: "JSON",
        success: function(data)
        {
          data = data[0];
    console.log(data);
      $('#editid').val(id);
      $('#editFirst').val(data.firstname);
        $('#editMiddle').val(data.middlename);
    $('#editLast').val(data.lastname);
    $('#editAddress').val(data.address);
      $('#editUsername').val(data.username);
  $('#edittyp').val(data.user_level);
        $('#editusermodal').modal('show');
                },
            error : function(xhr)
                {
                   notif('Error in getting credentials ' + xhr.responseText,'danger');
                }
            });
}
//////////////////////////////////////////////////////////////
//endofuserpage


function formatDate(date) {
    var d = new Date(date),
        month = '' + (d.getMonth() + 1),
        day = '' + d.getDate(),
        year = d.getFullYear();

    if (month.length < 2) month = '0' + month;
    if (day.length < 2) day = '0' + day;

    return [year, month, day].join('-');
}

function curr_time() {
  setInterval(function(){
    var currentTime = new Date(),
    hours = currentTime.getHours(),
    minutes = currentTime.getMinutes();
    secs = currentTime.getSeconds();

    if (minutes < 10) {
      minutes = "0" + minutes;
    }

    var suffix = "AM";
    if (hours >= 12) {
      suffix = "PM";
      hours = hours - 12;
    }
    if (hours == 0) {
      hours = 12;
    }

    var currentDate = new Date(),
    day = currentDate.getDate(),
    month = currentDate.getMonth() + 1,
    year = currentDate.getFullYear();

    $('#current_time').html(month + "/" + day + "/" + year + "  " + hours + ":" + minutes + ":" + secs +" " + suffix + " ");
  },1000);


}


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
  switch (table) {
    case 'lcr_bday':
      $('#updatebday_id').val(id);
      $.ajax({
        url : global.settings.url + '/Lcr_works/getRequested_data',
        type : 'POST',
        data : {
          'data_what[table]' : 'birthday',
          'data_what[id]' : id
        },
        dataType : 'json',
        success : function(res){
          res = res[0];
          //console.log(res);
          $('#updatebday_refno').val(res.refno);
          $('#updatebday_first_name').val(res.First_name);
          $('#updatebday_middle_name').val(res.Middle_name);
          $('#updatebday_last_name').val(res.Last_name);
          $('#updatebday_annex').val(res.annex);
          $('#updatebday_encoder').val(full_name);
          $('#updatebday_bday_dt').val(res.birthday);

          // bday_date = new Date(res.birthday.toString("YYY"));

          // //console.log(bday_date.getDate());

        },
        error : function(xhr){
          notif('Error in getting credentials ' + xhr.responseText,'danger');
        }
      });
      break;
    case 'lcr_death':
      $('#updatedeath_id').val(id);
      $.ajax({
        url : global.settings.url + '/Lcr_works/getRequested_data',
        type : 'POST',
        data : {
          'data_what[table]' : 'death',
          'data_what[id]' : id
        },
        dataType : 'json',
        success : function(res){
          res = res[0];
          //console.log(res);

          // $('#updatedeath_id').val(res.id);
          $('#updatedeath_refno').val(res.refno);
          $('#updatedeath_first_name').val(res.First_name);
          $('#updatedeath_middle_name').val(res.Middle_name);
          $('#updatedeath_last_name').val(res.Last_name);
          $('#updatedeath_annex').val(res.annex);
          $('#updatedeath_encoder').val(full_name);
          $('#updatedeath_death_date').val(res.date_of_death);


        },
        error : function(xhr){
          notif('Error in getting credentials ' + xhr.responseText,'danger');
        }
      });
      break;
    case 'lcr_marriage':
      $('#updatemarr_id').val(id);
      $.ajax({
        url : global.settings.url + '/Lcr_works/getRequested_data',
        type : 'POST',
        data : {
          'data_what[table]' : 'marriage',
          'data_what[id]' : id
        },
        dataType : 'json',
        success : function(res){
          res = res[0];
          //console.log(res);
          $('#updatemarr_refno').val(res.refno);
          $('#updatemarr_First_name_h').val(res.First_name_h);
          $('#updatemarr_Middle_name_h').val(res.Middle_name_h);
          $('#updatemarr_Last_name_h').val(res.Last_name_h);
          $('#updatemarr_annexh').val(res.annexh);
          $('#updatemarr_First_name_w').val(res.First_name_w);
          $('#updatemarr_Middle_name_w').val(res.Middle_name_w);
          $('#updatemarr_Last_name_w').val(res.Last_name_w);
          $('#updatemarr_annexw').val(res.annexw);
          $('#updatemarr_encoder').val(full_name);
          $('#updatemarr_date_of_marriage').val(res.date_of_marriage);

        },
        error : function(xhr){
          notif('Error in getting credentials ' + xhr.responseText,'danger');
        }
      });
      break;
    default:

  }

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




//Gettings user Credentials
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
      $('#curr_name').html('Name : '+full_name);
      $('#curruser_name').html(full_name);
    },
    error: function(){

    }
  });
}

function countPending() {
  $.ajax({
    url : global.settings.url + '/Lcr_works/countPending',
    type : 'GET',
    dataType : 'json',
    success : function(res){
      $('#notif_num').html(res.count);

      cntPndng = res.count;
      sendNotification({
          title: 'Electronic Civil Registry Information System',
          message: 'Good Day ' + full_name + '! \n You have '+cntPndng+' pendings today',
          icon : 'https://cdn2.iconfinder.com/data/icons/mixed-rounded-flat-icon/512/megaphone-64.png',
          // icon: global.settings.url + '/assets/img/ecrislogo.png',
          clickCallback: function () {
            // window.location.href = global.settings.url + '/pages/dash/print';
          }
        });
    },
    error : function(xhr){
      console.log(xhr.responseText);
    }
  });
}


function loadCertificate(ref_num,table_name) {

  $.ajax({
    url : global.settings.url + '/Lcr_works/viewCerificate',
    type : 'POST',
    data : {
      'what[refno]' : ref_num,
      'what[categogry]' : table_name
    },
    dataType : 'text',
    success : function(res){
      $('#postwar_image').attr('src',global.settings.url+'/pages/viewCerts/'+res);
    },
    error : function(xhr){
      notif('Error in Viewing Certificate','danger');
    }
  });

}

function clickPostwar(table) {
  switch (table) {
    case 'birth':
      ($('#birth_refnum').val() == "" ) ? notif('Reference Number Textbox should not be empty') : loadCertificate($('#birth_refnum').val(),'birthday');
      break;
    case 'death':
      ($('#death_refnum').val() == "" ) ? notif('Reference Number Textbox should not be empty') : loadCertificate($('#death_refnum').val(),'death');
      break;
    case 'marriage':
      ($('#marrform_refno').val() == "" ) ? notif('Reference Number Textbox should not be empty') : loadCertificate($('#marrform_refno').val(),'marriage');
      break;
    default:

  }
}

function loadNotifcations() {
  var content;
  $.ajax({
    url : global.settings.url + '/Lcr_works/loadNotifcations',
    type : 'GET',
    dataType : 'json',
    success : function(res){

      for (var i = 1; i < res.length - 1; i++) {
        notif_content += '<a title="Click to view" href="http://localhost:3000//pages/dash/print" class="col-12 notif  waves-effect waves-light"><small>Ref No: '+res[i].ref_no+' / Type : '+res[i].type+' / Issued : '+res[i].issued_date+' / Status : '+res[i].status+' / FROM : '+res[i].from+'</small></a>';
      }

      // console.log(notif_content);
      $('#notif_load').append(notif_content);
    },
    error : function(xhr){
      console.log(xhr.responseText);
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
