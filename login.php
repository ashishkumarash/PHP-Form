<?php
?>






<html>
    <head>
        <style>
body{
    background-color:#d10909;
    display: flex;
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
</style>

    </head>
<body>
    
    <div class="container">
    <h2>Login</h2>
    <div class="div1">    
        <input type="text" placeholder="Email" name="Email" require>
        <input type = "text" placeholder="Password" name="Password" require>
        <a href="#">forgot Password</a>
        <div class="btn">
            <button type="submit"><a href="index.php">REGISTER</a></button>
            <button type="submit">SIGN IN</button>
        </div>
    </div>


    </div>
</body>   
</html>