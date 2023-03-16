import React, { Component, useState } from "react";
import "../css/PaymentForm.css";
import imgVisa from "../img/visa.jpg";
import imgMasterCard from "../img/mastercard.png";
import imgAmex from "../img/Amex.png";

function PaymentForm({ onNext }) {
  const [firstName, setFirstName] = useState("");
  const [lastName, setLastName] = useState("");
  const [cardNumber, setCardNumber] = useState("");
  const [expirationDate, setExpirationDate] = useState("");
  const [cvv, setCvv] = useState("");
  const [formValid, setFormValid] = useState(false);

  const [nameError, setNameError] = useState("");
  const [lastNameError, setLastNameError] = useState("");
  const [cardNumberError, setCardNumberError] = useState("");
  const [expirationDateError, setExpirationDateError] = useState("");
  const [cvvError, setCvvError] = useState("");

  const handleSubmit = (event) =>{
    event.preventDefault();

    if (!firstName || !lastName || !cardNumber || !expirationDate || !cvv) {
        setNameError("El nombre es obligatorio");
        setLastNameError("El apellido es obligatorio");
        setCardNumberError("El número de tarjeta es obligatorio");
        setExpirationDateError("La fecha de caducidad es obligatoria");
        setCvvError("El CVV es obligatorio");
      } else if (!nameError && !lastNameError && !cardNumberError
        && !expirationDateError && !cvvError ) {
        onNext();
      }
  }

  const handleBlurExpiryValidate=()=> {
    let now = new Date();
    let currentYear = now.getFullYear() % 100;
    let currentMonth = now.getMonth() + 1;
    let maxYear = currentYear + 25;

    let [expiryMonth, expiryYear] = expirationDate.split("/");

    if (!expiryMonth || !expiryYear) {
      setExpirationDateError(
        "Porfavor introduce una fecha de caducidad valida"
      );
      return false;
    }

    let month = parseInt(expiryMonth);
    let year = parseInt(expiryYear);

    if (month < 1 || month > 12) {
      setExpirationDateError(
        "Porfavor introduce una fecha de caducidad valida"
      );
      
    } else if (year < currentYear || year > maxYear) {
      setExpirationDateError(
        `El año de caducidad debe ser entre ${currentYear} y ${maxYear}`
      );
     
    } else if (year === currentYear && month < currentMonth) {
      setExpirationDateError(
        "La fecha de caducidad no puede ser antes de la fecha actual"
      );
      
    } else {
      setExpirationDateError("");
    }
  }

  
  const handleBlurvalidateCvv = () => {
    let cvvRegex = /^[0-9]{3,4}$/;

    if (!cvv.match(cvvRegex)) {
      setCvvError("Porfavor introduce un CVV correcto");
    }else{
        setCvvError("");
    }
    
  }

  
  const handleBlurValidateName =()=> {
    if (firstName.length < 3) {
      setNameError("El nombre tiene que tener al menos tres caracteres");
    } else if (/\d/.test(firstName)) {
      setNameError("El nombre no puede contener numeros");
    } else {
      setNameError("");
    }
  }

  const handleBlurValidateCardNumber=()=> {
    let cardNumberRegex = /^[0-9]{16}$/;
    let isValid = cardNumber.match(cardNumberRegex);

    if (!isValid) {
      setCardNumberError("Porfavor introduce un número de 16 dígitos");
    } else {
      setCardNumberError("");
    }
  }


  const handleBlurValidateLastName=()=> {
    if (lastName.length < 2) {
      setLastNameError("El apellido tiene que tener al menos dos carácteres");
    } else if (/\d/.test(lastName)) {
      setLastNameError("El apellido no puede contener números");
    } else {
      setLastNameError("");
    }
  }


  return (
    <form class="form" onSubmit={handleSubmit}>
      <h1>Configura tu tarjeta de crédito o débito</h1>
      <div class="imagenes">
        <img src={imgVisa} alt="visa"></img>
        <img src={imgMasterCard} alt="mastercard"></img>
        <img src={imgAmex} alt="americanExpress"></img>
      </div>
      <div class="container">
        <div>
          <input
            id="firstName"
            type="text"
            value={firstName}
            onChange={(event) => setFirstName(event.target.value)}
            onBlur={handleBlurValidateName}
            placeholder="Nombre"
          />
          {nameError && <div style={{ color: "red" }}>{nameError}</div>}
        </div>
        <div>
          <input
            id="lastName"
            type="text"
            value={lastName}
            onChange={(event) => setLastName(event.target.value)}
            onBlur={handleBlurValidateLastName}
            placeholder="Apellidos"
          />
          {lastNameError && <div style={{ color: "red" }}>{lastNameError}</div>}
        </div>

        <div>
          <input
            id="cardNumber"
            type="text"
            value={cardNumber}
            onChange={(event) => setCardNumber(event.target.value)}
            onBlur={handleBlurValidateCardNumber}
            maxLength={19}
            placeholder="Número de tarjeta"
          />
        </div>
        {cardNumberError && <div style={{ color: "red" }}>{cardNumberError}</div>}
        <div>
          <input
            id="expiry"
            type="text"
            value={expirationDate}
            onChange={(event) => setExpirationDate(event.target.value)}
            onBlur={handleBlurExpiryValidate}
            placeholder="Fecha de vencimiento(MM/AA)"
          />
        </div>
        {expirationDateError && <div style={{ color: "red" }}>{expirationDateError}</div>}
        <div>
          <input
            id="cvv"
            type="text"
            value={cvv}
            onChange={(event) => setCvv(event.target.value)}
            onBlur={handleBlurvalidateCvv}
            maxLength={4}
            placeholder="Código de seguridad(CVV)"
          />
        </div>
        {cvvError && <div style={{ color: "red" }}>{cvvError}</div>}
        <button type="submit">Iniciar suscripción de pago</button>
      </div>
    </form>
  );
}

export default PaymentForm;
