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
    <div class="signup-box">
    <form action="login.php" method="POST">
      <h1>Sign Up</h1>
    
      <form>
        <label>Name</label>
        <input type="text" placeholder="Enter your Name" />

        <label>Email</label>
        <input type="email" placeholder="Enter Email" />

        <label>Password</label>
        <input type="password" placeholder="Enter password" />

        <label>Confirm Password</label>
        <input type="password" placeholder="Confirm password" />
        <button type="submit">submit</button>
        <p class="para-2">
      Already have an account? <a href="index.php">Login here</a>
       </p>
     </form>
    </div>
  </body>
</html>


    <style>

body {
 
    background-image: url('front page.jpg');
    font-family: "Roboto", sans-serif;
}

.signup-box {
  width: 360px;
  height: 520px;
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
   
   alert("Create a account")
   </script>

  </body>
</html>

