var mostrarSenha1 = document.getElementById('mostrar-senha1')
var mostrarSenha2 = document.getElementById('mostrar-senha2')

mostrarSenha1.addEventListener('click', function(){

    let senha = document.getElementById('senha')

    if(senha.type == "password"){
        senha.type = "text"
        this.style.opacity = "1"
    }else {
        senha.type = "password"
        this.style.opacity = ".4"
    }

})

mostrarSenha2.addEventListener('click', function(){

    let senha = document.getElementById('confirmar-senha')

    if(senha.type == "password"){
        senha.type = "text"
        this.style.opacity = "1"
    }else {
        senha.type = "password"
        this.style.opacity = ".4"
    }

})