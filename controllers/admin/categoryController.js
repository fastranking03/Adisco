import { connect } from "../../connection/conn.js";
import { getAllCategory } from "../../services/categoryService.js";

export const addCategory = async (req,res) =>{
    try{
       const{cat_name} = req.body;
       await connect.execute("INSERT INTO category (cat_name ,created_at) VALUES (?, NOW())",[cat_name])
       res.redirect('/admin/category-list')
    }catch(e){
        console.log(e)
    }
}

export const disCategory = async (req,res) =>{
    try{
       const catData = await getAllCategory();
       res.render('admin/category-list',{catData})
    }catch(e){
        console.lof(e)
    }
}

export const editCategory = async (req,res) =>{
    const {id} = req.params
    const [catData] = await connect.execute("SELECT * FROM category where id = ?",[id])
    res.render('admin/edit-category',{catData:catData[0]})
 }

export const updateCategory = async (req,res) =>{
    try{
     const {id, cat_name} = req.body
     await connect.execute("UPDATE category SET cat_name = ? WHERE id = ?",[cat_name,id])
     res.redirect('/admin/category-list')
    }catch(e){
        console.log(e)
    }
}