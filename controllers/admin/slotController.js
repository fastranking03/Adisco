import { connect } from "../../connection/conn.js"
import { getAllSlot } from "../../services/slotService.js"

export const disSlot = async (req,res) =>{
    try{
     const slotData = await getAllSlot()
     res.render('admin/slot-list',{slotData})
    }catch(e){
        console.log(e)
    }
}

export const addSlot = async (req,res) =>{
    try{
     const {slot} = req.body;
     await connect.execute("INSERT INTO  time_slot (slot,created_at) VALUES (?, NOW())",[slot])
     res.redirect('/admin/slot-list')
    }catch(e){
        console.log(e)
    }
}

export const editSlot = async (req,res) =>{
    try{
     const {id} = req.params   
     const[slotData] = await connect.execute('SELECT * FROM time_slot WHERE id = ?',[id])
     res.render('admin/edit-slot',{slotData:slotData[0]})
    }catch(e){
        console.log(e)
    }
}

export const updateSlot = async (req,res) =>{
    try{
     const {slot,id} = req.body   
      await connect.execute('UPDATE time_slot SET slot = ? WHERE id = ?',[slot,id])
      res.redirect('/admin/slot-list')
    }catch(e){
        console.log(e)
    }
}

export const deleteSlot = async(req,res) =>{
    try{
      const {id} = req.params
      console.log(id)
      await connect.execute('DELECT FROM time_slot WHERE id = ?',[id])
      res.redirect('/admin/slot-list')
    }catch(e){
        console.log(e)
    }
}