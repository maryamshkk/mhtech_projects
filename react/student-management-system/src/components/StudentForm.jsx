import { useState } from "react";
import Button from "../components/Button";

function StudentForm()
{
    const [formData, setFormData] = useState({
        name: "",
        department: "",
        semester: "", 
    });

    return (
        <form className="bg-white rounded-xl shadow-md p-6">

            <h2 className="text-2xl font-bold mb-6">
                Add New Student
            </h2>

            <div className="space-y-4"> 
            <input type="text"
                    placefolder="Student Name"/>
            
            <input type="text"
                    placeholder="Department"/>

            <input type="text"
                    placeholder="Semester"/>

            <Button type="Add Student"
                    type="Submit"/>
                    </div>
        </form>
    )

}
export default StudentForm;