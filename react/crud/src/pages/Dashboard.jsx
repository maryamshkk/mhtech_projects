import { useState } from "react";
import StudentForm from "../components/StudentForm";
import StudentCard from "../components/StudentCard";

function Dashboard()
{
    // jis ne data show kerana state usi k pas hogi
    const [students, setStudents] = useState([
        {
            id:1,
            name:"Maryam",
            department:"bscs",
            semester: "6"
        },

        {
            id:2,
            name:"sameena",
            department:"bscs",
            semester: "8"
        }
    ])

    function addStudent(student)
    {
        setStudents([
            ...students,
            student
        ]);
    }
    

    function deleteStudent(id)
    {
        const updatedStudents = students.filter((student)=>{
                return student.id !== id;
        })
        setStudents(updatedStudents);

    }

    return(
        <>
        <div>
          <StudentForm 
            addStudent={addStudent}
          />
          {
            students.map((student)=> 
 
                    <StudentCard 
                    // name={student.name}
                    // department={student.department}
                    // semester={student.semester}

                    student={student}
                    deleteStudent = {deleteStudent}
                    />
            
            )
          }
          </div>

          
          
        </>

)
}
export default Dashboard;