import { connect } from "../connection/conn.js"

export const getAllCategory = async (req,res) =>{
    try{
     const [catData] = await connect.execute("SELECT * FROM category");
     return catData
    }catch(e){
        console.log(e)
    }
}