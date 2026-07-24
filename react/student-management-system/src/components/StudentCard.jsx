function StudentCard({name, department, semester})
{
    return (
<div className="bg-white rounded-2xl shadow-md hover:shadow-xl hover:-translate-y-1 transition-all duration-300 p-6 border">

    <div className="flex items-center gap-4">
            <div className="w-14 h-14 rounded-full bg-blue-600 text-white flex items-center justify-center font-bold text-xl">
                {name.charAt(0)}
            </div>
            <h2 className="text-xl font-semibold">
                {name}
            </h2>

            <p className="text-gray-600 mt-2">
                {department}
            </p>
            <p className="text-gray-600 mt-2">
                {semester}
            </p>
        </div>
        </div>

    );

}
export default StudentCard;