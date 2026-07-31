const API_URL = "https://jsonplaceholder.typicode.com/users";


// api call get function
export async function getStudents()
{
    const response = await fetch(API_URL);
    const data = await response.json();
    return data; 
}
//  post function
export async function addStudent(student)
{
    const response = await fetch(API_URL, {
        method : "POST",

        headers: 
        {
            "Content-Type" : "application/json"
        },
        body: JSON.stringify(student)
    });

    const data = await response.json()
    return data;

}