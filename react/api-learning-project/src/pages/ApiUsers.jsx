import { useState, useEffect } from "react";
import UserCard from "../components/UserCard";
import UserForm from "../components/UserForm";

function ApiUsers()
{
    const [users, setUsers] = useState([]);
    const [loading, setLoading] = useState(true);
    const [error, setError] = useState("");

    useEffect(()=>{
        // console.log("Compound Mounted");

        async function fetchUsers() {

        try {

            const response = await fetch(
                "https://jsonplaceholder.typicode.com/users"
            );

            const data = await response.json();

            setUsers(data);

        }
        catch (error) {

            setError("Failed to load users.");

        }

        setLoading(false);

    }
    fetchUsers();
    
}, [])
        if (loading) {

        return <h1>Loading...</h1>;
        }
        if (error) {

        return <h1>{error}</h1>;
    
        }
    return(
        <>
            <h1>
                API Learning
            </h1>
            <br></br>
                <UserForm />
            {
                users.map((user)=>{
                    return(
                    <UserCard 
                    key={user.id}
                    user={user}
                    
                    />
                    )
                })
            
            
            }
            <br></br>


        </>
    )
}


export default ApiUsers;