var mysql =require('../DB/db');


messes=[
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


  var messob={
      'mess':(req,res)=>{
        var query="select * from mess m inner join foods f on m.mess_id= f.messid";
        mysql.query(query,(error,rows)=>{
          if(error)
          {
            res.send(error);
            console.log(error);
          }
          else
          {
            res.send(rows);
            
          }
        })
      },
      'addbook':(req,res)=>{
        
        var order=req.body;
        
        queryamt="select price from foods where foodid=?";
        mysql.query(queryamt,[order.foodid],(e,result1)=>{
            if(e)
             {console.log(e); return e;}
            else{
              queryorder='INSERT INTO MESSBOOKINGS(USERID,MESSID,FOODID,AMOUNT,PAY_STAT) VALUES(?,?,?,?,?)';
              mysql.query(queryorder,[order.userid,order.messid,order.foodid,result1[0].price,'Not Done'],(e,result2)=>{
                if(e)
                  {console.log(e);r.send(e);}
                else
                  {;res.send(result2);}
              });
            }
        });
      }
  };
  module.exports=messob;