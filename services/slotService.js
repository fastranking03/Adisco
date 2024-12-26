import { connect } from "../connection/conn.js"

export const getAllSlot = async () =>{
    try{
     const [slotData] = await connect.execute("SELECT * FROM time_slot")
     return slotData
    }catch(e){
        console.log(e);
    }
}

