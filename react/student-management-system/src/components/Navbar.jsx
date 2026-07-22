function Navbar({title})
{
    return(
         <header className="bg-blue-600 text-white px-8 py-4 shadow-md">

            <h1 className="text-2xl font-bold">
                {title}
            </h1>

        </header>
    )

}

export default Navbar;