function Navbar({ title }) {
    return (
        <header className="bg-gray-900 text-white shadow-lg">

            <div className="max-w-7xl mx-auto flex justify-between items-center px-8 py-5">

                <h1 className="text-3xl font-bold">
                    {title}
                </h1>

                <div className="flex gap-6">

                    <a href="#" className="hover:text-blue-400 transition">
                        Home
                    </a>

                    <a href="#" className="hover:text-blue-400 transition">
                        Settings
                    </a>

                </div>

            </div>

        </header>
    );
}

export default Navbar;