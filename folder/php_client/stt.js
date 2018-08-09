var username,password="guest";
var url = "ws://localhost:61614/stomp";
 var client = Stomp.client(url);
 client.connect(username,password);
 client.send("/queue/test", {priority: 9}, "Hello, STOMP");
