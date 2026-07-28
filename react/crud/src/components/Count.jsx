import { useState, useEffect } from "react";

function Count()
{
    const [count, setCount] = useState(0);
    //  this renders everytime
    useEffect(() => {
        console.log("Component Rendered");
    })

    // [] dependency array
    useEffect(() => {
        console.log("Hello");
    }, [count])
    
    
    return(
        <div>
            <h1>{count}</h1>

            <button onClick={() =>
                setCount(count+1)}>Increase
            </button>
        </div>
    )

}

export default Count;