
<html><head><style>
  .background{
background-color: black;
border: 2px solid red;
}
h4{
  width: auto;

color: yellow;
margin: 10px;
display: flex;
justify-content: center;
font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
font-size: 20px;



}
h5{margin: 10px;
  color: white;
display: flex;
justify-content: center;
font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
font-size: 15px;



}

</style></head>
<body>
  <div class="background">
    <h4></h4>
    <h5></h5>

 
  
<?php

$uname= $_POST['uname'];
$foodid=$_POST['foodid'];
$foodid1=$_POST['foodid1'];
$foodid2=$_POST['foodid2'];
$foodid3=$_POST['foodid3'];
$foodid4=$_POST['foodid4'];
$phone_number=$_POST['phone_number'];
$nearplace=$_POST['nearplace'];
$adress=$_POST['adress'];
$datetime=$_POST['datetime'];




//Database connection
$conn = new mysqli('localhost','root','','user details');
if($conn->connect_error)
{
  die(' please  fill the form Exactly : '.$conn->connect_error);
}
else
{
  $stmt = $conn->prepare("insert into customer_details(uname,  foodid,foodid1,foodid2,foodid3,foodid4, Phone_number, nearplace, adress, datetime) 
   values(?, ?, ?, ?,?,?,?,?,?,?)");
  $stmt->bind_param("ssssssssss",$uname, $foodid, $foodid1, $foodid2, $foodid3, $foodid4,  $phone_number, $nearplace, $adress, $datetime); 
}
  $stmt->execute();

  echo "  <h4> HI!  </h4>"."<h5>$uname .<br></h5>" ;
  echo "<h4>Your order placed  successfully </h4> <br>";
  echo "<h4>please not the food Id  and your phone number to take the order </h4><br>";
  echo "  <h4>YOUR FOOD ID IS: </h4>"."<h5>$foodid .<br></h5>" ;
  echo "  <h4>YOUR FOOD ID IS:</h4>"."<h5>$foodid1 .<br></h5>" ;
  echo "  <h4>YOUR FOOD ID IS:</h4>"."<h5>$foodid2 .<br></h5>" ;
  echo " <h4> YOUR FOOD ID IS:</h4>"."<h5>$foodid3 .<br></h5>" ;
  echo " <h4> YOUR FOOD ID IS:</h4>"."<h5>$foodid4 .<br></h5>" ;
  echo " <h4> YOUR  costomer ID IS your phone number   </h4>"."<h5>$phone_number.<br> </h5>";

  $stmt->close();
  $conn->close();   



?> </div>
</body>

</html>

