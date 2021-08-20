function botones(){
    document.getElementById('botonemp').style.display ='inline-block';
    document.getElementById('botonclien').style.display ='inline-block';
    document.getElementById('botonrepven').style.display ='none';
    document.getElementById('botonrepcom').style.display ='none';
    document.getElementById('ocultar2').style.display ='none';
    document.getElementById('ocultar3').style.display ='none';
    document.getElementById('botonagreco').style.display ='none';
    document.getElementById('botonagreve').style.display ='none';
    document.getElementById('ocultar4').style.display ='none';
    document.getElementById('ocultar5').style.display ='none';
    document.getElementById('botones4').style.display ='none';
}
function botones2(){
    document.getElementById('botonrepven').style.display ='inline-block';
    document.getElementById('botonrepcom').style.display ='inline-block';
    document.getElementById('botonemp').style.display ='none';
    document.getElementById('botonclien').style.display ='none';
    document.getElementById('ocultar').style.display ='none';
    document.getElementById('ocultar1').style.display ='none';
    document.getElementById('ocultar3').style.display ='none';
    document.getElementById('botonagreco').style.display ='none';
    document.getElementById('botonagreve').style.display ='none';
    document.getElementById('ocultar4').style.display ='none';
    document.getElementById('ocultar5').style.display ='none';
    document.getElementById('botones4').style.display ='block';
    document.getElementById('form1').style.display ='inline-block';
    
       
}
function botones3(){
    document.getElementById('botonagreco').style.display ='inline-block';
    document.getElementById('botonagreve').style.display ='inline-block';
    document.getElementById('botonrepven').style.display ='none';
    document.getElementById('botonrepcom').style.display ='none';
    document.getElementById('botonemp').style.display ='none';
    document.getElementById('botonclien').style.display ='none';
    document.getElementById('ocultar').style.display ='none';
    document.getElementById('ocultar1').style.display ='none';
    document.getElementById('ocultar3').style.display ='none';
    document.getElementById('botones4').style.display ='none';
}

function mostrartabla(){
    document.getElementById('ocultar').style.display ='block';
    document.getElementById('ocultar1').style.display ='none';
    document.getElementById('ocultar2').style.display ='none';  
}

function mostrartabla1(){
    document.getElementById('ocultar2').style.display ='none';
    document.getElementById('ocultar').style.display ='none';
    document.getElementById('ocultar1').style.display ='block';   
}

function mostrartabla2(){

    document.getElementById('ocultar2').style.display ='block';
    document.getElementById('ocultar').style.display ='none';
    document.getElementById('ocultar1').style.display ='none';
    document.getElementById('ocultar3').style.display ='none';
}
function mostrartabla3(){

    document.getElementById('ocultar3').style.display ='block';
    document.getElementById('ocultar').style.display ='none';
    document.getElementById('ocultar1').style.display ='none';
    document.getElementById('ocultar2').style.display ='none';
}
function mostrartabla4(){
    document.getElementById('ocultar4').style.display ='block';
    document.getElementById('ocultar3').style.display ='none';
    document.getElementById('ocultar').style.display ='none';
    document.getElementById('ocultar1').style.display ='none';
    document.getElementById('ocultar2').style.display ='none';
    document.getElementById('ocultar5').style.display ='none';
}
function mostrartabla5(){
    document.getElementById('ocultar5').style.display ='block';
    document.getElementById('ocultar4').style.display ='none';
    document.getElementById('ocultar3').style.display ='none';
    document.getElementById('ocultar').style.display ='none';
    document.getElementById('ocultar1').style.display ='none';
    document.getElementById('ocultar2').style.display ='none';
}


document.addEventListener("DOMContentLoaded", function(event) {

    const showNavbar = (toggleId, navId, bodyId, headerId) =>{
    const toggle = document.getElementById(toggleId),
    nav = document.getElementById(navId),
    bodypd = document.getElementById(bodyId),
    headerpd = document.getElementById(headerId)
    
    // Validate that all variables exist
    if(toggle && nav && bodypd && headerpd){
    toggle.addEventListener('click', ()=>{
    // show navbar
    nav.classList.toggle('show')
    // change icon
    toggle.classList.toggle('bx-x')
    // add padding to body
    bodypd.classList.toggle('body-pd')
    // add padding to header
    headerpd.classList.toggle('body-pd')
    })
    }
    }
    
    showNavbar('header-toggle','nav-bar','body-pd','header')
    
    /*===== LINK ACTIVE =====*/
    const linkColor = document.querySelectorAll('.nav_link')
    
    function colorLink(){
    if(linkColor){
    linkColor.forEach(l=> l.classList.remove('active'))
    this.classList.add('active')
    }
    }
    linkColor.forEach(l=> l.addEventListener('click', colorLink))
    
    // Your code to run since DOM is loaded and ready
    });

  