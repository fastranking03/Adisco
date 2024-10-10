import { getAllCategory } from "../services/categoryService.js"
import { getAllProfessionals } from "../services/professionalService.js";
import { getAllSlot } from "../services/slotService.js";
import { getAllSubCategory } from "../services/subCategoryService.js";

export const getCategory = async (req,res) =>{
    try{
       const catData = await getAllCategory();
       const subCatData  = await getAllSubCategory()
       res.render('services',{catData,subCatData})
    }catch(e){
        console.log(e)
    }
}

export const getStaff = async (req,res) =>{
    try{
        const staffData  = await getAllProfessionals()
       res.render('staff',{staffData})
    }catch(e){
        console.log(e)
    }
}

export const slotApi = async (req,res) =>{
    try{
     const slots = await getAllSlot()
     res.json({slots})
    }catch(e){
        console.log(e)
    }
}