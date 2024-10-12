import { connect } from "../connection/conn.js";
import { getAllCategory } from "../services/categoryService.js"
import { getAllProfessionals } from "../services/professionalService.js";
import { getAllSlot } from "../services/slotService.js";
import { getAllSubCategory } from "../services/subCategoryService.js";

export const getCategory = async (req, res) => {
    try {
        const catData = await getAllCategory();
        const subCatData = await getAllSubCategory()
        res.render('services', { catData, subCatData })
    } catch (e) {
        console.log(e)
    }
}

export const getStaff = async (req, res) => {
    try {
        const staffData = await getAllProfessionals()
        res.render('staff', { staffData })
    } catch (e) {
        console.log(e)
    }
}

export const slotApi = async (req, res) => {
    try {
        const slots = await getAllSlot()
        res.json({ slots })
    } catch (e) {
        console.log(e)
    }
}

export const disCheckout = async (req,res) =>{
 
    try{
        res.render('checkout')
    }catch(e){
        console.log(e)
    }
}

// export const disCheckout = async(req, res) => {
//     try{
//         const userId = req.session.user;
//         const userAddress = await connect.execute("SELECT * FROM user_address WHERE ")
//         const [serviceData] = await connect.execute(`
//             SELECT s.*, sc.*,bs.*, p.name as staff_name 
//             FROM service s
//             JOIN book_service bs ON s.service_id = bs.id
//             JOIN sub_category sc ON s.sub_id = sc.id
//             JOIN professionals p ON s.staff_id = p.id
//             WHERE s.user_id = ?
//         `, [userId.id]);
        
//         res.render('checkout',{serviceData})
//     }catch(e){
//         console.log(e)
//     }
//  }

export const bookService = async (req, res) => {
 
    if (!req.session.user) {
        req.session.returnTo = '/checkout';
        req.session.bookingData = req.body;
        return res.redirect('/login');
    }

    try {
        const userId = req.session.user;
        const bookingData =  req.body;
        const { date, slot, services } = bookingData;
        if (!date || !slot || !services) {
            return res.status(400).json({ success: false, message: 'Missing required fields' });
        }

        const [bookingResult] = await connect.execute(
            'INSERT INTO book_service (user_id, service_date, service_time, status, created_at) VALUES (?, ?, ?, ?, NOW())',
            [userId.id, date, slot, 'Pending']
        );
        const bookingId = bookingResult.insertId;

        const serviceInsertPromises = services.map(service => {
            return connect.query(
                'INSERT INTO service (user_id,service_id, sub_id, staff_id, created_at) VALUES (?, ?, ?, ?, NOW())',
                [userId.id,bookingId, service.id, service.staff.id]
            );
        });

        await Promise.all(serviceInsertPromises);
        delete req.session.bookingData;
        // Respond with success
        res.json({ success: true });

    } catch (error) {
        console.error('Error booking service:', error);
        res.status(500).json({ success: false, message: 'Failed to book service.' });
    }
};

export const addAddress = async (req,res) =>{
    try{
    const userId = req.session.user    
    const {f_name,mobile,email,address,message} = req.body;
    await connect.execute("INSERT INTO user_address (user_id,f_name,mobile,email,address,message,status,created_at) VALUES (?, ?, ?, ?, ?, ?, ?, ?, NOW())",[userId.id,f_name,mobile,email,address,message,'0']);
    res.redirect('/checkout')

    }catch(e){
        console.log(e)
    }
}
 
