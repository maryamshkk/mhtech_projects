import express from "express";
import studentRoutes from "./routes/student.routes.js";

const app = express();

app.use(express.json());

app.get("/", (req, res)=>{
    res.send("student api is runningx")
})

app.use("/students", studentRoutes);

export default app;