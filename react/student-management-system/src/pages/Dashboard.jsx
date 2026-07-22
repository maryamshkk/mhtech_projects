import Button from "../components/Button";

function Dashboard()
{
    return(
        <main>
            <h1>Welcome to Dashbaord</h1>
            <p>Welcome to Student Managemnt System</p>
            <Button text="Add Student" type="button"/>
            <Button text="Edit Student" type="button"/>
            <Button text="Delete Student" type="button"/>
            <Button text="Search Student" type="button"/>
        </main>
    )
}

export default Dashboard;