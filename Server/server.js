var app = require('express')();
var routes=require('./Router/routes.js');
var bodyp=require('body-parser');
app.listen(4000,()=>{console.log('listening')});
app.use((req, res, next) => {
  res.header('Access-Control-Allow-Origin', '*');
  res.header('Access-Control-Allow-Headers','Origin,X-Requested-With,Content-Type,Accept');
  next();
});
app.use(bodyp.json());

students=[{id:1,'name':"Pravesh Dholwani"},{id:2,'name':'pravesh'}];
mess=[
  {
    'name':'VADA PAV WALA',
    'address':'127,NAgpur',
    'rating':4.5,
    'contact':9876543210,
    'food':[{'name':'veg','rate':1240},{'name':'Non-Veg','rate':1440}]
  },
  {
    'name':'VADA PAV WALA',
    'address':'127,NAgpur',
    'rating':4.5,
    'contact':9876543210,
    'food':[{'name':'veg','rate':1240},{'name':'Non-Veg','rate':1440}]
  },
  {
    'name':'VADA PAV WALA',
    'address':'127,NAgpur',
    'rating':4.5,
    'contact':9876543210,
    'food':[{'name':'Non-Veg','rate':1440}]
  },
  {
    'name':'BHURJI PAV WALA',
    'address':'127,NAgpur',
    'rating':4.5,
    'contact':9876543210,
    'food':[{'name':'veg','rate':1240}]
  }
];
app.use('/',routes);

