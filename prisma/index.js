import { PrismaClient } from "@prisma/client";

const prisma = new PrismaClient();

const main = async () => {
    // insert data 
    // create single user
    const user = await prisma.user.create({
        data:{
            name: "maryam",
            email: "maryamsheikh117@gmail.com"
        },
    });
    console.log(user);
};

main()
    .catch((e)=> console.error(e))
    .finally(async () =>{
        await prisma.$disonnect();
    })