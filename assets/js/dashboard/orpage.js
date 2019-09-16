var datatable;
$(document).ready(function(){



    datatable = $('#ortable').DataTable({
        "ajax" : {
          "url" : global.settings.url + '/Orpage/getor',
          dataSrc : 'data'
        },
        "columns" : [{
            "data" : "idor_pool"
        },
         {
            "data" : "or_from"
        }, {
            "data" : "or_to"
        },{
            "data" : "owned_by"
        },
        {
            "data" : "created_at"
        }
    ]
      });






    $('#saveor').submit(function (e) {

        e.preventDefault();

        console.log(selectorbetween());
                if(selectorbetween() == true){
        notif('Used Official Receipt');
        
                }else{
                    console.log(checkordone($('#cashid').val()));
                    if($('#FROM').val() > $('#TO').val()){
                   notif('Invalid OR Number', 'warning');
                    }else{
                    if(checkordone($('#cashid').val()) == true){
                        notif('You Still Have Receipts Left' , 'warning');
                    
                    }else{
                        saveorfinaldata();
                    }
                }
            }
                





    });

});

function checkordone(id){
    val = false;
    $.ajax({
        async:false,
        url:  global.settings.url + '/Orpage/checkorisdone',
        type : 'POST', 
        data: {
            'data': id
        },
        dataType: 'json',
        success: function(res){
            console.log(res);
            console.log(res.length);
            (res.length) ?  val = true :  val = false;     
            // window.location = '/printables';
        },
        error: function(xhr){
            console.log(xhr);
        }
        });

return val;


}
function saveorfinaldata(){
    $.ajax({
    
        url: global.settings.url + '/Orpage/saveor',
        type : 'POST', 
        data: $('#saveor').serialize(),
        dataType: 'json',
        success: function(res){
    
            notif('Success' , 'success');
            datatable.ajax.reload();
        },
        error: function(xhr){
            console.log(xhr);
        }
        });

}

function selectorbetween(){

    $.ajax({
        async: false,
        url:  global.settings.url + '/Orpage/selectorbetween',
        type : 'POST', 
        data: $('#saveor').serialize(),
        dataType: 'json',
        success: function(res){
            console.log(res);
        (res.length) ?  val = true :  val = false;  
        },
        error: function(xhr){
            console.log(xhr);
        }
        });
        return val;
}