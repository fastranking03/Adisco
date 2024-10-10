import express from "express"
import {disSlot, addSlot,editSlot,updateSlot,deleteSlot} from "../../controllers/admin/slotController.js";
const router = express.Router()

router.get('/slot-list',disSlot);
router.post('/add-slot',addSlot)

router.get('/edit-slot/:id',editSlot);
router.post('/edit-slot',updateSlot)
router.post('/delete-slot/:id',deleteSlot)

export default router