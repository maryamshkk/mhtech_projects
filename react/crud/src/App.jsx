import StudentForm from './components/StudentForm'
import Dashboard from './pages/Dashboard'
import Count from './components/count';
import { useState, useEffect } from 'react';

function App() {
  // api se jo users ayein ge woh iss mei store hon ge 
    const [users, setUsers] = useState([]);
    // loading state
    const [loading, setLoading] = useState(true);
    
    useEffect(() => {
      // console.log("API call");

      fetch("https://jsonplaceholder.typicode.com/users")
        .then((response) => response.json())
        .then((data)=>{
        // console.log(data);
          
          setLoading(false);
          setUsers(data);
      })
        // console.log(response);
    }, [])
      if(loading){
        return <h1>loading...</h1>
      }
  return (
    <>
    <Dashboard />
    <Count />

    <div>
      
      {console.log(users)}
      {
        users.map((user)=>{
          return(

            <div key={user.id}>
            <h2>{user.name}</h2>
            <p>{user.email}</p>
            <p>{user.phone}</p>
            </div>
          )
        })
      }
    </div>
    </>
  );
}

export default App;
