import express  from "express";
import dotenv from "dotenv";
import path from "path";
import session from "express-session";
import userRoute from "./routes/userRoute.js"
import serviceRoute from "./routes/serviceRoute.js"
import commanRoute from "./routes/admin/commanRoute.js"
import categoryRoute from "./routes/admin/categoryRoute.js"
import subCategoryRoute from "./routes/admin/subCategoryRoute.js"
import professionalRoute from "./routes/admin/professionalRoute.js"
import slotRoute from "./routes/admin/slotRoute.js"

const app = express()
dotenv.config()

app.locals.baseURL = "http://localhost:8002/"
app.use(session({
    secret: process.env.SESSION_KEY,
    resave: false,
    saveUninitialized: true,
    cookie: { secure: false }
}));

// Middleware to make user session data available in all views
app.use((req, res, next) => {
    res.locals.user = req.session.user || null;
    next();
  });

// Set Template
app.set("view engine", "ejs")
app.set("views", path.resolve("./views"))
app.use(express.static("public"))
app.use(express.json())
app.use(express.urlencoded({extended:true}))

// All Routes
app.use('/',userRoute)
app.use('/',serviceRoute)

// Admin Route
app.use('/admin/',commanRoute)
app.use('/admin/',categoryRoute)
app.use('/admin/',subCategoryRoute)
app.use('/admin/',professionalRoute)
app.use('/admin/',slotRoute)

app.use('/',(req,res) =>{
    res.render('index')
})

const PORT = process.env.PORT || 8002
app.listen(PORT,() =>{
    console.log(`This server is running on port ${PORT}`)
})