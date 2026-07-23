import { useState } from "react";
import Button from "../components/Button";
import Input from "../components/Input";

function StudentForm()
{
    const [formData, setFormData] = useState({
        name: "",
        department: "",
        semester: "", 
    });

    function handleChange(event){
        const {name, value} = event.target;

        setFormData({
            ...formData,
            [name]: value
        });
    }

    return (
        <form className="bg-white rounded-xl shadow-md p-6">

            <h2 className="text-2xl font-bold mb-6">
                Add New Student
            </h2>

            <div className="space-y-4"> 
            <Input type="text"
                    placeholder="Student Name"
                    name="name"
                    value={formData.name}
                    onChange={handleChange}
                    />
            
            <Input type="text"
                    placeholder="Department"
                    name="department"
                    value={formData.department}
                    onChange={handleChange}/>

            <Input type="text"
                    placeholder="Semester"
                    name="semester"
                    value={formData.semester}
                    onChange={handleChange}/>

            <Button type="Add Student"
                    type="Submit"/>
                    </div>
        </form>
    )

}
export default StudentForm;