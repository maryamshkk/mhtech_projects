import { useState } from "react";


function StudentForm()
{
    const [formData, setFormData] = useState({
        name:"",
        department:"",
        semester:"",
    })
        // destructring
    const {name, value} = event.target;


    function handleChange(event)
    {
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