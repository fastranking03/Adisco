import express  from "express";
import { allUsers ,signUpUser ,verifyOtpAndRegister,logOut ,userLogin,requesOtp ,verifyOtp,updatePassword} from "../controllers/userController.js";
const router = express.Router()

router.get('/login',allUsers)

router.get('/sign-up',(req,res) =>{
    return res.render('sign-up')
})
router.post('/sign-up',signUpUser)
router.get('/ac-verification',(req,res) =>{
    res.render('ac-verification')
})
router.post('/ac-verification',verifyOtpAndRegister)

router.post('/login', userLogin)
router.get('/forget-password',(req,res)=>{
    res.render('forget-password')
})
router.post('/request-otp', requesOtp)
router.get('/verify-otp',(req,res)=>{
    res.render('verify-otp')
})
router.post('/verify-otp',verifyOtp)
router.post('/update-password',updatePassword)

router.get('/logout',logOut)
export default router