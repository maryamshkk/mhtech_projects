function Navbar({title, username, year})
{
    return(
        <nav>
            <h2>{title}</h2>
            <h2>{username}</h2>
            <h2>{year}</h2>
        </nav>
    )

}

export default Navbar;