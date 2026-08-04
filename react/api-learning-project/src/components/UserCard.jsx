function UserCard({user, onEdit, onDelete})
{
    return(
        <>
        {/* <h2>Users</h2> */}
        <div>
            <h2>{user.name}</h2>
            <p>{user.email}</p>
            <p>{user.phone}</p>

            <button onClick={() => 
                onEdit(user)}>
                    Edit User
            </button>

            <button onClick={() => {
                console.log(user);
                console.log(user.id)
                onDelete(user.id)}}>
                Delete User
            </button>
        </div>
        </>
    )
}

export default UserCard;