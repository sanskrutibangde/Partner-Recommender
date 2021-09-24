
var messes;
function getData()
{
    messes=[];
    fetch('http://localhost:4000/mess/mess')
    .then(response=> {return response.json()})
    .then((data)=>{
        data.forEach(d=>messes.push(d));
        writetoSection(messes);
        
    //return data;
    
    })
    .catch((error)=>console.error(error));
    
    
}
function sortByPrice()
{
    //console.log("sorting");
    //console.log(document.getElementById('sortselect').value)
    if(document.getElementById('sortselect').value=='desc')
    {
    var messd=messes.sort((a,b)=>{
        if(a.price<b.price)
            return 1;
        else
            return -1;
    });
    writetoSection(messd);
    }
    if(document.getElementById('sortselect').value=='asc')
    {
        var messa=messes.sort((a,b)=>{
            if(a.price>b.price)
                return 1;
            else
                return -1;
        })
        writetoSection(messa);
    }
}

function createCookie()
{
    setCookie("userid","pravesh@gmail.com",9)
}
function setCookie(cname, cvalue, exdays) {
    const d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    let expires = "expires="+ d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
    console.log(document.cookie);
  }
  function getCookie(cname) {
    let name = cname + "=";
    let decodedCookie = decodeURIComponent(document.cookie);
    let ca = decodedCookie.split(';');
    for(let i = 0; i <ca.length; i++) {
      let c = ca[i];
      while (c.charAt(0) == ' ') {
        c = c.substring(1);
      }
      if (c.indexOf(name) == 0) {
        return c.substring(name.length, c.length);
      }
    }
    return "";
  }
//createCookie();
function order(data)
{
    console.log(data.id);

    var foodid=data.id;
    var userid='';
    console.log(document.cookie.length)
    if(document.cookie.length!=0)  
    {  
        userid=getCookie('userid');
    }
    if(userid.length==0)
        {
            alert("Can't book your request relogin again");
            return;
        }
    console.log(document.getElementById(data.id).value);
    var messid=document.getElementById(data.id).value;
    order={
        'messid':messid,
        'userid':userid,
        'foodid':foodid
    };
    fetch('http://localhost:4000/mess/addbook',{
        'method':'POST',
        headers: {
            'Content-Type': 'application/json'},
        'body':JSON.stringify(order)
    })
    .then(response=> {
        return response.json();
    }).then(data=>{
        console.log(data);
        if(data.affectedRows>0)
            {
                window.location.href = "payment.html?messbookid="+data.insertId;
            }
        else
        {
            alert("please try later");
        }
    })
}
// function checkCookie() {
//     let username = getCookie("userid");
//     if (username != "") {
//      alert("Welcome again " + username);
//     } else {
//       username = prompt("Please enter your name:", "");
//       if (username != "" && username != null) {
//         setCookie("usernameid", username, 365);
//       }
//     }
//   }
//   checkCookie();
function filterveg()
{
    
        var data1=messes.filter((x)=>{
            if(x.foodtype.toLowerCase()=='veg')
                return x;
        });
        //console.log(data1);
        writetoSection(data1);
}
function filternonveg()
{
    
        var data1=messes.filter((x)=>{
            if(x.foodtype.toLowerCase()=='non-veg')
                return x;
        });
        //console.log(data1);
        writetoSection(data1);
}
function clearFilters()
{
    getData();
    sortByPrice();
    //if(document.getElementById('sortselect').value=)
}
//var messes=[];
getData();
//createCookie();
//writetoSection(messes);
console.log(messes);
function writetoSection(data)
{
    res='';
        data.forEach(d => {
            
            res+='<div class="card col-4" style="width: 24rem;">'
        res+='<div class="card-body text-center bg-success text-light">'
         res+= '<h5 class="card-title">'+d.mess_name.toUpperCase()+'</h5>'
         res+= '<p class="card-text">'+d.address+'</p>'
        res+='</div>'
        res+='<ul class="list-group list-group-flush">'
          //<li class="list-group-item">An item</li>
          res+='<li class="list-group-item">Owner Name:'+d.owner_name+'</li>'
          res+='<li class="list-group-item">Phone:'+d.mess_phone+'</li>'
          res+='<li class="list-group-item">Email:'+d.email+'</li>'
        res+='</ul>'
           res+=' <div class="card-body">'
           
            res+= '<p class="card-text text-wrap text-start">'+d.foodname+' </p>'
            res+= '<p class="card-text text-wrap text-start">'+d.fooddesc+' </p>'
           res+='<p class="card-text text-wrap text-start">'+d.foodtype.toUpperCase()+' </p>'
            
              
              res+='<p class="card-text text-end text-wrap">'+d.price+'Rs</p>'
              res+='<div class="text-center">'
              res+= ' <button id="'+d.foodid+'" value="'+d.messid+'" class="btn btn-success text-center" onclick=order(this)>Book Now</button>'
              res+='</div>'
            res+='</div>'
  res+='</div>'
        });
        document.getElementById('mess').innerHTML=res;
}
function search(string)
{
    var str=document.getElementById(string.id).value;
    //console.log(str);
    
        var data1=messes.filter((x)=>{
            if(x.mess_name.toLowerCase().includes(str.toLowerCase()))
                return x;
        })
        writetoSection(data1);
    
}