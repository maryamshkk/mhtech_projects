const req = require("express/lib/request");
const prisma = require("./prisma");

await prisma.student.createMany({
    data:[
        { name: "a", email: "a@gmail.com", age: 22, cgpa: 3.4},
        { name: "b", email: "b@gmail.com", age: 23, cgpa: 3.3},
        { name: "c", email: "c@gmail.com", age: 24, cgpa: 3.2},
        { name: "d", email: "d@gmail.com", age: 25, cgpa: 3.1},
        { name: "e", email: "e@gmail.com", age: 26, cgpa: 3.0}, 
]
})