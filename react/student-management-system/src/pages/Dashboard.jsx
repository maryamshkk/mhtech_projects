import Button from "../components/Button";
import Card from "../components/StudentCard";
import { dashboardStats } from "../data/student";
import Sidebar from "../components/Sidebar";
import StatCard from "../components/StatCard";

function Dashboard()
{
    return(
        <main className="flex-1 p-8">
            <h2 className="text-3xl font-bold mb-4">
                Dashboard
            </h2>            
            
            <p className="text-gray-500 mt-2">
                Welcome to Student Managemnt System
            </p>

            <div className="flex gap-4 mt-8">
            {
                dashboardStats.map((item) =>(
                    <StatCard
                        key={item.id}
                        title={item.title}
                        value={item.value}
                     />
                ))
            }
                
            </div>
            
        </main>
    )
}

export default Dashboard;