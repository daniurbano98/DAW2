import React, { useState } from "react";
import "../css/PasswordForm.css";

function PasswordForm({ onNext }) {
  const [email, setEmail] = useState("");
  const [password, setPassword] = useState("");
  const [emailError, setEmailError] = useState("");
  const [passwordError, setPasswordError] = useState("");

  const handleBlurEmail = () => {
    // Validació del camp email
    if (!email) {
      setEmailError("El email es obligatorio");
    } else if (!/\S+@\S+\.\S+/.test(email)) {
      setEmailError("El email no es válido");
    } else if (email.length < 5 || email.length > 50) {
      setEmailError("El email debe tener entre 5 y 50 caracteres");
    } else {
      setEmailError("");
    }
  };

  const handleBlurPassword = () => {
    // Validació del camp password
    if (!password) {
      setPasswordError("El password es obligatorio");
    } else if (password.length < 6 || password.length > 60) {
      setPasswordError("El password debe tener entre 6 y 60 caracteres");
    } else {
      setPasswordError("");
    }
  };

  const handleSubmit = (event) => {
    event.preventDefault();
    if (!email || !password) {
      setEmailError("El email es obligatorio");
      setPasswordError("El password es obligatorio");
    } else if (!emailError && !passwordError) {
      onNext();
    }
  };

  return (
    <form id="passwordForm" onSubmit={handleSubmit}>
      <h2 class="titulo-password">Crea una contraseña para empezar la suscripción</h2>
      <p class="texto">¡Faltan algunos pasos!</p> <br></br>
      <p class="texto">También odiamos el papeleo</p>
      <div class="flex">
        <input
          type="email"
          name="email"
          value={email}
          onChange={(event) => setEmail(event.target.value)}
          onBlur={handleBlurEmail}
          placeholder="Dirección de correo"
        />

        {emailError && <div style={{ color: "red" }}>{emailError}</div>}

        <input
          type="password"
          name="password"
          value={password}
          onChange={(event) => setPassword(event.target.value)}
          onBlur={handleBlurPassword}
          placeholder="Añadir una contraseña"
        />

        {passwordError && <div style={{ color: "red" }}>{passwordError}</div>}
        
        <div class="inline-flex">
          <input type="checkbox" id="checkbox"></input>
          <label for="checkbox">No, no quiero recibir ofertas especiales</label>
        </div>
       
        
        <button type="submit">Siguiente</button>
      </div>
    </form>
  );
}

export default PasswordForm;
