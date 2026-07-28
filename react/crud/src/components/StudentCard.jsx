import Dashboard from "../pages/Dashboard";
import Button from 'react-bootstrap/Button';


function StudentCard({ student, editStudent, deleteStudent }) {

    return (
        <div>
            
            <h2>{student.name}</h2>

            <p>{student.department}</p>

            <p>{student.semester}</p>

            <button onClick={() => deleteStudent(student.id)}>
                Delete</button>
                
            <button onClick={() => editStudent(student)}>Edit</button>
        </div>
    );
}

export default StudentCard;