function validarCategoria(){
    var nome = document.getElementById('nome').value;
    var email = document.getElementById('email').value;
    var rg = document.getElementById('rg').value;
    var cep = document.getElementById('cep').value;
    var telefone = document.getElementById('telefone').value;
    var produto = document.getElementById('produto').value;
    var preco = document.getElementById('preco').value;
    
    if(nome == "" || email == ""|| rg == ""|| cep == ""|| telefone == ""|| produto == ""|| preco == "" ){
        document.getElementById('erro-categorias').removeAttribute('hidden');
    }else{
        document.getElementById('form-categoria').removeAttribute('onsubmit');
    }
}

$(document).ready(function(){
    $('#cep').mask("00000-000");
})
$(document).ready(function(){
    $('#telefone').mask("(00)0 0000-0000");
})


/*function validarEditCategoria(){
    var nome = document.getElementById('nome').value;
    var email = document.getElementById('email').value;
    var rg = document.getElementById('rg').value;
    var cep = document.getElementById('cep').value;
    var telefone = document.getElementById('telefone').value;
    var produto = document.getElementById('produto').value;
    var preco = document.getElementById('preco').value;
    
    if(nome == "" || email == ""|| rg == ""|| cep == ""|| telefone == ""|| produto == ""|| preco == "" ){
        document.getElementById('erro-categorias').removeAttribute('hidden');
    }else{
        document.getElementById('form-categoria').removeAttribute('onsubmit');
    }
}

*/

