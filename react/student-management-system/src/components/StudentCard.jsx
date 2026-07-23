function StudentCard({name, department})
{
    return (
        <div className="bg-white rounded-xl shadow-md p-5 hover:shadow-lg transition">

            <h2 className="text-xl font-semibold">
                {name}
            </h2>

            <p className="text-gray-600 mt-2">
                {department}
            </p>
        </div>
    );

}
export default StudentCard;