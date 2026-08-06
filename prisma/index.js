import { PrismaClient } from "@prisma/client";

const prisma = new PrismaClient();

const main = async () => {
    // insert data 
    // create single user
    // const user = await prisma.user.create({
    //     data:{
    //         name: "maryam",
    //         email: "maryamsheikh117@gmail.com"
    //     },
    // });
    // console.log(user);

    // multiple users
    // const newUsers = await prisma.user.createMany({
    //     data:[
    //     { email: "samreen12@gmail.com", name: "samreen"},
    //     { email: "noreen12@gmail.com", name: "noreen"},
    //     { email: "salman12@gmail.com", name: "salman"}
    // ]
    // })
    // console.log(newUsers)

    // read all data
    const showUsers = await prisma.user.findMany();
    console.log(showUsers);
};

main()
    .catch((e)=> console.error(e))
    .finally(async () =>{
        await prisma.$disconnect();
    })