function Input({
    type,
    placeolder,
    name,
    value,
    onChange
}) {
    return (
    <input 
        type={type}
        placeholder={placeholder}
        name={name}
        value={value}
        onChange={onChange}
        className="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500"

    />
    );
}

export default Input;