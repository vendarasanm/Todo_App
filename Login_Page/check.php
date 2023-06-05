<?php
if(!isset($_POST['submit'])){
$username = $_POST['username'];
$password = $_POST['password'];
$conn = mysqli_connect("localhost","root","Root@123","loginpage");
$sql = "SELECT * FROM login WHERE username = '$username' AND password = '$password' ";
$result = mysqli_query($conn,$sql);
$resultcheck = mysqli_num_rows($result);
if($resultcheck>0){
echo "login successful";
}
else{
    echo "login failed";
}

}
?>