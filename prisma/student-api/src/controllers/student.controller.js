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

// update student by id 

export const updateStudent = async (req, res)=>{
    try{
        const id = Number(req.params.id);

        const {name, email, age} =  req.body;

        const existingStudent = await prisma.student.findUnique({
            where: {id:id}
        })

        if (!existingStudent){
            return res.status(400).json({
                message: "Student not found"
            })
        }
        const student = await prisma.student.update({
            where :{
                id
            },
            data : {
                name, 
                email,
                age
            }
        })
        res.status(200).json(student);
    }
    catch(error){
        res.status(500).json({
            message: error.message
        })
    }
}


// delete student
export const deleteStudent = async(req,res) =>{
    try {
        const id = Number(req.params.id);

        const existingStudent = await prisma.student.findUnique({
            where:
                {id}
        });
        if(!existingStudent){
            return res.status(404).json({
                message: "student not found"
            })
        }

        await prisma.student.delete({
            where: 
                {id}
        });

        res.status(200).json({
            message: "Student deleted successfully"
        });
        
    } catch (error) {
        res.status(500).json({
            message: error.message
        });
    }
}