import { useState } from 'react'
import Navbar from './components/Navbar';
import Sidebar from './components/Sidebar';
import Footer from './components/Footer';
import Dashboard from './pages/Dashboard';


function App() {

  return (
    <>
      <Navbar />
      <Sidebar />
      <Dashboard />
      <Footer />
    </>
  );
}

export default App;
