<?php

$host="localhost";
$user="root";
$password="";
$db="user";

session_start();

$data=mysqli_connect($host,$user,$password,$db);
if($data===false)
{
   die("connection error");
}

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $username=$_POST["username"];
    $password=$_POST["password"];

    $sql="select * from login where username='".$username."' AND password='".$password."'";
    
    $result=mysqli_query($data,$sql);

    $row=mysqli_fetch_array($result);

    if($row["usertype"]=="user")
    {    
       /* $_SESSION["username"]=$username;*/
    header("location: dream day.html");
            
    }
    elseif($row["usertype"]=="admin")
    {
        $_SESSION["username"]=$username;

        header("Location: dream day.html");
        exit();
    }
    else{
        echo "username or password incorrect";
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login form</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    
        <div class="close" onclick="close();">
        <h2> X</h2>
        </div>
        
      <div class="sub-menu-1">
                  <div class="container">
                    
                  <form action="#" method="POST">
                            <h3>Sign Up</h3>
                            <input type="text"  name="username" placeholder=" Enter Name"  required >
                            <input type="password" name="password" placeholder=" Enter password"  required>
                           <!-- <h3 class="type">Select Type</h3>
                            <select name="usertype">
                                <option >Admin</option>
                                <option >User</option>
                            </select>-->
                    
                            <div class="btn-box">
                                <button type="submit" value="login" >Login</button>
                            </div> 
                        </form>
                    </div>
      </div>
</form>    
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

<script type="text/javascript">
        if(window.history.replaceState){
            window.history.replaceState(null, null, window.location.href);
        }

        function close(){
            window.location="file:///C:/Users/shwet/OneDrive/Desktop/dream%20day/dream%20day.html#vendors"
        }
</script>    
</body>
</html>