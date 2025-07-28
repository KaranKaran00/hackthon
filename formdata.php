 <?php
    $loginid=$_POST['loginid'];
    $password=$_POST['password'];

    $conn=mysqli_connect('localhost','root','','formdb');

    $sql="INSERT INTO  formdata (loginid,password) VALUES ('$loginid','$password')";

    mysqli_query($conn,$sql);

?> 
