<html>
<head>
    <meta name="viewport"  content="width=device-width, initial-scale=1.0">
<title> home page sign in </title>
<link rel="stylesheet"  href="style.css">
 <style>
  .bottom i{
    display: flex;
    flex-direction: row;
  justify-content: center ;
  
  padding: 20px 50px 10px 50px ;
} .bottom{ color: white;}
.cam{
  width: 10px;
  height: 10px;
  border-radius: 50%;
  background-color: white;
  margin-left: 48%;
}
  
        .background{
      
      background-image: url(searchbg.jpg);
      background-attachment: fixed;
      background-size: cover;
      display: flex;
  width:100%;
flex-direction: row;
height: 100%;
}
.searchbar{width: 330px;
display: flex;
height:40px ;
margin:15px;
justify-content: center;
align-items: center;
flex-direction: row;


}
.searchbar  select{
  background-color: #FFC300;
  width: 70px;
  margin:0;
  height:35px ;
  color: black;
  border: none;
  border-radius: 5px;
}
.p
{display: flex;
  justify-content: left;
  flex-direction: column;
color: #FFC300;
font-size: 20px;
font-family: poppins;
font-weight: 30px;
margin: 30px;
filter: drop-shadow(5px 5px 5px black);


}
.container{
  margin: 10px 10px 10px 50px;
 position: relative;

  display: flex;
  
  align-items: center;
 
  
  flex-direction: column;
background-color:#F8EFD0  ;
border: 8px solid black;
width: 350px;
height: 600px;

box-shadow: 5px 5px 5px black;
border-radius: 40px;
}
.container  input{
 border: none;
 border-radius: 5px;
  width: 230px;
  margin-left: 10px;
  background-color: #FFC300;
  color: black;
}
.container button{
  align-items: center;
  margin-left:35px;
  margin-top: 20px;
  width: 280px;
  border: 1px solid black;
  
  
}
.div{
  display: flex;
  padding:  10px 80px 10px 80px;
  flex-direction: row;

}
.headbar{
  width: 100%;
  height: 80px;
  border-radius: 30px 30px 0 0 ;
  background: #FFC300;
}
.container h1{

  width: 100%;
  height: 80px;
  padding-top: 15px ;
  color: black;
 
  text-align: center;
 
  font-family:poppins;
  font-size: 25px;
  



  
}
#searchResult{

  background-color: #FFC300;
  padding: 15px;
  margin: 40px 15px 15px 15px;

}

#searchResult p {
  color: black;padding: 15px;
  background-color: white;
  font-size: 20px;
  font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
}
#searchResult a h6{ 
color: black;
background: white;

}
#searchResult h2{

  text-decoration: none;
  color: black;
  margin: 10px;
  padding: 10px;
}
#searchresults a{
  color: white;
}
.head{
  width: 250px;
  margin: 0 50px 10 50px;

  height: 20px;
  border-radius: 0 0  15px 15px;
  background-color: black;
}
.bottom{
position: absolute;
bottom: 0;
  width: 100%;
  height: 50px;
  margin: 0;
  background-color: black;
  display: flex;
  border-radius: 0 0 28px 28px;
}
.piccontain .picname{
  width: 100px;
  height: 70px;
  padding: 10px;
  font-size: 10px;border-radius: 10px 10px 0 0;
  
  
  
}
.piccontain .picname h4{
  color: #FFC300;
  padding: 10px;
  background-color: black;
}
.piccontain
{
display: flex;
height: auto;
}



.picname :nth-child(odd){
  margin-top:10px;
}
.picname:nth-child(even){
  margin-top:100px;
}

.piccontain img{
  border-radius:0 0 10px 10px;
  border: 1px solid black;
filter:drop-shadow(10px 5px 5px black);
flex-direction: row;
  width: 100px;
  height: 150px;
}
        

    @media screen and (max-width:640px) {
      .piccontain img{
  border-radius: 10px;
  border: 1px solid black;
filter:drop-shadow(10px 5px 5px black);

  width: 200px;
  height: 200px;
 
}   
.piccontain .lastimg{
  margin-bottom: 0;
}
.piccontain
{
display: block;


}

.piccontain img:nth-child(odd){
  margin-top:10px;
}
.piccontain img:nth-child(even){
  margin-top:10px;
}
.piccontain .picname {

  width: 200px;
  height: 300px;
 
  margin: 0;
  
  color: #FFC300;
  font-size: 20px;
}
.piccontain .picname h4{
  background-color: black;
  color: #FFC300;
}
#searchResult p {
  color: black;padding: 5px;
  background-color: white;
  font-size: 15px;
  font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
}
#searchResult{

background-color: #FFC300;
padding: 5px;
margin: 0 5px 5px 5px;
width: 330px;
border-radius: 0 0 15px 15px;


}

.bottom{ color: white;}

      
      .background {
      height:400%;
     }
      
      .background .p{
           margin-top:10px;
        
       height: auto;
        justify-content: center;
            font-size: 15px;
            
padding:10px;
        }
        .background .bottom{
position: absolute;
bottom: 0;
padding: 10px 50px 10px 10px ;
 
    height: 40px;
    width: 300px;
   
    
   
}

.container h1{
  border-radius: 10px 10px 0 0;
  
}

       .background .div  .container {
      
        align-items: center;
        padding: 0;
           position: relative;
            flex-direction: column; 
            margin: 20px 10px 0 5px;
            width: 350px;
            height: 350px ;
           
           
       

        }
        .background .div  .container .searchbar{
           

padding: 0;
margin: 0;

        }
        .background .div  .container .head{
            position: absolute;
            top: 0;
          
            justify-content: center;
            align-items: center;
        }
        .background .container  input{
            width: auto;

        }
        
        .background .container .searchoption{
            width: 350px;
            
            display: flex;
            flex-direction: column;
            
           
            margin: 0;
        }
       
        
        
        .background .container  .searchoption .searchbar input{
          background-color: #FFC300;
          color: black;
          border: none;

        }
        .background .container  .searchoption .searchbar select{
          background-color: #FFC300;
          color: black;
          border: none;

        }
        .background .container h1{
            margin: 15px 10px 10px 10px;
            font-size: 15px;
            width: 90%;
        }
        .background {
            
           
           height:auto;
        }
        .div{
           display: flex;
           flex-direction: column;
           margin: 0;
          
          
        }

        #searchResult p {
    color: black;
    font-size: 10px;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
}
#searchResult h2{

    text-decoration: none;
    color: black;
    margin: 10px;
}
    }

   

 </style>
</head>
<body>
<script src="https://kit.fontawesome.com/7919f47700.js" crossorigin="anonymous"></script>

    <div class="navigation">
        <img src="http://localhost/dse/images/skyrestlogo.png" alt="">

        <a href="http://localhost/dse\index.php" class="active"> HOME</a>
        
        <a href="http://localhost/dse\aboutus.php">ABOUT US </a>
        
    </div>
<div class="background"> 
   
<div class="div"><div class="p">

    Welcome to SKYREST,<br> your one-stop destination for delicious<br> food delivered right to your doorstep!<br> Browse our diverse menu, <br>place your order effortlessly,<br> and enjoy swift delivery.<br>
     Indulge in a world of flavors and convenience with us.<br> Thank you for choosing SKYREST  for your culinary adventures!
    
     <div class="piccontain">
     <div class="picname"><h4>Customer With Happy</h4>
      <img src="http://localhost/dse/images/eat.jpg" alt="eating"></div>

<div class="picname"><h4>Delicious and Tasty Foods</h4>
      <img src="http://localhost/dse/images/eatburger.jpg" alt="eating"></div>

      <div class="picname"><h4>Customer With Happy</h4>
      <img src="http://localhost/dse/images/eatchicken.jpg" alt="eating"></div>

      <div class="picname"><h4>Customer With Happy</h4>
      <img src="http://localhost/dse/images/eatimg1.jpeg" alt="eating"></div>

      <div class="picname"><h4>Customer With Happy</h4>
      <img src="http://localhost/dse/images/eatimg2.jpeg" alt="eating"></div>

      <div class="picname"><h4>Customer With Happy</h4>
      <img  class="lastimg" src="http://localhost/dse/images/eatimg.jpg" alt="eating"></div>
    </div>
    
    </div>

    
<div class="container">
<div class="headbar">
    <div class="head"><div class="cam"></div></div>
    <h1>SEARCH YOUR AREA   </h1>
    </div>
    <div class="searchoption">
    <div class="searchbar">
    <input type="text" id="searchInput" name="searchInput" placeholder=" Type Selected place To Search..."> 
     <select for="searchinput"name="places" id="places">
     <option value="ampara" > Ampara</option>
     <option value="ampara" > Batticaloa</option>
     <option value="ampara" > Trincomalee</option>
     <option value="ampara" > Kandy</option>
     <option value="ampara" > Nuweraliya</option>
     <option value="ampara" > Badulla</option>
     <option value="ampara" > Jafna</option>
        <option value="ampara" > Kalutura</option>
        <option value="ampara" > Kurunagala</option>
        <option value="ampara" > colombo</option>
    </select>
    </div>
    <button onclick="searchUser()"><i class="fa-solid fa-magnifying-glass"></i> Search   </button>
    </div>
    <div id="searchResult"></div>
    
    <div class="bottom">
    <i class="fa-solid fa-house"></i>
    <i class="fa-solid fa-globe"></i>
    <i class="fa-solid fa-phone"></i>
</div>  

</div>

 
  </div>
  <script src="scriptsearch.js"></script>
    






 </div>
</div>

 <div class="footer">
        <h2> <i class="fa-solid fa-house"></i> SKY REST</h2> 

         <h2>  <i class="fa-solid fa-globe"></i> skyrest.order@gmail.com </h2> 
         <h2>  <i class="fa-solid fa-phone"></i>  075472846, 0728497854



 
 </div>


</body>


</html>