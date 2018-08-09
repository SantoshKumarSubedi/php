
function openNav() {
    document.getElementById("header-second-div").style.width = "100%";
}


function closeNav(){
document.getElementById("header-second-div").style.width = "00%";
}

function validateform(form){
  if(form.fname.value==""){
    alert("please type your name.");
    return false;
  }
  //email pattern used for validation is not mine i am just using it
  var email_pattern = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  if(form.email.value==""){
  alert("please enter your email address");
    return false;

  }else if(email_pattern.test(String(form.email.value))!=true){

    alert("please type your valid email");
    return false
  }
 if(form.subject.value==""){
    alert("please type subject to communicate");
 }
  if(form.message.value==""){
    alert("please type your message");
 }
}
