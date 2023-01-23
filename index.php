<?php
    $conn = mysqli_connect("localhost","root","","login");
    

if(isset($_POST["submit"])){
    $firstname=$_POST["firstName"];
    $lastname=$_POST["lastname"];
    $Email=$_POST["email"];
    $password=$_POST["password"];
    $repassword=$_POST["repassword"];
    $gender=$_POST["gender"];
    $country=$_POST["country"];
   
    $sql = "INSERT INTO `login` (`Email`, `firstname`, `lastname`, `password`, `gender`, `country`) 
            VALUES ('$Email', '$firstname', '$lastname', '$password', '$gender', '$country')";

    if($password==$repassword){
        if($conn -> query($sql) == TRUE){
            echo "<script>alert('Register Successfull..!!')</script>";
        }   
    }else{
        echo "<script>alert('Enter same password..!!')</script>";
    }
}
// $store=insert into login ("firstname","lastanme","Email","password","country","gender")values(firstname,lastname,Email,password,country,gender);
?>

<!DOCTYPE html>
<html>

<head>
    <script src="https://kit.fontawesome.com/81f4eace7d.js" crossorigin="anonymous"></script>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
    <style>
        body{
            background-color: #ebebeb;
        }
        form{
            width: 380px;
            padding: 10px;
            border-radius: 3px;
            margin: 50px auto;
            border-top: 4px solid orange;
            background: white !important;
        }
        h2{
            text-align: center;
        }
        .form-input *{
            outline: none;
        }
        .form-input{
            width: 100%;
            float: left;
            border: 1px solid silver;
            border-radius: 3px;
            height: auto;
            margin: 5px 0;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .icon {
            width: 30px;
            height: 100%;
            float: left; 
            border-right: 1px solid silver;
            padding: 10px 0;
        }
        .icon i{
            margin: 0 7px;
        }
        .name-div{
            display: flex;
            flex-direction: row;
            width: 46%;
            float: left;
            border: 1px solid silver;
            border-radius: 3px;
        }
        .inputbox{
            width: 366px;
            float: left;
        }
        .inputbox input, select{
            width: calc(100% - 6px);
            border: 0;
            outline: none;
            padding: 11px 3px;
        }
        .gender-div{
            justify-content: left;
        }
        input[type="radio"]{
            height: 35px;
            
        }
        .form-input span{
            padding-right: 20px;
        }
        select{
            width: 100%;
            border-radius: 3px;
        }
        .checkbox{
            display: block;
            align-items: start;
        }
        .submit-btn{
            padding: 10px;
            width: 100%;
            border: 0;
            border-radius: 3px;
            background-color: orange;
            cursor: pointer;
            margin-top: 20px;
        }
        .submit-btn:hover{
            background-color: #d38900;
        }
    </style>
</head>

<body>
    <form action="#" method="POST"> 
        <div>
            <h2>Responsive Registration Form<h2>
        </div>
        <div class="form-input">
            <div class="icon"><i class="fa-solid fa-envelope"></i></div>
            <div class="inputbox">
                <input type="email" placeholder="Email" id="E-mail" name="email" required>
            </div>
        </div>
        <div class="form-input">
            <div class="icon"><i class="fa-solid fa-lock"></i></div>
            <div class="inputbox">
                <input type="password" placeholder="Password" id="password" name="password" required>
            </div>
        </div>
        <div class="form-input">
            <div class="icon"><i class="fa-solid fa-lock"></i></div>
            <div class="inputbox">
                <input type="Re-typepassword" placeholder="Re-typePassword" id="re-typeSpassword" name="repassword" required>
            </div>
        </div>
        
        <div class="name-div">
            <div class="icon"><i class="fa-solid fa-user"></i></i></div>
            <div class="inputbox">
                <input type="text" placeholder="FirstName" id="FirstName" name="firstName" required>
            </div>
        </div><br>
        <div class="name-div" style="margin-left: 27px">
            <div class="icon"><i class="fa-solid fa-user"></i></i></div>
            <div class="inputbox">
                <input type="text" placeholder="LastName" id="LastName" name="lastname" required >
            </div>
        </div>
        
        <div class="form-input gender-div">
            <input type="radio" id="male" name="gender" value="Male" required><span>Male</span>
            <input type="radio" id=female name="gender" value="Female" required><span>Female</span><br>
        </div>
        <div class="form-input">
            <select name="country" required >
                <option value="0">Select Country</option>
                <option value="india">INDIA</option>
                <option value="usa">USA</option>
                <option value="uk">UK</option>
                <option value="japan">JAPAN</option>
                <option value="dubai">DUBAI</option>
            </select>
        </div>
        <div class="form-input checkbox" style="border:0">
            <input type="checkbox" required>I agree with terms and conditions<br>
            <input type="checkbox">I want to receive the newsletter<br>
        </div>
        <div class="">
            <button type="submit" name="submit" class="submit-btn">Register</button> 
        </div>
        
    </form>

</body>

</html>