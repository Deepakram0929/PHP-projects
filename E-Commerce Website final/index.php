<!DOCTYPE html>
<html>
<head>
  <title>Login Page</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      text-align: center;
      
    }

    h1 {
      margin-top:2px;
    }

    .login-form {
      display: inline-block;
      border: 5px solid #ccc;
      padding: 20px;
      border-radius: 10px;
      margin-top: 20px;
    }
    input[type=text], input[type=password]
    {
    width: 100%;
    margin: 10px 0;
    border-radius: 10px;
    padding: 15px 40px;
    box-sizing: border-box;
  }

    .login-form label,
    .login-form input[type="text"],
    .login-form input[type="password"]
     {
      display: block;
      margin-bottom: 15px;
      
    }

    .login-form input[type="submit"] {
      background-color: #4CAF50;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }
  button {
    background-color: #030804;
    color: white;
    padding: 14px 20px;
    border-radius: 5px;
    margin: 7px 0;
    width: 100%;
    font-size: 18px;
  }

button:hover {
    opacity: 0.6;
    cursor: pointer;
  }





  body 
{
  font-family:sans-serif; 
  background: -webkit-linear-gradient(to right, #155799, #159957); 
  background: linear-gradient(to right, #155799, #159957); 
  color:whitesmoke;
  
}


h1{
    text-align: center;
}


form{
    width:30rem;
    margin: auto;
    color:whitesmoke;
   
}

input{
    width: 100%;
    margin: 10px 0;
    border-radius: 5px;
    padding: 15px 18px;
    box-sizing: border-box;
  }


button {
background: linear-gradient(to right, #155799, #159964); 
color: white;
padding: 14px 20px;
border-radius: 10px;
margin: 7px 0;
width: 100%;
font-size: 18px;
}

button:hover {
    opacity: 0.6;
    cursor: pointer;
  }



  </style>
</head>

<body>

  <h1>Login</h2>
  <form action="valid.php" method="POST">
  <div class="login-form">
    <form action="/login" method="post">
      
            <label for="username">Username</label>
            <input type="text" placeholder="Enter Username" name="username" required>

            <label for="pswrd">Password</label>
            <input type="password" placeholder="Enter Password" name="pswrd" required>


 <div class="subcontainer">
                
                <p class="forgotpsd"> <a href="forgot password">Forgot Password?</a></p>
            </div>


            <!-- Submit button -->
            <button type="submit">Login</button>

            <!-- Sign up link -->
            <p class="register">Don't have an account? <a href="Sign up">sign up</a></p>

        </div>



        <script type="text/javascript">
   
   alert("Login Successfully")
   </script>


    </form>
  </div>
</body>
</html>
