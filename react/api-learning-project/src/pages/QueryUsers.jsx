import { useQuery } from "@tanstack/react-query";
import UserCard from "../components/UserCard";
import { getStudent } from "../services/userService";


function QueryUsers(){

    const {
        data,
        isLoading,
        error 
    } = useQuery({
        queryKey: ["users"],
        queryFn:getStudent
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
            { 
                users.map((user)=>(
                    <UserCard 
                        key={user.id}
                        user={user}
                    />
            ))
            }
        </div>
        </>
    )
}
export default QueryUsers;