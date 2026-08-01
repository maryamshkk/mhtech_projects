import { useState, useEffect } from "react";
import UserCard from "../components/UserCard";
import UserForm from "../components/UserForm";
import { addStudent as addStudentAPI } from "../services/userService";


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

        async function handleAddUser(student){
            // console.log(student);
            const newUser = await addStudentAPI(student);

            setUsers((prevUsers)=>[
                ...prevUsers,
                newUser
            ]);
        }



    return(
        <>
            <h1>
                API Learning
            </h1>
            <br></br>
                <UserForm 
                addStudent={handleAddUser}
                />
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