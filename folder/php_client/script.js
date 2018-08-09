
function myfunction(){
  output=document.getElementById("output");

  websocket= new WebSocket("ws://localhost:61614/serv");
  websocket.onopen=function(evt){
    write("connected");
    websocket.onsend("sdkfslkdjf");
  }
  websocket.onmessage=function(evt){
    write(evt.data);
  }
  websocket.onerror=function(evt){
    write('ERROR IN CONNECTION');
  }
  websocket.onclose=function(evt){
    write("wtf");
  }
}
  function write(msg){
    var p=document.createElement("p");
    p.style.wordWrap="break-word";
    p.textContent=msg;
    output.appendChild(p);
  }



addEventListener('DOMContentLoaded',myfunction)
