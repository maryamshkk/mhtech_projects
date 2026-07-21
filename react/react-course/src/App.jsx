import { useState } from 'react'
import reactLogo from './assets/react.svg'
import viteLogo from './assets/vite.svg'
import heroImg from './assets/hero.png'
import Greeting from './components/Greeting';
import MyButton from './components/Button';
import Navbar from './components/Navbar';
import Footer from './components/Footer';
import Header from "./components/Header";
import './App.css';

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
    
       <Greeting name="Maryam" age="21"/>
       <Greeting name="Ahmed" age="22"/>
       <Greeting name="Ali" age="23"/>
       <MyButton />
       <MyButton />
       <MyButton />
    

  
      <Navbar />
      <h1>Home Page</h1>
      <Header />
      <MyButton />
      <br></br>
      <MyButton />
      <br></br>
      <MyButton />
      <br></br>
      <MyButton />
      <Footer />
    </>

    


  );
}

export default App;
