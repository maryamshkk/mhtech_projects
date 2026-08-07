import { PrismaClient } from "@prisma/client";
const prisma = new PrismaClient();

const main = async () => {

// const newStudents = await prisma.student.createMany({
//     data:[
//         { name: "a", email: "a12@gmail.com", age: 22},
//         { name: "b", email: "b23@gmail.com", age: 23},
//         { name: "c", email: "c34@gmail.com", age: 24},
//         { name: "d", email: "d45@gmail.com", age: 25},
//         { name: "e", email: "e56@gmail.com", age: 26}, 
// ]
// // })
//     console.log(newStudents);
// find many students
// const findStudents = await prisma.student.findMany();
// console.log(findStudents)
const specificStudents = await prisma.student.findUnique({
    where: {id:1}
});
console.log(specificStudents)
}

main()
    .catch(console.error)
    .finally(async () =>{
        await prisma.$disconnect();
    })