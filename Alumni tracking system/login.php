<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Sign Up </title>
    <link rel="stylesheet" href="Css/style.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
  
    <div class="login-container">
    <form action="index.php" method="POST">

        <h1>Login</h1>
        <form>
        <label for="username">Username</label>
            <input type="text" placeholder="Enter Username" name="username" required>

            <label for="pswrd">Password</label>
            <input type="password" placeholder="Enter Password" name="pswrd" required>

        <button type="submit">Login</button>
        
        <a href="sign up.php">Create new account</a>
     </form>
    </div>
  </body>
</html>


    <style>

body {
 
    background-image: url('front page.jpg');
    font-family: "Roboto", sans-serif;
}

.login-container {
  width: 360px;
  height: 320px;
  margin: auto;
  background-color: white;
  border-radius: 3px;
}

.login-box {
  width: 360px;
  height: 280px;
  margin: auto;
  border-radius: 3px;
  background-color: white;
}

h1 {
  text-align: center;
  padding-top: 15px;
}

form {
  width: 300px;
  margin-left: 20px;
}

form label {
  display: flex;
  margin-top: 20px;
  font-size: 18px;
}

form input {
  width: 100%;
  padding: 7px;
  border: none;
  border: 1px solid gray;
  border-radius: 30px;
  outline: none;
}
button {
 width: 320px;
  height: 35px;
  margin-top: 20px;
  border: none;
  background-color: #49c1a2;
  color: white;
  font-size: 18px;
  border-radius: 30px;
}
p {
  text-align: center;
  padding-top: 20px;
  font-size: 15px;
}
.para-2 {
  text-align: center;
  color:black;
  font-size: 15px;
  margin-top: -10px;
}
.para-2 a {
  color: #49c1a2;
}

        </style>





<script type="text/javascript">
   
   alert("Login")
   </script>

  </body>
</html>

