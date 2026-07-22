function Navbar(props)
{
    return(
        <nav>
            <h2>{props.title}</h2>
            <h2>{props.username}</h2>
            <h2>{props.year}</h2>
        </nav>
    )

}

export default Navbar;