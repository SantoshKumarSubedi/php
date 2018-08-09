var express = require('express');
var http = require('http');
var sockjs = require('sockjs');
var uuid = require('uuid');
var uuid=require('node-uuid');
var clients=[];
var app = express();
var CONNECTING=0;
var OPEN=1;
var CLOSING=2;
var CLOSED = 3;
var httpServer = http.createServer(app);
var sockServer = scokjs.createServer();
sockServer.installHandlers(httpServer,{prefix:'/chat'});
httpServer.listen(8182,'0.0.0.0');

express.get('/client.html',function(req,res)){
  res.sendfile(__dirname+'/client.html');
}

express.get('/style.css',function(req,res)){
  res.sendfile(__dirname+'/style.css');
}

sockServer.on('connection',function(conn){
  console.log("client connected");
  conn.on('message',function(message){
  if(message.indexOf("/nick")==0){
    var nickname_array = message.split(" ");
    if(nickname_array.length>=2){
      var old_nickname=nickname;
      nickname = nickname_array[1];
      for(var i=0;i<clients.length;i++){
        var clientSocket=clients[i].ws;
        var nickname_message="Client "+old_nickname+" change to "+nickname;
        clientSocket.send(JSON.stringify({
          "id":client_uuid,
          "nickname":nickname,
          "message":nickname_message
        }));
      }
    }
  }else{
  for(var i=0;i<clients.length;i++){
    var clientSocket=clients[i].ws;
    if(clientSocket.readyState===OPEN){
      console.log('client[%s]:%s',clients[i].id,message);
      if(ws!=clients[i].ws){
    clientSocket.send(JSON.stringify({"id":client_uuid,"message":nickname+">"+message}));
  }else{
    clientSocket.send(JSON.stringify({"id":client_uuid,"message":"me>"+message}));
  }
}
}
}
});
});
