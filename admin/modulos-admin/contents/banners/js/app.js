//inserindo ids banner mobile e desktop dinâmico
function inserirIdModalAddBanner(refDesktop, refMobile, pag){
    document.getElementById("pagina-banner").textContent = `Atualizar banner ${pag}`
    document.getElementById("refBannerDesktop").value = refDesktop
    document.getElementById("refBannerMobile").value = refMobile
}