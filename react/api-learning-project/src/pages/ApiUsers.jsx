import { useState, useEffect } from "react";
import UserCard from "../components/UserCard";
import UserForm from "../components/UserForm";
import { getStudent } from "../services/userService";
import { addStudent as addStudentAPI } from "../services/userService";
import { updateStudent } from "../services/userService";
import { deleteStudent } from "../services/userService";
import { useQuery } from "@tanstack/react-query";
import { useMutation } from "@tanstack/react-query";


function ApiUsers()
{
    const [users, setUsers] = useState([]);
    const [loading, setLoading] = useState(true);
    const [error, setError] = useState("");
    const [editingUser, setEditingUser] = useState(null)


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


        async function handleAddUser(student){
            // console.log(student);
            const newUser = await addStudentAPI(student);

            setUsers((prevUsers)=>[
                ...prevUsers,
                newUser
            ]);
        }

        async function handleUpdateUser(id, student){
            const updatedUser = await updateStudent(id, student);

            setUsers((prevUsers)=>
                prevUsers.map((user)=>{
                    return user.id===id 
                    ?
                    updatedUser 
                    :
                    user
                })
            
        );

        setEditingUser(null);
    }

    async function handleDeleteUser(id){
            await deleteStudent(id);

            setUsers((prevUsers)=>prevUsers.filter(
                    (user)=>user.id!==id
                )
            )
    }

    

        if (isloading) {

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
                <UserForm 
                addStudent={handleAddUser}
                updateStudent = {handleUpdateUser}
                editingUser = {editingUser}

                />
            {
                users.map((user)=>{
                    return(
                    <UserCard 
                    key={user.id}
                    user={user}
                    onEdit = {setEditingUser}
                    onDelete={handleDeleteUser}
                    />
                    )
                })
            
            
            }
            <br></br>

            <button onClick={() =>{
                mutate(formData)
            }}>
            Add User
            </button>
        </>
    )
}



export default ApiUsers;