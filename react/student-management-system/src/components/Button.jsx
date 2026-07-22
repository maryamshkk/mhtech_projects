function Button({text, type})
{
    return(
        <>
        <button type={type}
         className="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition duration-300">
            {text}

        </button>
        </>
    )

}
export default Button;