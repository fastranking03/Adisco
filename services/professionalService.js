import { connect } from "../connection/conn.js"

export const getAllProfessionals = async () =>{
    try{
        const [proData] = await connect.execute("SELECT *  FROM professionals");
        return proData
    }catch(e){
        console.log(e)
    }
}