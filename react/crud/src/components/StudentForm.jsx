import { useState } from "react";


function StudentForm()
{
    const [formData, setFormData] = useState({
        name:"",
        department:"",
        semester:"",
    })

    function handleChange(event)
    {
        console.log(event.target.value);

    }

    return(
        <div>
            <h2>Add Student</h2>

            <form>
                
                <input  type="text"
                        name="name"
                        placeholder="Enter name" 
                        onChange={handleChange}/>
                        <br></br>
                <input type="text"
                        name="department"
                        placeholder="Enter department"
                        onChange={handleChange}/>
                        <br></br>
                <input type="text"
                        name="semester"
                        placeholder="Enter semester"
                        onChange={handleChange}/>
                

                        
            </form>
        </div>
    )

}

export default StudentForm;