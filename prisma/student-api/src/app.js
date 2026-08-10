import express from "express";
import studentRoutes from "./routes/student.routes.js";

const app = express();

app.use(express.json());
// registering routes like every route starts with /students
app.use("/students", studentRoutes);

export default app;
