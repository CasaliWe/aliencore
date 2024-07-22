// text area personalizada para texto empresa;
CKEDITOR.replace('texto-empresa');

// inserir preview imagem-empresa
document.getElementById("imagem-empresa").addEventListener('change', (event) => {
    var img = document.getElementById("preview-imagem-empresa");
    var file = event.target.files[0];
    
    if (file) {
        var reader = new FileReader();
        
        reader.onload = function(e) {
            img.src = e.target.result;
        }
        
        reader.readAsDataURL(file);
    }
});