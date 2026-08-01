import { useState } from "react";

function UserForm({addStudent})
{
    const [formData, setFormData] = useState({

    name: "",

    email: ""

});
    function handleChange(e){

    setFormData({

        ...formData,

        [e.target.name]: e.target.value

    });


}
    function handleSubmit(e){

        e.preventDefault();

        // console.log(formData);
        addStudent(formData);
        

}

    return(
        <div>
            <form onSubmit={handleSubmit}>
            
            <h2>Add new User</h2>
            
            <input type="text"
                name = "name"
                placeholder="Enter Name"
                value={formData.name}
                onChange={handleChange}
            />
            <br></br>
            <input type="email" 
                name="email"
                placeholder="Enter Email"
                value={formData.email}
                onChange={handleChange}
            />
            <br></br>

            <button>Add New User</button>
            </form>
        </div>
    )
}
export default UserForm;