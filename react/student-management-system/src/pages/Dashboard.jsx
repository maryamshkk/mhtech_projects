import Button from "../components/Button";
import { dashboardStats } from "../data/student";
import StatCard from "../components/StatCard";
import StudentCard from "../components/StudentCard";
import StudentForm from "../components/StudentForm";
import { useState } from "react";

function Dashboard()
{
    const [totalStudents, setTotalStudents] = useState(250);
    const [color, changeColor] = useState('#eef4ff')
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

    function addStudent(studentData){
        const newStudent = {
            id: students.length + 1,
            ...studentData
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
                color === '#eef4ff' 
                ? '#dbeafe'
                : '#eef4ff')

        }


    return(
        <main
        style={{ backgroundColor: color }}
        className=" p-8 transition-all duration-500">
        {/* Header */}

        <div className="bg-gradient-to-r from-indigo-700 via-blue-600 to-cyan-500 rounded-3xl text-white p-10 shadow-2xl mb-10">

            <h1 className="text-4xl font-bold">
                Dashboard
            </h1>

            <p className="mt-4 text-blue-100 text-lg">
                Manage students, monitor statistics and add new records easily.
            </p>

            {/* bg color change */}
            <div className="mt-6">
                <Button
                    text="Change Background"
                    type="button"
                    onClick={bgcolorchange}
                />
            </div>  
        </div>
        <div className="mb-6">

            <h2 className="text-3xl font-bold text-slate-800">
                Dashboard Overview
            </h2>

            <p className="text-slate-500">
                Quick insights about your system.
            </p>

        </div>
        
            <div className="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6 mb-12">
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

        <div className="bg-white rounded-3xl shadow-2xl border border-blue-100 p-8">

            <h2 className="text-3xl font-bold text-slate-800">
                Recent Students
            </h2>

            <p className="text-slate-500 mb-8">
                Newly added students in the system.
            </p>
        
            <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
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

        <div className="bg-white rounded-3xl mt-12 shadow-2xl border border-blue-100 p-8">

    <div className="mb-8">

        <h2 className="text-3xl font-bold text-slate-800">
            Add New Student
        </h2>

        <p className="text-slate-500">
            Fill out the details below to register a student.
        </p>

    </div>

    <StudentForm addStudent={addStudent} />

</div>
        
    </main>
    )
}

export default Dashboard;