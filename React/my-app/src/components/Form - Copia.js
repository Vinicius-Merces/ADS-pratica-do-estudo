import { useState } from 'react'

function Form (){

    function cadastrarUsuario(e) {
        e.preventDefault();
        console.log(name)
        console.log(password)
        console.log("Cadastrou um user")
    }

    const [name, setName]=useState()
    const [password, setPassword]=useState()
    return (
        <div>
            <h1>Meu cadastro:</h1>
            <form onSubmit={cadastrarUsuario}>
                <div>
                    <laber htmlFor="name">Nome: </laber>
                    <input 
                    type="text" 
                    id="name" 
                    name="name"
                    placeholder="Digite seu nome!"
                    onChange={(e) => setName(e.target.value)}
                    />
                </div>
                <div>
                    <label htmlFor="password">Senha: </label>
                    <input type="password" 
                    id="password" 
                    name="passowrd"
                    placeholder="Digite sua senha"
                    onChange={(e) => setPassword(e.target.value)}
                    />
                    
                </div>
                <div>
                    <input type="submit" value="Cadastrar"/>
                </div>
            </form>
        </div>
    )
}

export default Form