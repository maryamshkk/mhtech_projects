import Button from "../components/Button";
import { dashboardStats } from "../data/student";
import StatCard from "../components/StatCard";
import StudentCard from "../components/StudentCard";
import { useState } from "react";

function Dashboard()
{
    const [totalStudents, setTotalStudents] = useState(250);
    const [color, changeColor] = useState('#ebf0fa')
    const [students, setStudents] = useState([
        {
            id: 1,
            name: "Maryam",
            department: "BSCS",
        },

        {
            id: 2,
            name: "Ahmed",
            department: "BSCS"
        },

        {
            id: 3,
            name: "Alishba",
            department: "BSCS"
        }, 

        {
            id: 4,
            name: "Sadia",
            department: "BSCS"
        }
    ])

    function addStudent(){
        const newStudent = {
            id: students.length + 1,
            name: "Hamza",
            department : "BSIT"
        }
        setStudents([
            ...students,
            newStudent
        ]);
        setTotalStudents(totalStudents+1);
    }

    function bgcolorchange()
    {
        // if(color == '#6597fc')
        // {
        //     changeColor('#ebf0fa')
        // }
        // else{
        //     changeColor('#6597fc')
        // }
            changeColor(
                color === '#ebf0fa' 
                ? '#6597fc'
                : '#ebf0fa')

        }


    return(
        <main style={{backgroundColor : color}}
        className="flex-1 p-8">
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
            <br></br>
            <br></br>
            <Button text="BgChange"
                    type="button"
                    onClick={bgcolorchange}
            />

            <div className="flex gap-4 mt-8">
            {
                

                dashboardStats.map((item) =>(
                    <StatCard
                        key={item.id}
                        title={item.title}
                        value={
                            item.key ==="students" ? totalStudents : item.value
                        }
                     />
                ))
            }
            
                
            </div>

            <div className="mt-10">

            <h2 className="text-2xl font-bold mb-6">
                Recent Students
            </h2>
                <div>
                    {
                students.map((student) =>(
                    <StudentCard
                        key = {student.id}
                        name = {student.name}
                        department = {student.department}
                    />
                
                ))
            }
                </div>
            </div>

        </main>
    )
}

export default Dashboard;