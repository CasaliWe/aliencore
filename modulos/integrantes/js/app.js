// BUSCAR INTEGRANTES
var integrantes = [
    {nome: 'Weslei Casali', img: `${base_url}assets/imagens/weslei.jpeg`, instagram: 'https://www.instagram.com/we_casali/', descricao: 'Weslei Casali, com 26 anos de idade, possui uma sólida trajetória de 11 anos como baterista. Desde 2015, ele tem participado ativamente do cenário musical de Passo Fundo, tocando em diversas bandas e explorando uma ampla gama de estilos musicais, que vão desde o rock internacional até o rock nacional. Suas influências incluem bandas como Slipknot, Avenged Sevenfold, Bullet for My Valentine e Linkin Park. Além disso, Weslei é o fundador da banda Alien Core, onde continua a deixar sua marca na cena musical local.'},
    {nome: 'Jean Machado', img: `${base_url}assets/imagens/jean.jpeg`, instagram: 'https://www.instagram.com/jean_machado__/', descricao: 'Jean é um talentoso guitarrista cuja paixão pela música começou aos 10 anos, quando recebeu sua primeira guitarra. Inspirado por lendas como Slash, Eddie Clarke e Mick Mars, ele mergulhou de cabeça no mundo da guitarra, buscando aperfeiçoar suas habilidades e desenvolver seu próprio estilo único.'},
    {nome: 'Gui Zordan', img: `${base_url}assets/imagens/gui.jpg`, instagram: 'https://www.instagram.com/gui.zordan/', descricao: 'Guilherme Zordan é um profissional que atua na área de engenharia de áudio. Ele tem experiência em trabalhar com instrumentos de corda e vocalização. Guilherme é conhecido por sua competência técnica e compreensão dos aspectos acústicos e eletrônicos da produção musical. Ele se destaca pela forma como incorpora sua paixão por instrumentos de corda e vocalização em seu trabalho.'}
]



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