import { useState } from 'react'
import reactLogo from './assets/react.svg'
import viteLogo from './assets/vite.svg'
import heroImg from './assets/hero.png'
import greeting from '/components/greeting';
import './App.css'

function App() {

      const name = "maryam";
      const age = 22;
      const firstname = "maryam";
      const lastname = "sheikh";
      const city = "lahore";

  return (
    <>
      <h1> hello to react {name}</h1>
      <p> {age + 20}</p>
      {/* <p> react </p> */}
      <h5>{firstname} {lastname}</h5>
      <h4>{city.toUpperCase()}</h4>
    </>
  );
}

export default App;
