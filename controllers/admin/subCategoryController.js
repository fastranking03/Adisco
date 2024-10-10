import { connect } from "../../connection/conn.js"
import { getAllCategory } from "../../services/categoryService.js"
import { getAllSubCategory } from "../../services/subCategoryService.js"

export const disSubcategory = async (req,res) =>{
    try{
      const catData = await getAllCategory()  
      const subData = await getAllSubCategory()  
      res.render('admin/sub-category',{subData,catData})
    }catch(e){
        console.log(e)
    }
}

export const addSubCategory = async (req,res) =>{
    try{
      const {cat_id,service_name,duration,price} = req.body
      await connect.execute("INSERT INTO sub_category (cat_id,service_name,duration,price,created_at) VALUES (?, ?, ?, ?, NOW())",[cat_id,service_name,duration,price])
      res.redirect('/admin/sub-category')
    }catch(e){
        console.log(e)
    }
}

export const editSubCategory = async(req,res) =>{
    const {id} = req.params
    try{
    const catData = await getAllCategory()  
    const [subData] = await connect.execute("SELECT * FROM sub_category WHERE id = ?",[id])
    res.render('admin/edit-subcategory',{subData:subData[0],catData})
    }catch(e){
        console.log(e)
    }
}

export const updateSubCategory = async (req,res) =>{
    try{
        const {id, cat_id,service_name,duration,price} = req.body
        await connect.execute("UPDATE sub_category SET cat_id =?, service_name= ? ,duration = ?,price = ? WHERE id = ?",[id, cat_id,service_name,duration,price])
        res.redirect('/admin/sub-category');
        res
    }catch(e){
        console.log(e)
    }
}