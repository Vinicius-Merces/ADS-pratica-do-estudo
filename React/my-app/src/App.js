import './App.css';
import Pessoa from './components/Pessoa';
import img from './assets/meju2.png';


function App() {
const nome="Vinicius"

 
  return (
  <div className='App'>
    <Pessoa 
    nome={nome} 
    idade="27" 
    profissao="Amor da Ju <3" 
    foto={img} />
  </div>
  );
}

export default App;
