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

    // edit student ki alg state bane gi abhi tkk sirf dashboard
    // mein data receive ho raha tha lekin form fill nhi ho raha tha 
    // ab form fill kerne k loiye batane hoga form ko k student ka data rha hai 
    // uss k liye alg state bne gi 
    
    const [ editingStudent, setEditingStudent] = useState([null]);
    function editStudent()
    {
        console.log(student);
        setEditingStudent(student);
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
            editingStudent = {editingStudent}
          />
          {
            students.map((student)=> 
 
                    <StudentCard 
                    // name={student.name}
                    // department={student.department}
                    // semester={student.semester}

                    student={student}
                    editStudent = {editStudent}
                    deleteStudent = {deleteStudent}
                    />
            
            )
          }
          </div>

          
          
        </>

)
}
export default Dashboard;