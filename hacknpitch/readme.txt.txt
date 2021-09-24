---- FOR TURNING ON SERVER

open cmd open folder server and write command
node server.js
---- PORT CONFIGURED ON SERVER

port 4000 is used in server
-->>  http://localhost:4000		//Whole address

---- FOR CHANGING DB ATTRIBUTES LIKE <host,db,port,etc>
Go to Server then DB then change Attributes in <db.js> file

TABLES AND DATA ATTRIBUTES REQUIRED FOR MESS MODULE and INCLUDED IN FILES 


TABLE:messbookings
->bid                     //booking id
->userid                  //user id
->foodid		  //food id
->messid                  //mess id 
->amount		  //amount of food
->pay_stat                //Payment status if(payment is notdone)then 'Not Done' otherwise pay_id


TABLE:mess
->mess_id		//mess id
->mess_phone		//mess phone number
->owner_name		//owner name
->email			//email of mess
->address		//address of mess
->mess_name		//mess name
->password		//password 
->phone			//owner phone

TABLE:foods
->foodid		//food id
->foodname		//food name 
->fooddesc		//food description
->foodtype		//veg or nonveg
->messid		//mess id
->price			//price of food



**If modules not working with error of node modules.Run below commands in server folder**

-->npm install --save express
-->npm install --save mysql
