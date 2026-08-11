import express from "express";
import { getStudents, 
        createStudent, 
        getStudent, 
        updateStudent, 
        deleteStudent
 } from "../controllers/student.controller.js";

const router = express.Router();

router.get("/all", getStudents);
router.post("/create", createStudent);
router.get("/:id", getStudent);
router.put("/:id", updateStudent);
router.delete("/:id", deleteStudent);

export default router;