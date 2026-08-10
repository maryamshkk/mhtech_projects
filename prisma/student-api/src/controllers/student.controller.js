import prisma from "../config/prisma.js";

// get student controller
export const getStudents = async (req, res) => {
    try {
        const students = await prisma.student.findMany();

        res.status(200).json(students);

    } catch (error) {
        res.status(500).json({
            message: error.message
        });
    }
};

// post student controller
export const createStudent = async (req, res) =>{
    try{
        const {name, email, age } = req.body;

        const student = await prisma.student.create({
            data : {
                name,
                email,
                age
            }
        });

        res.status(201).json(student);
    }

    catch (error) {
        res.status(500).json({
            message: error.message
        });
    }
}

// get student by id 
export const getStudent = async (req,res) => {
    try {
        const id = Number(req.params.id);

        const student = await prisma.student.findUnique({
            where: {id:id}
        });

        if (!student) {
            return res.status(404).json({
                message: "student not found"
            })
        }
        res.status(200).json(student);
    }
    catch (error){
        res.status(500).json({
            message: error.message
        });
    }
} 