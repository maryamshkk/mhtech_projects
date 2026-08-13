import express from "express";


const app = express();
const authRoutes = require("./routes/auth.routes");

app.use(express.json());
app.use("/api/auth", authRoutes);

app.get("/",(req, res) => {
    res.json({
        message: "server is running"
    });
})

app.listen(3000, () => {
    console.log("server running on port 3000");
})