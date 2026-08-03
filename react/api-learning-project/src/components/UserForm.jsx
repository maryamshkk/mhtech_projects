import { useState, useEffect } from "react";

function UserForm({addStudent, updateStudent, editingUser})
{
    const [formData, setFormData] = useState({

    name: "",

    email: ""

});

    useEffect(() => {
        if (editingUser) {
            setFormData({
                name: editingUser.name,
                email: editingUser.email
            });
        }
    }, [editingUser]);


    function handleChange(e){

    setFormData({

        ...formData,

        [e.target.name]: e.target.value

    });


}

    function handleSubmit(e){

        e.preventDefault();

        // console.log(formData);
        if(editingUser){
            updateStudent(
                editingUser.id,
                formData
            );
        }
        else{
            addStudent(formData);
        }

        setFormData({
        name: "",
        email: ""
    });

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