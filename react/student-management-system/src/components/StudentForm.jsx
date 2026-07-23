import { useState } from "react";
import Button from "../components/Button";
import Input from "../components/Input";

function StudentForm({addStudent})
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
    function handleSubmit(event){
            event.preventDefault();
            addStudent(formData);
            setFormData({
                name:"",
                department :"",
                semester:""
            });
        
    }

    return (
        <form className="bg-white rounded-xl shadow-md p-6"
        onSubmit={handleSubmit}
>
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

            <Button text="Add Student"
                    type="submit"/>
                    </div>
        </form>
    )

}
export default StudentForm;