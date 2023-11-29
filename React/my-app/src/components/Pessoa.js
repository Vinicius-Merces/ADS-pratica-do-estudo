
function Pessoa({nome, idade, profissao, foto}) {
    return (
        <div>
           <p>Fala aí {nome}, suave? </p>
            <img src={foto} alt={nome} />
            <h2>Nome: {nome}</h2>
            <p>Idade: {idade}</p>
            <p>Profissão: {profissao}</p>
        </div>
    )
}

export default Pessoa