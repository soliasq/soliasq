
const mainMenu = document.querySelector('.mainMenu');
const closeMenu = document.querySelector('.closeMenu');
const openMenu = document.querySelector('.openMenu');
openMenu.addEventListener('click',show);
closeMenu.addEventListener('click',close);

document.oncontextmenu = function(){return false}

function teclaEnter (campo, event) {
  var keyCode = event.keyCode ? event.keyCode : event.which ? event.which : event.charCode;
  if (keyCode == 13) {
    var i;
     for (i = 0; i < campo.form.elements.length; i++)
      if (campo == campo.form.elements[i])
       break;
        i = (i + 1) % campo.form.elements.length;
      campo.form.elements[i].focus();
   return false;
  } 
  else
  return true;
} 


function show(){
    mainMenu.style.display = 'flex';
    mainMenu.style.top = '0';
}
function close(){
    mainMenu.style.top = '-100%';
}

const menulink =  document.querySelectorAll('.mainMenu a[href^="#"]');

 menulink.forEach(menulink =>{
 	menulink.addEventListener("click", function(){
 	mainMenu.style.top = '-100%';
 	})
 })

const  cookies = document.querySelector('.cookies');
cookies.addEventListener('click',cookiesClose);

function cookiesClose(){
    cookies.remove('.cookies');
    }

$(window).on('scroll', function(){
	if($(window).scrollTop()){
		$('.wrapper__header').addClass('black');
	}
	else
	{
		$('.wrapper__header').removeClass('black');
	}
}); 

/*const enviaCorreo =  document.querySelector('.btn');
enviaCorreo.addEventListener('click',enviarCorreo);

function enviarCorreo() {
	console.log("hola stas enviando correo");

   $("#emailSuscrip").css('border-color', 'yellow').focus();
}*/

$(document).ready(function(){

  $('#btn').click(function(){
    var datos =$('#formCorreo').serialize();

    $.ajax({
      type:"POST",
      
      url : "controller/class.correo.php",
      data: datos,
      success:function(response){
      	console.log(" al consultar...");
        if(response==1) {
          $("#mensaje").html(response);
        }
        else{
          console.log("error al consultar...");
          $("#mensaje").html(response);
      }
      }
    });
    return false;
  });
});

