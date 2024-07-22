//ABRIR MENU MOBILE
var controleMenuMobile = false

function abrirMenuMobile(e, param){
    if(!controleMenuMobile){
        e.innerHTML = '<i class="fas fa-times text-danger"></i>'
        controleMenuMobile = true
        document.getElementById("menu-mobile").style.cssText = 'height: 100vh;'
    }else{
        if(!param){e.innerHTML = '<i class="fas fa-bars"></i>'}else{document.querySelector(`.${param}`).innerHTML = '<i class="fas fa-bars"></i>'}
        controleMenuMobile = false
        document.getElementById("menu-mobile").style.cssText = 'height: 0vh;'
    }
}