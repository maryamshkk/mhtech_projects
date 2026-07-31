const API_URL = "https://jsonplaceholder.typicode.com/users";

export async function getStudent()
{
    const response = await fetch(API_URL);
    const data = await response.json();
    return data;
}

export async function addStudent()
{
    const response = await fetch(API_URL, {
        method: "POST",

        headers: {
            "Content-Type" : "application/json"
        },

        body: JSON.stringify(student)
    })
    const data = await response.json()
    return data;
}