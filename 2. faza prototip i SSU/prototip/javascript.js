$(document).ready(function(){
    const navSlide =()=>{
    const menu=document.querySelector('.hidden-menu');
    const nav=document.querySelector('.nav-links');
    const navLinks=document.querySelectorAll('.nav-links li');

    menu.addEventListener('click', ()=>{
        nav.classList.toggle('nav-active');

        navLinks.forEach((link,index)=>{
            if(link.style.animation){
                link.style.animation='';
            }
            else{
                link.style.animation=`navLinkFade 0.5s ease forwards ${index/7+0.3}s`;
            }
        });

        menu.classList.toggle('toggle');
    });

    
}

navSlide();
})

function registrujse(){
    document.getElementById('username').style.backgroundColor='rgb(255, 255, 255)';
    document.getElementById('password').style.backgroundColor='rgb(255, 255, 255)';
    document.getElementById('passagain').style.backgroundColor='rgb(255, 255, 255)';
    var u=document.registracija.username.value;
    if(u==''){
      document.getElementById('username').style.backgroundColor='rgb(255, 128, 128)';
      return;
    }
    var x1=document.registracija.password.value;
    if(x1==''){
      document.getElementById('password').style.backgroundColor='rgb(255, 128, 128)';
      return;
    }
    var x2=document.registracija.passagain.value;
    if(x2==''){
      document.getElementById('passagain').style.backgroundColor='rgb(255, 128, 128)';
      return;
    }
    if(x1==x2){
      localStorage.setItem(u,x1);
      var node=document.createElement('div');
      node.setAttribute('class','obavjestenje');
      var t=document.createTextNode("Uspjesno registrovan korisnik: "+u);
      node.appendChild(t);
      sekcija=document.getElementById('forma');
      sekcija.appendChild(node);
    }
    else if(x1!=x2){
      document.getElementById('password').style.backgroundColor='rgb(255, 128, 128)';
      document.getElementById('passagain').style.backgroundColor='rgb(255, 128, 128)';
      return;
    }
}

function logujse(){
    document.getElementById('username').style.backgroundColor='transparent';
    document.getElementById('password').style.backgroundColor='transparent';
    var x=document.logovanje.username.value;
    if(x==''){
      document.getElementById('username').style.backgroundColor='rgb(255, 128, 128)';
      return;
    }
    var y=document.logovanje.password.value;
    if(!(localStorage.getItem(x))){
      document.getElementById('username').style.backgroundColor='rgb(255, 128, 128)';
      return;
    }
    else if(localStorage.getItem(x)==y){
    localStorage.setItem('nalog',x);
    nalog=localStorage.getItem('nalog');
    var node=document.createElement('div');
    node.setAttribute('class','obavjestenje');
    var t=document.createTextNode("Uspjesno ulogovan korisnik: "+nalog);
    node.appendChild(t);
    sekcija=document.getElementById('forma');
    sekcija.appendChild(node);
    window.location.replace("Ocenjivanje.html");
    }
    else{
      document.getElementById('password').style.backgroundColor='rgb(255, 128, 128)';
      return;
    }
  }

  function logout(){
    localStorage.removeItem('nalog');
    nalog=localStorage.getItem('nalog');
  }
  