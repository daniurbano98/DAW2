import React, { useState } from 'react';


function PasswordForm({onNext}) {
    
    const [email, setEmail] = useState('');
    const [password, setPassword] = useState('');
    const [emailError, setEmailError] = useState('');
    const [passwordError, setPasswordError] = useState('');
  
    const handleBlurEmail = () => {
      // Validació del camp email
      if (!email) {
        setEmailError('El email es obligatorio');
      } else if (!/\S+@\S+\.\S+/.test(email)) {
        setEmailError('El email no es válido');
      } else if (email.length < 5 || email.length > 50) {
        setEmailError('El email debe tener entre 5 y 50 caracteres');
      } else {
        setEmailError('');
      }
    };
  
    const handleBlurPassword = () => {
      // Validació del camp password
      if (!password) {
        setPasswordError('El password es obligatorio');
      } else if (password.length < 6 || password.length > 60) {
        setPasswordError('El password debe tener entre 6 y 60 caracteres');
      } else {
        setPasswordError('');
      }
    };
  
    const handleSubmit = (event) => {
      event.preventDefault();
      if (!email || !password) {
        setEmailError('El email es obligatorio');
        setPasswordError('El password son obligatorios');
      } else if(!emailError && !passwordError) {
        console.log('Formulari enviat!');
        onNext();
      }
    };
  
    return (
      <form onSubmit={handleSubmit}>
        <h2>Formulario</h2>
        <label>
          Email:
          <input type="email" name="email" value={email} onChange={(event) => setEmail(event.target.value)} onBlur={handleBlurEmail} />
        </label>
        {emailError && <div style={{ color: 'red' }}>{emailError}</div>}
        <label>
          Password:
          <input type="password" name="password" value={password} onChange={(event) => setPassword(event.target.value)} onBlur={handleBlurPassword} />
        </label>
        {passwordError && <div style={{ color: 'red' }}>{passwordError}</div>}
        <button type="submit">Siguiente</button>
      </form>
    );
  }


export default PasswordForm;