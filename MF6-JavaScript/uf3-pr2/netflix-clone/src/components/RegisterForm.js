import React, { useState } from 'react';
import '../css/RegisterForm.css';
import Header from './Header.js';

  
    
function RegisterForm({ onNext }) {
  const [email, setEmail] = useState("");
  const [errors, setErrors] = useState({});

  const validateEmail = () => {
    const errors = {};
    const emailRegex = /^[\w-.]+@([\w-]+\.)+[\w-]{2,4}$/;

    if (!email) {
      errors.email = "Por favor ingrese su email";
    } else if (!emailRegex.test(email)) {
      errors.email = "Por favor ingrese un email válido";
    }

    setErrors(errors);
  };

  const handleEmailBlur = () => {
    validateEmail();
  };

  const handleSubmit = (event) => {
    event.preventDefault();

    validateEmail();

    if (Object.keys(errors).length === 0) {
      onNext();
    }
  };

  const handleEmailChange = (event) => {
    setEmail(event.target.value);
  };

  return (
    <form onSubmit={handleSubmit}>
      <Header />
      <div className="form-group">
        <label htmlFor="emailInput">Email</label>
        <input
          placeholder="Dirección de correo"
          type="email"
          className="form-control"
          id="emailInput"
          value={email}
          onChange={handleEmailChange}
          onBlur={handleEmailBlur}
          required
        />
        {errors.email && <div className="error">{errors.email}</div>}
      </div>

      <button type="submit" className="btn btn-primary">
        Empezar
      </button>
    </form>
  );
}

export default RegisterForm;
