import './App.css';
import Header from './components/Header';
import RegisterForm from './components/RegisterForm';
import React, { useState } from 'react';
import PasswordForm from './components/PasswordForm';
import PlanForm from './components/PlanForm';


function App() {
  // const [mostrarFormulari2, setMostrarFormulari2] = useState(false);
  // const [mostrarFormulari3, setMostrarFormulari3] = useState(false);

  const [currentForm, setCurrentForm] = useState(0);

  const handleNext = () => {
    setCurrentForm(currentForm + 1);
  }
  

  return (
    <div  className="App">
      {currentForm === 0 && <RegisterForm onNext={handleNext} />}
      {currentForm === 1 && <PasswordForm onNext={handleNext}/>}
      {currentForm === 2 && <PlanForm onNext={handleNext}/>}
    </div>
  );
}


export default App;
