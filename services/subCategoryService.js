import { connect } from "../connection/conn.js"

export const getAllSubCategory = async (req,res) =>{
    try{
        const [subData] = await connect.execute(`
            SELECT sub_category.*, category.cat_name 
            FROM sub_category 
            JOIN category ON sub_category.cat_id = category.id
        `);
       return subData
    }catch(e){
        console.log(e)
    }
}