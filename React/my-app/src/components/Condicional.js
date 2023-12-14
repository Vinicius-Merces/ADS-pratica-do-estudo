import {useState} from 'react'


function Condicional() {

    const [email, setEmail] = useState()
    const [userEmail, setUserEmail] = useState()

    function enviarEmail(e){
        e.preventDefault()
        setUserEmail(email)

    }

    function limparEmail() {
        setUserEmail()
    }

    return (
        <div>
            <h2>Cadastre seu e-mail:</h2>
            <form>
                <input type="email" 
                placeholder="Digite seu e-mail..." 
                onChange={(e) => setEmail(e.target.value)}/>
                <button type='submit' onClick={enviarEmail}>Enviar e-mail</button>
                {userEmail &&(
                    <div>
                        <p>O e-mail do usuario é: {userEmail}</p>
                        <button onClick={limparEmail}>Limpar e-mail</button>
                    </div>
                )}
            </form>

        </div>
    )
}

export default Condicional