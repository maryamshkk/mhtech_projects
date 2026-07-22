import Button from "../components/Button";
import Card from "../components/StudentCard";


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
            <Card>
                <h2>Maryam Sheikh</h2>
                <p> BS Computer Science</p>
                <p> Semester 7</p>
            </Card>
        </main>
    )
}

export default Dashboard;