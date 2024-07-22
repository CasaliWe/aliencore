



//ANIMAÇÃO DE DIGITAÇÃO
// var titleAnima = document.querySelector('.anima-digitar')
// var backTexto = document.querySelector('.anima-digitar').textContent

// function startAnimaDigitar(){

//      var texto = titleAnima.textContent

//      var loopRemove = setInterval(() => {

//         if(texto.length == 1){
//              clearInterval(loopRemove)
//              segundoAnimaDigitar();
//         }
         
//         texto = titleAnima.textContent.slice(0, -1)
//         titleAnima.textContent = texto
        
//      }, 100);

// }startAnimaDigitar();

// function segundoAnimaDigitar(){

//     var arrayLetras = backTexto.split('')
    
//     arrayLetras.forEach((letra, i)=>{
//           setTimeout(() => {
//             titleAnima.textContent += letra
//             if(i == arrayLetras.length -1){
//                  setTimeout(() => {
//                     startAnimaDigitar();
//                  }, 2000);
//             }
//           }, 100 * i);
//     })
 
// }
