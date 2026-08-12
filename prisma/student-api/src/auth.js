import bcrpyt from "bcrypt";

async function testPassword(){
    const password = "123456";

    const hashPassword = await bcrpyt.hash(password, 10);

    console.log("Original password", password);
    console.log("Hashed password:", hashPassword);
    
    const isMatch = await bcrpyt.compare(password,hashPassword);
    
    console.log("Password Match:", isMatch);
}

testPassword();