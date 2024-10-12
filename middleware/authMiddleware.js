export const isAuthenticated = (req, res, next) => {
    if (req.session.user) {
        return next();  
    } else {
        req.session.returnTo = req.originalUrl;   
        return res.redirect('/login');  
    }
};
