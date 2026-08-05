import { useQuery } from "@tanstack/react-query";
import UserCard from "../components/UserCard";
import { getUsers, addUser, deleteStudent } from "../services/userService";
import { useMutation, useQueryClient } from "@tanstack/react-query";
import UserFormmQuery from "../components/UserFormmQuery";
import { updateStudent } from "../services/userService";
import { useState, useEffect } from "react";
 
function QueryUsers(){
    const [editingUser, setEditingUser] = useState(null);
    const queryClient = useQueryClient();

    const {
        data,
        isLoading,
        error 
    } = useQuery({
        queryKey: ["users"],
        queryFn:getUsers,
        staleTime: 60000,
        gcTime:300000, 
        refetchOnWindowFocus:true,
    })

       
    const addUserMutation = useMutation({
        mutationFn: addUser,

        onSuccess: (data) =>{
            console.log(data);

            queryClient.invalidateQueries({
                queryKey:["users"],
            });
        }
    });

    // const updateUserMutation = useMutation({
    //     mutationFn:({id, student}) =>
    //         updateStudent(id, student),
    //     onSuccess: (data) => {
    //         console.log(data)
    //         queryClient.invalidateQueries({
    //             queryKey: ["users"]
    //         })
    //     }
    // })

    const deleteUserMutation = useMutation({
        mutationFn: deleteStudent,
        onSuccess: () => {
            queryClient.invalidateQueries({
                queryKey: ["users"]
            })
        }
    })
    


    if(isLoading){
        return <h1>Loading...</h1>;
    }
    if(error){
        return <h1>Something Went Wrong</h1>
    }

        const users = data || [];

    
    return(
        <>
        <div>
            Tanstack Query Users
            
            <UserFormmQuery 
            addUser={addUserMutation.mutate}
            updateUser={updateUserMutation.mutate}
            editingUser={editingUser}
            />

            { 
                users.map((user)=>(
                    <UserCard 
                        key={user.id}
                        user={user}
                        onEdit={setEditingUser}           
                        ondelete={deleteUserMutation.mutate}
                        
                    />
            ))
            }

        </div>
        </>
    )
}
export default QueryUsers;