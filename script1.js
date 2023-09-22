let reg = document.getElementById("reg");
let log = document.getElementById("log");
log.style.visibility="hidden";
function m(){
    reg.style.visibility="hidden";
    log.style.visibility="visible";
}function n(){
    reg.style.visibility="visible";
    log.style.visibility="hidden";
};

//register form
function done(){
let a = document.getElementById("uname");
let b = document.getElementById("uemail");
let c = document.querySelector(".reset");


 if(a===""||b===""){
  return false;
 }
 if(/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/.test(b)){
alert("please check your mail id");
return false;
 }
 else{
   alert("Registered!");
   c.reset();
 }
};


