const darka = document.querySelector('.darka');
let white = document.querySelector('#white');
let whi = document.querySelector('#whi');
const body=document.body;

darka.addEventListener("click",()=>{
    body.classList.toggle('white');
    white.classList.toggle('white');
    whi.classList.toggle('white');
  });


  //time

  const T = new Date().toLocaleTimeString();
  document.getElementById("time").innerHTML=T;