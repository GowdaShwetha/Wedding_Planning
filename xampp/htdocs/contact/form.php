<?php include 'sendEmail.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact us</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        *{
            margin: 0;
            padding:0;
            box-sizing:border-box;
            text-decoration: none;
    outline:none;
    border:none;
   /* text-transform: capitalize;*/
    font-family: "open Sans"; 
        }
:root{
    --cream:#FEF2F2;
    --dreamcream:#E4C2C1;
    --colorgradient:linear-graident(90deg,var(--dreamcream),var(--cream));
    --lightmarron:#B6666F;
    --deeppink:#F53163;
    --sandcolor:#D1A080;
    --white:#FFFFFF;
    --purple:#B14096;
    --pink:#F83292;
    --graident:linear-graident(90deg,var(--purple),var(--pink));
}
    
 form input{
    display: block;
    width:300px;
    padding:15px 5px; 
    /*margin:10px 0;*/
    border:0;
    border-bottom:1px solid #999;
    outline:none;
    background:transparent;
    color:black;
    font-size: 1rem;
}
form input ::placeholder{
   color:black;
}
/* or 
::placeholder{
    color:black;
} */

.btn{
    width:45%;
    margin:30px auto;
    text-align: center;

}
form button{
    width:110px;
    height: 35px;
    margin:0 10px;
    background:linear-gradient( to right,#F83292,#B14096);
    border-radius:30px;
    border:0;
    outline:none;
    color:#fff;
    cursor:pointer;
    font-size: 1rem;
    margin-top:2px;
} 
form button:hover{
    background:var(--pink);
}

.container{
  position:fixed;
  top:0;
  left:0;
  min-height: 100%;
  width:100%;
  background:rgba(0,0,0,.7);
  display:flex;
  align-items:center;
  justify-content:center;
  z-index:10000;
}
.container form{
    margin:2rem;
    padding:1.5rem 2rem;

    background: white; 
    width:400px;
    height:400px;
    top:100px;
    left:40px;
    transition:  5s;
    border-radius: 2rem;
    font-size: 1rem;
}
.container form h3{
   font-size:1.3rem;
   color:var(--pink);
   text-transform:center;
   text-align:center;
   padding:1rem 0;
   margin-top:8px;
   margin-bottom:12px;
}
.msg{
    display: block;
    width:300px;
   /* padding:13px 5px;*/
    padding-top:4%;
    padding-bottom: 1%;
   /* margin:10px 0;*/
    border:0;
    border-bottom:1px solid #999;
    outline:none;
    background:transparent;
    color:black;
    font-size: 1rem;
    text-transform: capitalize;
}
.btn{
    margin-left: 25%;
}
.alert-success{
    z-index: 1;
    color:var(--pink);
    font-size: 1.5rem;
    padding:20px 40px;
    min-width:420px;
    position: fixed;
    left: 0;
    top:5%;
    border-radius: 4px;
}
.alert-error{
    z-index: 1;
    color:red;
    font-size: 1.5rem;
    padding:20px 40px;
    min-width:420px;
    position: fixed;
    left: 0;
    top:0;
    border-radius: 4px;
}
form{
    background:transparent;
}
.close{
    margin-top:1%;
    color:red;
    font-size: 1rem;
    padding-left:97%;
}
</style>    
</head>
<body>
      <?php
       echo "$alert";
       ?>
        <div class="close" onclick="dream();">
        <h3 >X</h3>
      </div>
   <div class="container">
    <form  action="" method="post">
       <h3>Contact Us</h3>
         <input type="text" name="name" placeholder=" Enter Name" required>
         <input type="email" name="email" placeholder=" Enter Email" required>
         <input type="text"  name="subject" placeholder="Subject" required>
         <textarea class="msg" name="message" placeholder="Your message" required ></textarea>
        <button class="btn " name="submit" value="Send" >Send</button>
         </form>
 
    </div>

<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

    <script type="text/javascript">
        if(window.history.replaceState){
            window.history.replaceState(null, null, window.location.href);
        }
        function dream()
      {
    window.location="file:///C:/Users/shwet/OneDrive/Desktop/dream%20day/dream%20day.html#vendors";
       }
    </script>   
</body>
</html>