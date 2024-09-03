// MOSTRAR INTEGRANTES
function mostrarIntegrantes(){
    var pai = document.querySelector('._container-integrantes')

    var quantidade = integrantes.length
    var col;
    if(quantidade == 3){
        col = '4'
    }else{
        col = '3'
    }

    integrantes.forEach(integrante => {
        pai.innerHTML += `
            <div data-aos="fade-up" class="col-12 col-lg-${col} p-3">
                <div class="_container-integrantes-img"> <img onclick="abrirApresentacao('${integrante.nome}')" class="_hover-img-integrante" src="${integrante.img}"> </div>
                <a href="${integrante.instagram}" target="_blank" class="_instagram-integrante"> <i class="fab fa-instagram me-2"></i> ${integrante.nome} </a>
            </div>
        `
    });
}
mostrarIntegrantes();






//ABRIR MODAL APRESENTAÇÃO
function abrirApresentacao(musico){

    integrantes.forEach((integrante)=>{
        if(integrante.nome == musico){
            document.getElementById("img-apresentacao").src = `${integrante.img}`
            document.getElementById('nome-apresentacao').innerHTML = `${integrante.nome}`
            digitalizar(`${integrante.descricao}`);
            document.getElementById("apresentacao-integrantes").style.cssText = 'opacity: 1; width: 100%;'
        }
    })



    function digitalizar(descricao){

        document.getElementById("descri-apresentacao").innerHTML = ''
        document.querySelector("._btn-alien").classList.add("d-none")

        var letras = descricao.split('')
        letras.forEach((letra, i)=>{
            setTimeout(() => {
                document.getElementById("descri-apresentacao").innerHTML += letra

                if(i == letras.length - 1){
                    document.getElementById("btn-integrante-close").classList.remove("d-none")
                }
            }, 10 * i);
        })

    }

}


//FECHAR MODAL APRESENTAÇÃO
function fecharApresentacao(){
      document.getElementById("apresentacao-integrantes").style.cssText = 'opacity: 0; width: 0%;'
      document.getElementById("btn-integrante-close").classList.add("d-none")
}