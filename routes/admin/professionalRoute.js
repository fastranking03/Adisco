import express from "express"
import { disProfessionals ,addProfessional} from "../../controllers/admin/professionalController.js"
const router = express.Router()

router.get('/professionals',disProfessionals)
router.post('/add-professional',addProfessional)

export default router