import Item from "./Item";

function List () {
    return (
        <>
            <h1>Minha Lista</h1>
            <ul>
                <Item marca="Ferrari" ano_lançamento={2020}/>
                <Item marca="Fiat" ano_lançamento={1950}/>
                <Item marca="Honda" ano_lançamento={2015}/>
                <Item marca="Hyundai" ano_lançamento={1999}/>
            </ul>
        </>

    )
}

export default List