import { connect } from "../../connection/conn.js"

export const bookAppList = async (req,res) =>{
    try{
      const [appData] = await connect.execute(`
        SELECT bs.*, u.*
            FROM book_service bs 
            JOIN users u ON bs.user_id = u.id
          `
    );
      res.render('admin/all-appointment',{appData})
    }catch(e){
        console.log(e)
    }
}