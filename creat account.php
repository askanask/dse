
<html>
<head>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
<title> home page sign in </title>
<link rel="stylesheet"  href="style.css">
<style>
    
@media  screen and (max-width:640px) {
    .background  img{
        height: 700px;
    
    }
    .background #welcome2{
        font-size: 15px;
        
    }
}



</style>
</head>
<body>
<script src="https://kit.fontawesome.com/7919f47700.js" crossorigin="anonymous"></script>

    <div class="navigation">
    <img src="http://localhost/dse/images/skyrestlogo.png" alt="">

        <a href="http://localhost/dse\index.php"> HOME</a>
       
        <a href="http://localhost/dse\aboutus.php">ABOUT US </a>
        <a href="http://localhost/dse\creat account.php">ORDER </a>
    </div>
<div class="background"> 
    
    
   <div id="main"> <div id="welcome2">
    <h3>Welcome Back</h3>
    <br>
    <p>
"Welcome to our flavorful community! "</p><br>
<h5>Write the name</h5><br>
<h5>Write the Phone number  <b> here the primary id is your phone number</b></h5><br>
<h5>  Near by place  for our delivery boy find you </h5><br>
<h5>What is your  adress you currently bieng</h5><br>
<h5>do you have many orders you can fill  maximum five columns as well as you cane put order five itemsbr </h5><br>
<h5>if you want many food in same thing you can put same food id in severel coulmns</h5><br>
<h5>Finally click the ORDER NOW button to put final order</h5><br>


   </div>
<div class="container2">
    <form  id="form" class="form" action="form.php" method="post">
<h1 class="heading"> FILL RELATED INFORMATION </h1>
<a href="#" class="social"></a>
<span >GIVE YOUR DETAILS</span>
<input id="uname" name="uname" type="text" placeholder="Name">

<input  id="phone_number" required name="phone_number" type="text" placeholder="phone number">
<input id="near place" name="nearplace"  required type="text" placeholder="near place">
<input  id="adress" name="adress" type="text" required  placeholder=" adress">
<input  id="datetime" name="datetime" required  type="datetime-local" placeholder=" date and time">
<input  id="foodid" name="foodid" type="text" required  placeholder=" place the food id">
<input  id="foodid1" name="foodid1" type="text" placeholder=" second food id">
<input  id="foodid2" name="foodid2" type="text" placeholder=" third food id">
<input  id="foodid3" name="foodid3" type="text" placeholder=" fourth food id">
<input  id="foodid4" name="foodid4" type="text" placeholder=" fifth food id">



<button >ORDER NOW</button>
</form>
</div>
</div>






 </div>

 <div class="footer">
 <h2> <i class="fa-solid fa-house"> SKY REST </i></h2> 

<h2>  <i class="fa-solid fa-globe"> skyrest.order@gmail.com </i></h2> 
<h2>  <i class="fa-solid fa-phone">  075472846, 0728497854</i></h2>
 <h2><i class="fab fa-facebook-f"> facebook.Skyrest</i></h2>
 </div>
 <script src="script.js"></script>

</body>


</html>
