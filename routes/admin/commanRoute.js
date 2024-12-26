import express from "express"
 
import { getAllProfessionals } from "../../services/professionalService.js"
import { getAllSlot } from "../../services/slotService.js"
import { bookAppList } from "../../controllers/admin/commanController.js"


const router = express.Router()

router.get('/',(req,res) =>{
    res.render('admin/index')
})

router.get('/appointment-list',async(req,res) =>{
    const proData = await getAllProfessionals()
    const slotData = await getAllSlot()
    res.render('admin/appointment-list',{proData,slotData})
})

router.get('/all-appointment',bookAppList)
export default router