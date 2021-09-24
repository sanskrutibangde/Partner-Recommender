var mysql=require('mysql');

var connection=mysql.createPool({
    host:'localhost',
    port:'3306',
    user:'root',
    password:'root',
    database:'mydb'
});

connection.getConnection((e,c)=>{
    if(e)
        return e;
    else
        return connection;
});

module.exports=connection;