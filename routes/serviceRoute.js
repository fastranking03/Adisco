import express from "express";
import {getCategory, getStaff,slotApi,disCheckout,addAddress,bookService } from "../controllers/serviceController.js";
import { isAuthenticated } from "../middleware/authMiddleware.js";
const router = express.Router()

router.get('/services', getCategory)

router.get('/staff',getStaff)

router.get('/booking',(req,res) =>{
    res.render('booking')
})

router.get('/api/get-slots', slotApi)
router.post('/api/book-service',bookService)
router.get('/checkout' ,isAuthenticated ,disCheckout)
router.post('/checkout',addAddress)
router.get('/thank-you',(req,res) =>{
    res.render('thank-you')
})
export default router