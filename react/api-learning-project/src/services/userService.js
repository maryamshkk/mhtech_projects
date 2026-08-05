const API_URL = "http://127.0.0.1:8000/api/users";

export async function getUsers()
{
    const response = await fetch(API_URL);
    const data = await response.json();
    return data;
}

export async function addUser(user)
{
    const response = await fetch(API_URL, {
        method: "POST",

        headers: {
            "Content-Type" : "application/json"
        },

        body: JSON.stringify(user)
    })
    const data = await response.json()
    return data;
}

export async function updateUser(id, user)
{
    const response = await fetch(`${API_URL}/${id}`, {
        method: "PUT",
        headers:{
            "Content-Type" :"application/json"
        },
        body: JSON.stringify(student)
    })

    const data = await response.json();
    data;
}

export async function deleteStudent(id)
{
    const response = await fetch(`${API_URL}/${id}`,{
        method: "DELETE"
    });

    return response;
}