import { useState } from 'react'
import Navbar from './components/Navbar';
import Sidebar from './components/Sidebar';
import Footer from './components/Footer';
import Dashboard from './pages/Dashboard';
import MainLayout from './components/MainLayout';

function App() {

  return (
    <>
    <div className="min-h-screen flex flex-col bg-gray-100">
      <Navbar title="Student Management System"/>

      <MainLayout>
        <Sidebar />
        <Dashboard />
      </MainLayout>
      
      <Footer />
    </div>
    </>
  );
}

export default App;
