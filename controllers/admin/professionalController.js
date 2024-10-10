import { connect } from "../../connection/conn.js"
import { getAllProfessionals } from "../../services/professionalService.js"

export const  disProfessionals  = async (req,res) =>{
    try{
      const proData = await getAllProfessionals()
      res.render('admin/professionals',{proData})
    }catch(e){
        console.log(e)
    }
}

export const addProfessional = async (req,res) =>{
    try{
      const {name,email,phone,password,work_type} = req.body;
      await connect.execute("INSERT INTO professionals (name,email,phone,password,work_type,created_at) VALUES (?, ?, ?, ?, ?, NOW())",[name,email,phone,password,work_type])
      res.redirect('/admin/professionals')
    }catch(e){
        console.log(e)
    }
}