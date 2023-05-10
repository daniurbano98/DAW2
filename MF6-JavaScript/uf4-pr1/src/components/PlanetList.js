import React, { useState, useEffect } from "react";
import { BrowserRouter, Route, Switch } from 'react-router-dom';
import '../App.css';


const PlanetList = () => {
  const [planets, setPlanets] = useState([]);
  const [page, setPage] = useState(1);
  const [totalPages, setTotalPages] = useState(1);
  const [selectedPlanet, setSelectedPlanet] = useState(null);
  const [selectedResident, setSelectedResident] = useState(null);


  const goToFirstPage = () => setPage(1);
  const goToPrevPage = () => setPage(page - 1);
  const goToNextPage = () => setPage(page + 1);
  

  const handleClick = (planetName) => {
      setSelectedPlanet(planetName);
    };
  

  const fetchPlanets = async () => {
      const response = await fetch(`https://swapi.dev/api/planets/?page=${page}`);
      const data = await response.json();
      setPlanets(data.results);
      setTotalPages(Math.ceil(data.count / 10));
    };

  

  useEffect(() => {
    const xhr = new XMLHttpRequest();
    xhr.open("GET", `https://swapi.dev/api/planets/?page=${page}`,true);
    xhr.onload = () => {
      if (xhr.status === 200) {
        const data = JSON.parse(xhr.responseText);
        setPlanets(data.results);
      }
    };
    xhr.send();
  }, [page]);

  function handlePlanetClick(planetUrl) {
    fetch(planetUrl)
      .then(response => response.json())
      .then(data => {
        setSelectedPlanet(data);
        setSelectedResident(null);
      })
      .catch(error => console.error(`Error al obtener la información del planeta: ${error}`));
  }

  function handleBackButtonClick() {
    setSelectedPlanet(null);
  }

  //RESIDENTES

  const handleResidentClick = async (resident) => {
    const res = await fetch(resident);
    const data = await res.json();
    setSelectedResident(data);
  };

  if(selectedPlanet  && !selectedResident) {
 
  return (
    <div className="container mb-5">
    <div className="row"> 
    <div className="col-12"> 
        <div className="p-6 bg-white rounded-lg shadow-lg">
          <h1 className="mb-2 text-2xl font-bold">{selectedPlanet.name}</h1>
          <p className="mb-2">Clima: {selectedPlanet.climate}</p>
          <p className="mb-2">Gravedad: {selectedPlanet.gravity}</p>
          <p className="mb-4">Población: {selectedPlanet.population}</p>
          <h2 className="mb-2 text-lg font-bold">Residentes de {selectedPlanet.name}:</h2>
          <ul>
            {selectedPlanet.residents.map((resident, index) => (
              <li key={index}>
              <button className="btn btn-link"
              onClick={() => handleResidentClick(resident)}>
                Residente número {index + 1}
              </button>
              </li>
            ))}
          </ul>
          <button className="btn btn-primary"
          onClick={handleBackButtonClick}>Volver</button>
        </div>
    </div>
    </div>
    </div>
    
  );
}

if (selectedResident) {
  return (
  <div className="container">
    <div className="row">
      <div className="col-12">
      <div className="p-6 bg-white rounded-lg shadow-lg">
        <h2>{selectedResident.name}</h2>
        <div className="mt-5 row">
          <div className="col-md-6">
            <p>Altura: {selectedResident.height}</p>
            <p>Peso: {selectedResident.mass}</p>
            <p>Color de pelo: {selectedResident.hair_color}</p>
          </div>
          
          <div className="col-md-6">
            <p>Color de piel: {selectedResident.skin_color}</p>
            <p>Color de ojos: {selectedResident.eye_color}</p>
            <p>Año de nacimiento: {selectedResident.birth_year}</p>
            <p>Genero: {selectedResident.gender}</p>
          </div>
        </div>
        <button className="btn btn-primary" onClick={() => setSelectedResident(null)}>Volver</button>
        </div>
      </div>
      </div>
    </div>
  );
}


return(
  <div className="container">
    <div className="row">
      <div className="col-12">
        
        <div className="container p-6 bg-white rounded-lg shadow-lg justify-content-center align-items-center w-50">
          <ul className="text-center list-group">
            {planets.map(planet => (
              <li className=" list-group-item" 
              key={planet.url} onClick={() => handlePlanetClick(planet.url)}>
                {planet.name}
              </li>  
            ))}
            </ul>
        </div>
            
          <div className="container mt-3 d-flex justify-content-around w-50">
            <button className="btn btn-primary"  onClick={goToFirstPage}>Primera página</button>
            <button className="btn btn-primary"  onClick={goToPrevPage} disabled={page === 1}>Página anterior</button>
            <button className="btn btn-primary"  onClick={goToNextPage}>Siguiente página</button>
          </div>
        
      </div>
    </div>
  </div>
    );

        }


export default PlanetList;




