//bar
  var bday_data = [];
  var death_data = [];
  var marr_data = [];




  $(document).ready(function(){
    $('#status').hide();
    $.ajax({
      url : global.settings.url + '/Lcr_works/getYears',
      type : 'GET',
      dataType : 'json',
      success : function(res){
        var arrayList = res ;
        for (var i = 1; i <= arrayList.length - 1; i++) {
          $('#year_select').append('<option value="' + arrayList[i].yrs + '">' + arrayList[i].yrs + '</option>');
        }
      },
      error : function(xhr){
        console.log(xhr.responseText);
      }
    });

    $('#year_select').on("change",function(){
      // Birthday Data

        var myLineChart ;
        var num = 0;

      $.ajax({
        processing: true,
        language: {
            processing: $('#status').show()
          },


        serverSide: true,
        url : global.settings.url + '/Lcr_works/getResultCharts',
        type : 'POST',
        data : {
          'line[table]' : 'lcr_bday',
          'line[column]' : 'birthday',
          'line[year]' : $('#year_select').val()
        },
        dataType : 'json',
        success : function(res){
          // console.log(res);
          bday_data = [];
          console.log(bday_data);
          res = res.year;
          bday_data = res;
          console.log(bday_data);

          // console.log(res);
          // for (var i = 0; i < res.length; i++) {
          //   res[i]
          // }
        },
        error : function(xhr){
          console.log(xhr.responseText);
        }

      });

      // Death Data
      $.ajax({
        url : global.settings.url + '/Lcr_works/getResultCharts',
        type : 'POST',
        data : {
          'line[table]' : 'lcr_death',
          'line[column]' : 'date_of_death',
          'line[year]' : $('#year_select').val()
        },
        dataType : 'json',
        success : function(res){
          // console.log(res);
          death_data = [];
          console.log(death_data);
          res = res.year;
          death_data = res;
          console.log(death_data);

          // console.log(res);
          // for (var i = 0; i < res.length; i++) {
          //   res[i]
          // }
        },
        error : function(xhr){
          console.log(xhr.responseText);
        }

      });

      // Marriage Data
      $.ajax({
        url : global.settings.url + '/Lcr_works/getResultCharts',
        type : 'POST',
        data : {
          'line[table]' : 'lcr_marriage',
          'line[column]' : 'date_of_marriage',
          'line[year]' : $('#year_select').val()
        },
        dataType : 'json',
        success : function(res){
          // console.log(res);
          marr_data = [];
          console.log(marr_data);
          res = res.year;
          marr_data = res;
          console.log(marr_data);

          // console.log(res);
          // for (var i = 0; i < res.length; i++) {
          //   res[i]
          // }
        if (num > 0) {
            myLineChart.destroy();
        }
          $('#status').hide();
          var ctxL = document.getElementById("lineChart").getContext('2d');
          myLineChart = new Chart(ctxL, {
            type: 'line',
            data: {
              labels: ["January", "February", "March", "April", "May", "June", "July" , "August"  , "September" , "October" , "November" , "December"],
              datasets: [{
                  label: "Birthday",
                  data: bday_data,
                  backgroundColor: [
                    'rgba(105, 0, 132, .2)',
                  ],
                  borderColor: [
                    'rgba(200, 99, 132, .7)',
                  ],
                  borderWidth: 2
                },
                {
                  label: "Mariage",
                  data: marr_data,
                  backgroundColor: [
                    'rgba(0, 137, 132, .2)',
                  ],
                  borderColor: [
                    'rgba(0, 10, 130, .7)',
                  ],
                  borderWidth: 2
                },
                {
                  label: "Death",
                  data: death_data,
                  backgroundColor: [
                    'rgba(141, 161, 47, .2)',
                  ],
                  borderColor: [
                    'rgba(242, 159, 64, .7)',
                  ],
                  borderWidth: 2
                }
              ]
            },
            options: {
              responsive: true
            }
          });
          num++;
        },
        error : function(xhr){
          console.log(xhr.responseText);
        }

      });

    });




  });

  //line
