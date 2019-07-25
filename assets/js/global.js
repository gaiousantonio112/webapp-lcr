var global  = {
    settings : {
      url : 'http:///localhost:3000',
      ws_url : 'localhost'
    },

}

var notif_content = '';

function loadNotif(childHTML){
  $('#notif_load').prepend(childHTML);
  notif('New Notification/s recieved','success');
}
var cntPndng = 0;


var websocket = new WebSocket("ws://"+global.settings.ws_url+":8090/php-socket.php");
websocket.onopen = function(event) {
  // showMessage("<div class='chat-connection-ack'>Connection is established!</div>");
  // Load all notificaions read/unread
  // console.log(event);
  // loadNotif(notif_content);
  if (cntPndng <= 0) {
    console.log(cntPndng);
    countPending();
  }
  console.log('Connected!');

};

//receive socket
websocket.onmessage = function(event) {
  var Data = JSON.parse(event.data);
  // showMessage("<div class='"+Data.message_type+"'>"+Data.message+"</div>");
  // Do your actions here
  // $('#chat-message').val('');
  // Do your actions here
  // send kada module request para magpush notif sa mga kapwa user
  console.log(Data);
  if(Data.from_user != null){
    loadNotif(Data.notif_content);
    cntPndng += 1;
    $('#notif_num').html(cntPndng);
  }

  // console.log(getUserCredentials());

};

// error on socket
websocket.onerror = function(event){
  // showMessage("<div class='error'>Problem due to some Error</div>");
  // Do your actions here
  // console.log(event.data);
  console.log('An Error Occured');
};

// conn closed
websocket.onclose = function(event){
  // showMessage("<div class='chat-connection-ack'>Connection Closed</div>");
  // Do your actions here
  console.log('Connection Closed');
};

$('#test_noy').click(function(){
alert();
});

function sendNotification (data) {
    if (data == undefined || !data) { return false }
    var title = (data.title === undefined) ? 'Notification' : data.title
    var clickCallback = data.clickCallback
    var message = (data.message === undefined) ? 'null' : data.message
    var icon = (data.icon === undefined) ? 'https://cdn2.iconfinder.com/data/icons/mixed-rounded-flat-icon/512/megaphone-64.png' : data.icon
    var sendNotification = function (){
        var notification = new Notification(title, {
            icon: icon,
            body: message
        })
        if (clickCallback !== undefined) {
            notification.onclick = function () {
                clickCallback()
                notification.close()
            }
        }
    }

    if (!window.Notification) {
        return false
    } else {
        if (Notification.permission === 'default') {
            Notification.requestPermission(function (p) {
                if (p !== 'denied') {
                    sendNotification()
                }
            })
        } else {
            sendNotification()
        }
    }
}
