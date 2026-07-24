function StatCard({title, value})
{
    return(
        <div className="bg-white rounded-2xl shadow-md hover:shadow-xl transition-all duration-300 p-6 border-l-8 border-blue-600">

            <p className="text-gray-500">
                {title}
            </p>

            <h2 className="text-4xl font-bold mt-3 text-blue-700">
                {value}
            </h2>

        </div>
    )

}

export default StatCard;