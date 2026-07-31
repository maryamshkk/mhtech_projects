function UserCard({user})
{
    return(
        <>
        {/* <h2>Users</h2> */}
        <div>
            <h2>{user.name}</h2>
            <p>{user.email}</p>
            <p>{user.phone}</p>
        </div>
        </>
    )
}

export default UserCard;