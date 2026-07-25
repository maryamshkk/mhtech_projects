import { useState, useEffect } from "react";
import Button from "../components/Button";
import Input from "../components/Input";

function StudentForm({addStudent, editingStudent, updateStudent})
{
    const [formData, setFormData] = useState({
        id : "",
        name: "",
        department: "",
        semester: "", 
    });

    
    useEffect(()=>{
        if(editingStudent){
            setFormData(editingStudent);
        }
        else {
            setFormData({
                id: "",
                name: "",
                department: "",
                semester: "",
            })
        }
    }, [editingStudent]);


    function handleChange(event){
        const {name, value} = event.target;
        
        setFormData({
            ...formData,
            [name]: value
        });
        }

    function handleSubmit(event){
            event.preventDefault();

            if (editingStudent) {
                updateStudent(formData);
            } else {
                addStudent(formData);
            }
            setFormData({
                id:"",
                name:"",
                department :"",
                semester:""
            });
    }


    return (
        <form className="bg-white rounded-xl space-y-5 shadow-md p-6 "
        onSubmit={handleSubmit} >
             
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

            <Button text={editingStudent 
            ?
             "Update Student" 
            : 
             "Add Student"
            }
            type="submit"/>
                
        </form>
    )

}
export default StudentForm;