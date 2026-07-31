import { useEffect, useState } from "react";


function StudentForm({ addStudent, editingStudent })
{
    //  its the form state which makes form objects
    const [formData, setFormData] = useState({
        name:"",
        department:"",
        semester:"",
    })
    //  iss code ko zroorat k wqt chalana
    
    useEffect(() =>{
        if(editingStudent){
            setFormData(editingStudent);
        }
    }, [editingStudent])
        // destructring
    

    function handleChange(event)
    {
        const {name, value} = event.target;

        // console.log(event.target.value);
        setFormData({
            name: "",
            department: "",
            semester : "",

            ...formData,
            [name] : value
        })

            
        // console.log(event.target.name);
        // console.log(event.target.value);

    }

    function handleSubmit(event)
    {
        event.preventDefault();
        console.log("Student Added");
        addStudent(formData);
    }

    return(
        <div>
            <h2>Add Student</h2>

            <form onSubmit={handleSubmit}>
                
                <input  type="text"
                        name="name"
                        placeholder="Enter name"
                        value={formData.name} 
                        onChange={handleChange}/>
                        <br></br>
                <input type="text"
                        name="department"
                        placeholder="Enter department"
                        value={formData.department}
                        onChange={handleChange}/>
                        <br></br>
                <input type="text"
                        name="semester"
                        placeholder="Enter semester"
                        value={formData.semester}
                        onChange={handleChange}/>
                
                    <button>
                        Add Student
                    </button>
                        
            </form>
        </div>
    )

}

export default StudentForm;