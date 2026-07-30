import Button from "../components/Button";
import { dashboardStats } from "../data/student";
import StatCard from "../components/StatCard";
import StudentCard from "../components/StudentCard";
import StudentForm from "../components/StudentForm";
import { useEffect, useState} from "react";

function Dashboard()
{
    const [totalStudents, setTotalStudents] = useState(250);
    const [color, changeColor] = useState('#eef4ff')
    const [students, setStudents] = useState([
        {
            id: 1,
            name: "Maryam",
            department: "BSCS",
            semester: "4"
        },

        {
            id: 2,
            name: "Ahmed",
            department: "BSCS",
            semester: "6"
        },

        {
            id: 3,
            name: "Alishba",
            department: "BSCS",
            semester: "7"
        }, 

        {
            id: 4,
            name: "Sadia",
            department: "BSCS",
             semester: "8"
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

    const [editingStudent, setEditingStudent] = useState(null);

    function editStudent(student)
    {
        setEditingStudent(student);

    }

    function updateStudent(updatedStudent){
        const updatedStudents = students.map((student)=>{
            if(student.id===updatedStudent.id)
            {
                return updatedStudent;
            }
            return student;
        });

        setStudents(updatedStudents);
        setEditingStudent(null);
    }
    

    function deleteStudent(id)
    {
        const updatedStudents =  students.filter(
        (student) => student.id !== id
        );


        setStudents(updatedStudents);
        setTotalStudents(totalStudents-1);
        
    }
    
    const[users, setUsers] = useState([]);
    // api fetching 
    // useEffect(()=>{
    //     fetch("https://jsonplaceholder.typicode.com/users")
    //     .then((response)=>response.json())
    //     .then((data)=>{
    //         setUsers(data);
    //     })

    // }, [])
    
    // async/await
    const [loading, setLoading] = useState(true);
    const [error, setError] = useState("");
    useEffect(()=>{
            
        async function fetchUsers(){
            try{

            const response = await fetch(
                "https://jsonplaceholder.typicode.com/users"
               );
            const data = await response.json();

            setUsers(data);
            }

            catch(error){
                setError("Failed to fetch users");
            }
            finally{
                setLoading(false);
            }
        }
        fetchUsers();
        }, []);

        if(loading){
            return <h1>Loading...</h1>
        }

        if(error){
            return <h1>{error}</h1>
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

        <div className="mt-10 bg-white rounded-2xl shadow-lg border border-gray-200 p-8">

    <div className="flex items-center justify-between mb-8">
        <div>
            <h2 className="text-2xl md:text-3xl font-bold text-slate-800">
                Recent Students
            </h2>

            <p className="text-slate-500 mt-2">
                Newly added students in the system.
            </p>
        </div>

        <span className="px-4 py-2 bg-blue-100 text-blue-700 rounded-full font-semibold text-sm">
            {students.length} Students
        </span>
    </div>

        <div className="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-6">
            {students.map((student) => (
                <StudentCard
                    key={student.id}
                    id={student.id}
                    name={student.name}
                    department={student.department}
                    semester={student.semester}
                    onEdit={editStudent}
                    onDelete={deleteStudent}
                />
            ))}
            <br></br>
            
        </div>
            <div className="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-6">
            {
                users.map((user)=>{
                    return(         
                                   
                    <div>
                        <h2>{user.name}</h2>
                        <p>{user.email}</p>
                        <p>{user.phone}</p>
                    </div>
                    )
                })
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

    <StudentForm addStudent={addStudent} 
                 editingStudent={editingStudent}
                 updateStudent={updateStudent}/>

</div>
        
    </main>
    )

}

export default Dashboard;