$(document).ready(function(){

  $(window).scroll(function(){
    if( $(this).scrollTop() > 0 ){
      $('.header').addClass('header2');
    } else {
      $('.header').removeClass('header2');
    }
  });

})

const idListaOculta="publicaciones",idListaMostrar="listado",idBotonFiltrar="btn_filtrar",idInputTextFiltro="text_filter",classInputCheckbox=".input__filtro",atributoFiltro="data-type";document.addEventListener("DOMContentLoaded",()=>{function a(l){for(;l.firstChild;)l.removeChild(g.firstChild)}function e(){if(0===g.childNodes.length){let l=document.createElement("p");l.textContent="No hay ning\xFAn archivo con ese filtro",g.appendChild(l)}}const f=document.getElementById(idListaOculta).childNodes,g=document.getElementById(idListaMostrar),h=document.getElementById(idBotonFiltrar),k=document.getElementById(idInputTextFiltro);a(g),function(l,m){for(let n=0;n<l.length;n++)m.appendChild(l[n].cloneNode(!0))}(f,g),h.addEventListener("click",function(){a(g);const l=document.querySelectorAll(classInputCheckbox);for(let m=0;m<l.length;m++)if(l[m].checked)for(let o,n=0;n<f.length;n++)o=f[n].getAttribute(atributoFiltro).trim().toLowerCase(),o.includes(l[m].getAttribute("id").trim().toLowerCase())&&g.appendChild(f[n].cloneNode(!0));e()}),k.addEventListener("keyup",function(){const l=k.value.trim().toLowerCase();a(g);for(let m=0;m<f.length;m++){let n=f[m].textContent.trim().toLowerCase(),o=f[m].getAttribute("data-type");(n.includes(l)||o.includes(l))&&g.appendChild(f[m].cloneNode(!0))}e()})});
//creado por alexis aguirre https://github.com/Alex253/

function alerta()
    {
    var mensaje;
    var opcion = confirm("Registrate o inicia sesión para ver más");
    if (opcion == true) {
        location.href=´login.php´;
    } else {
        mensaje = "Has clickado Cancelar";
    }
    document.getElementById("ejemplo").innerHTML = mensaje;
}