login();
if(!isset($_POST['submit'])){
$username=$_POST['uname'];
$password=$_POST['password'];
$con=mysqli_connect("localhost","root","","user details");
$sql="SELECT *from customer_details WHERE uname='$username AND password='$password'";
$results=mysqli_query($con,$sql);
$resultcheck=mysqli_num_rows($results);
if($resultscheck>0){
    echo "logi in succesfull";

}
else{
    echo "failed"
}

}