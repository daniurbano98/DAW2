import React, { useState, useEffect } from "react";
import { BrowserRouter, Route, Switch } from 'react-router-dom';
import Planet from  "./Planet";

const PlanetList = () => {
  const [planets, setPlanets] = useState([]);
  const [page, setPage] = useState(1);
  const [totalPages, setTotalPages] = useState(1);
  

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

  const goToFirstPage = () => setPage(1);
  const goToPrevPage = () => setPage(page - 1);
  const goToNextPage = () => setPage(page + 1);


  return (
    <div>
      {planets.map((planet, index) => (
        <div key={index}>
          <h2>{planet.name}</h2>
          <p>Climate: {planet.climate}</p>
          <p>Gravity: {planet.gravity}</p>
          <p>Population: {planet.population}</p>
          {/* <BrowserRouter>
            <button>
              <Switch>
                <Route path="https://swapi.dev/api/planets/">
                  <Planet/>
                </Route>
              </Switch>
            </button>
          </BrowserRouter> */}
        </div>
      ))}
       <div>
        <button onClick={goToFirstPage}>Primera página</button>
        <button onClick={goToPrevPage}>Página anterior</button>
        <span>Página {page} de {totalPages}</span>
        <button onClick={goToNextPage}>Siguiente página</button>
      </div>
    </div>
  );
};

export default PlanetList;
