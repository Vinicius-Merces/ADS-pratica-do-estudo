import './App.css';
import HelloWorld from './components/HelloWorld';


function App() {
  const name = "Vinicius"

  function sum(a, b) {
    return a + b;
  }

  return (
  <div className='App'>
    <h1> Olá react!</h1>
    <p>Meu primeiro app!</p>
    <h2>Olá, {name}</h2>
    <p>Soma: {sum(1,6)}</p>
    <HelloWorld></HelloWorld>
  </div>
  );
}

export default App;
