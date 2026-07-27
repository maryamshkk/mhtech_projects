import Dashboard from "../pages/Dashboard";


function StudentCard({ student, deleteStudent, onClick }) {

    return (
        <div>
            
            <h2>{student.name}</h2>

            <p>{student.department}</p>

            <p>{student.semester}</p>

            <button onClick={() => deleteStudent(student.id)}>
                Delete</button>
        </div>
    );
}

export default StudentCard;