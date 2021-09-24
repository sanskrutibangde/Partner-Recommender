var app=require('express').Router();
var mess=require('./mess')
app.get('/mess',mess.mess);
app.post('/addbook',mess.addbook);
module.exports=app;