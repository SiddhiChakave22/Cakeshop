<?php
$server = "localhost";
$username = "root";
$password = "";
$database="project";

$conn=new mysqli($server,$username,$password,$database);

if(isset($_POST['name'])){
    $sql='INSERT INTO user_data VALUES("'.$_POST['name'].' ", '.$_POST['mno'].',';
    $re=$conn->query($sql);
    $result=$re->fetch_all();
    echo $result[0][0];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up Page</title>
    <link rel="stylesheet" href="signincss .css">

    <script>
        function validateForm(){
            var Name=document.myForm.name.value;
            var Mobile=document.myForm.mno.value;
            var Email=document.myForm.email.value;
            var Password=document.myForm.pwd.value;
            var format1=/[1234567890]+/;
            var format2=/[abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ]+/;
            var format3=/[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]+/;
            if(Name=="")
            {   alert ("Please Enter Name");
                return false;
            }
            if(Mobile=="")
            {   alert ("Please Enter Mobile Number");
                return false;
            }
            if (format1.test(Mobile)==false){
                alert("Please enter a valid mobile number");
                return false;
            }
            if ((Mobile.length)!=10){
                alert ("Please enter 10 digit mobile number");
                return false;
            }
            if (Password==""){
                alert("Please Enter Password");
                return  false;
            }
            if(Password.lenght<8){
                alert("Please Enter atleast 8 characters");
                return false;
            }
            if (format2.test(Password)==false){
                alert("Please Enter Numbers,Characters,Special Symbols(@,_,#)");
                return false;
            }
            if (format3.test(Password)==false){
                alert("Please Enter Numbers,Characters,Special Symbols(@,_,#)");
                return false;
            }
        }
    </script>
</head>
<body>
    <div class="main">
        <div class="navbar">
       
            <img class="logo" src="logof.png" width="45px">
            <img class="sideimg" src="loginside .jpg">
                
        </div>
        <img class="boximg" src="loginbg.png">
        <div class="box">
            <form class="myform" name="myForm" action="signin.php" method="POST">
                <h4 class="head">Sign up to complete your order</h4>
                <h2 class="head1">Already have an account? <a href="login.html">Login</a></h2>
                <label class="lb">Full Name</label>
                <br>
                <input type="text" class="lbin" placeholder="Name(eg.FirstName LastName)" name="name">
                <br><br>
                <label class="lb" style="margin-top: -50px;">Mobile Number</label>
                <br>
                <input type="tel" class="lbin" placeholder="Mobile Number" name="mno">
                <br><br>
                <label class="lb">Email Id</label>
                <br>
                <input type="text" class="lbin" placeholder="Email Id" name="email">
                <br><br>
                <label class="lb">Password</label>
                <br>
                <input type="text" class="lbin" placeholder="Password" name="pwd">
                <br><br>
                <label class="lb">Date of Birth</label>
                <br>
                <input type="date" class="lbin" placeholder="Date of Birth(DD/MM/YY)">
                <br><br>
                <input type="submit" class="sbtn" value="SIGN UP" onclick=validateForm()>
                <img style="position:relative;top: 90px;z-index: index -1" src="contimg.jpg">
                <a href="https://mail.google.com/"><img src="google.jpg" style="position:relative;top:90px;left:50px" width="250px"></a>
                <a href="https://www.facebook.com/"><img src="fb.jpg" style="position:relative;top:90px;left: 70px" width="250px"></a>
                
            </form>
            
        </div>
    </div>
</body>
</html>