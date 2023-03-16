import React, { useState } from "react";

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
    <form onSubmit={handleSubmit}>
      <h2>Selecciona un plan:</h2>

      <div>
        <input
          type="radio"
          id="planBasico"
          name="plan"
          value="basico"
          checked={selectedPlan === "basico"}
          onChange={handlePlanSelection}
        />
        <label htmlFor="planBasico">Plan básico - Anuncios</label>
      </div>

      <div>
        <input
          type="radio"
          id="planEstandar"
          name="plan"
          value="estandar"
          checked={selectedPlan === "estandar"}
          onChange={handlePlanSelection}
        />
        <label htmlFor="planEstandar">Plan estándar</label>
      </div>

      <div>
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
