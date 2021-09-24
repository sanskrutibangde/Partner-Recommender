var app= require('express').Router();
var messRoutes=require('../Mess/mess-routes');
app.use('/mess',messRoutes)

module.exports=app;