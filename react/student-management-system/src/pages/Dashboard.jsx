import Button from "../components/Button";
import { dashboardStats } from "../data/student";
import StatCard from "../components/StatCard";
import { useState } from "react";

function Dashboard()
{
    const [totalStudents, setTotalStudents] = useState(250);

    function addStudent(){
        setTotalStudents(totalStudents+1);
    }


    return(
        <main className="flex-1 p-8">
            <h2 className="text-3xl font-bold mb-4">
                Dashboard
            </h2>            
            
            <p className="text-gray-500 mt-2">
                Welcome to Student Managemnt System
            </p>
            <Button text="Add Student"
                    type="button" 
                    onClick={addStudent}
            />

            <div className="flex gap-4 mt-8">
            {
                

                dashboardStats.map((item) =>(
                    <StatCard
                        key={item.id}
                        title={item.title}
                        value={
                            item.key ==="students"
                            ? totalStudents
                            : item.value
                        }
                     />
                ))
            }
            
                
            </div>

        </main>
    )
}

export default Dashboard;