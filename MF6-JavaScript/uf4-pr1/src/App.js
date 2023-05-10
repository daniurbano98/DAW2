import logo from './logo.svg';
import './App.css';
import PlanetList from "./components/PlanetList";



function App() {
  return (
    <div>
      <h1 className="mb-5 font-bold text-center underline">Star Wars Planets</h1>
      <PlanetList />
    </div>
  );
}

export default App;
