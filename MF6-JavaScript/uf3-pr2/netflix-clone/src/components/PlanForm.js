import React, { useState } from "react";
import "../css/PlanForm.css";

function PlanForm({ onNext }) {
  const [selectedPlan, setSelectedPlan] = useState("");

  const handlePlanSelection = (event) => {
    setSelectedPlan(event.target.value);
  };

  const handleSubmit = (event) => {
    event.preventDefault();

    if (selectedPlan !== "") {
      onNext();
    }
  };

  return (
    <form class="plan-form" onSubmit={handleSubmit}>
      <h2 class="title">Selecciona el plan ideal para ti</h2>

      <h4>Ve todo lo que quieras.</h4>
      <h4>Recomendaciones exclusivas para ti.</h4>
      <h4>Cambia de plan o cancélalo cuando quieras</h4>

      <div class="options">
        <input
          type="radio"
          id="planBasico"
          name="plan"
          value="basico"
          checked={selectedPlan === "basico"}
          onChange={handlePlanSelection}
        />
        <label htmlFor="planBasico">Plan básico - Anuncios</label>

        <input
          type="radio"
          id="planEstandar"
          name="plan"
          value="estandar"
          checked={selectedPlan === "estandar"}
          onChange={handlePlanSelection}
        />
        <label htmlFor="planEstandar">Plan estándar</label>

        <input
          type="radio"
          id="planPremium"
          name="plan"
          value="premium"
          checked={selectedPlan === "premium"}
          onChange={handlePlanSelection}
        />
        <label htmlFor="planPremium">Plan premium</label>
      </div>
      <button type="submit" disabled={selectedPlan === ""}>
        Siguiente
      </button>
    </form>
  );
}

export default PlanForm;
