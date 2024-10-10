import express from "express"
import { disSubcategory,addSubCategory, editSubCategory, updateSubCategory} from "../../controllers/admin/subCategoryController.js"
 
const router = express.Router()

router.get('/sub-category', disSubcategory)
router.post('/add-sub-category',addSubCategory)
router.get('/edit-subcategory/:id',editSubCategory)
router.post('/edit-subcategory', updateSubCategory)
 
export default router