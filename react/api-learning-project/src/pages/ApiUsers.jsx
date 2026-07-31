import { useState, useEffect } from "react";

function ApiUsers()
{
    const [users, setUsers] = useState([]);

    useEffect(()=>{
        console.log("Compound Mounted");

        async function fetchUsers()
        {
            const response = await fetch(
                "https://jsonplaceholder.typicode.com/users"
            );
            const data = await response.json();
            setUsers(data);
            console.log(data);
        }
        fetchUsers();
    }, [])

    return(
        <>
            <h1>
                API Learning
            </h1>

            {/* {
                users.map(()=>{
                    <div>
                    <h1>{users.name}</h1>
                    <p>{users.}</p>
                    </div>
                })
            } */}
        </>
    )
}

export default ApiUsers;