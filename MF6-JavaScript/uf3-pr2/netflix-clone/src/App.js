import './App.css';
import RegisterForm from './components/RegisterForm';
import React, { useState } from 'react';
import PasswordForm from './components/PasswordForm';
import PlanForm from './components/PlanForm';
import PaymentForm from './components/PaymentForm';
import FinalView from './components/FinalView';

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
      {currentForm === 3 && <PaymentForm onNext={handleNext}/>}
      {currentForm === 4 && <FinalView/>}
    </div>
  );
}


export default App;
