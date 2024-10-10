import express from "express";
import { getCategory, getStaff,slotApi } from "../controllers/serviceController.js";
const router = express.Router()

router.get('/services', getCategory)

router.get('/staff',getStaff)

router.get('/booking',(req,res) =>{
    res.render('booking')
})

router.get('/api/get-slots', slotApi)
export default router