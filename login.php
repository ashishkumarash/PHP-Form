<?php
    error_reporting(0);
    $conn = mysqli_connect("localhost","root","","login"); 
    if(isset($_POST["submit"])){
        $username = $_POST['user'];  
        $password = $_POST['password']; 

  
        $sql = "select * from login where '$username' = Email && '$password' = password limit 1";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result);
          
        if($username==$row['Email'] && $password==$row['password']){  
            echo "<h1><center> Login successful </center></h1>";  
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }     
}
?>






<html>
    <head>
        <style>
body{
    background-color:#d10909;
    display: flex;
    flex-direction:column;
    justify-content: center;
    align-items: center;
}

button {   
          
       width: 50%; 
        padding: 10px 0;   
        border: none;   
        cursor: pointer;
           
         }   
   
       
 input[type=text], input[type=password] {   
        width: 350px;   
        margin: 8px 0;  
        padding: 12px 0px;  
        border: 0;
        border-bottom: 1px solid silver;      
    }  
 button:hover {   
        opacity: 0.7;   
    } 
        
     
 .container {   
        width:350px;
        margin:30px;
        padding:20px;   
        background-color:white;  
        margin: 40px auto;
    }   
.div1{
    width:100%;
    display: flex;
    flex-direction: column;
    align-items: center;    


}
.btn{
    display: flex;
    gap:2px;
    width: 100%;
    margin-top: 20px;
}
a{
    text-decoration: none;
}
.container{
    border-radius:3px;
    box-shadow: 0 0 10px rgb(0 0 0 / 0.5);
}
</style>

    </head>
<body>
    <form method="POST">
    <div class="container">
    <h2>Login</h2>
    <div class="div1">    
        <input type="text" placeholder="Email" name="user" required>
        <input type = "text" placeholder="Password" name="password" required>
        <a href="#">forgot Password</a>
        <div class="btn">
            <button type="submit"><a href="index.php">REGISTER</a></button>
            <button type="submit" name="submit">SIGN IN</button>
        </div>
    </div>


    </div>
</form>
</body>   
</html>