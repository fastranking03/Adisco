import express from "express"
import { addCategory ,disCategory,editCategory,updateCategory} from "../../controllers/admin/categoryController.js"


const router = express.Router()

router.get('/category-list',disCategory)
router.post('/add-category', addCategory)
router.get('/edit-category/:id',editCategory) 
router.post('/edit-category',updateCategory)

export default router