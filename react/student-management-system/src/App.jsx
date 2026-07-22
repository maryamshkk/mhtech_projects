import { useState } from 'react'
import Navbar from './components/Navbar';
import Sidebar from './components/Sidebar';
import Footer from './components/Footer';
import Dashboard from './pages/Dashboard';


function App() {

  return (
    <>
      <Navbar title="Student Management System" username="Maryam" year={2026}/>
      <Sidebar />
      <Dashboard />
      <Footer />
    </>
  );
}

export default App;
