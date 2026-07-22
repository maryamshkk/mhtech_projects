function Sidebar()
{
    return(
        <aside className="w-64 bg-white shadow-lg p-6">
            <h2 className="text-xl font-semibold mb-6">
                Menu
            </h2>

            <ul className="space-y-4">
                <li className="hover:text-blue-600 cursor-pointer">
                    Dashboard
                </li>

                <li className="hover:text-blue-600 cursor-pointer">
                    Students
                </li>

                <li className="hover:text-blue-600 cursor-pointer">
                    Courses
                </li>

                <li className="hover:text-blue-600 cursor-pointer">
                    Attendance
                </li>
                
            </ul>
        </aside>
    )

}

export default Sidebar;