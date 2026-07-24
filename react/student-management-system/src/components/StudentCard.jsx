import Button from "./Button";

function StudentCard({id, name, department, semester, onDelete, onEdit})
{
    return (
<div className="bg-white rounded-2xl shadow-md hover:shadow-xl hover:-translate-y-1 transition-all duration-300 p-6 border">

    <div className="flex items-center gap-4">
            <div className="w-full h-full rounded-full bg-blue-600 text-white flex items-center justify-center font-bold text-xl">
                {name.charAt(0)}
            </div>
            <h2 className="text-xl font-semibold">
                {name}
            </h2>

            <p className="text-gray-600 mt-2">
                Department : {department}
            </p>
            <p className="text-gray-600 mt-2">
                Semester : {semester}
            </p>

            
        </div>
        <div className="mt-5">
            <Button 
                text="Edit"
                type="button"
                onClick={()=>onEdit({
                    id,
                    name,
                    department, 
                    semester,

                })}
            />
            </div>
        <div className="mt-5">
                <Button 
                    text="Delete"
                    type="button"
                    onClick={()=>onDelete(id)}
                />
            </div>
    </div>

    );

}
export default StudentCard;