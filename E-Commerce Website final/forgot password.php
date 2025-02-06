<!DOCTYPE html>
<html>
<head>
  <title>Reset password</title>
  <style>
 
    body {
      background-image: url('signup image.jpg');
      font-family: "Roboto", sans-serif;
      font-family: Arial, sans-serif;
       }

    h1 {
      text-align: center;
      color: white;
    }
    
    .login-container {
      max-width: 300px;
      margin: 0 auto;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
      background-color: #f2f2f2;
    }
    
    .login-container label, .login-container input[type="text"], 
    .login-container input[type="password"], 
    .login-container input[type="submit"]
     {
      display: block;
      width: 100%;
      margin-bottom: 10px;
    }
    
    .login-container input[type="submit"] {
      background-color: #4CAF50;
      color: white;
      border: none;
      padding: 10px;
      cursor: pointer;
    }
    
    .login-container input[type="submit"]:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
  <h1>Reset password</h1>
  <form action="index.php" method="POST">
  
  <div class="login-container">
    <form>
      <label for="username">Email*</label>
      <input type="text" id="username" name="username" required>

      <label for="password">Create new Password*</label>
      <input type="password" id="password" name="password" required>
       
      <label for="password">Confirm Password*</label>
      <input type="password" id="password" name="password" required>


      <input type="submit" value="Reset">

      
      <script type="text/javascript">
   
   alert("Reset Password ")
   </script>
    </form>
  </div>
</body>
</html>
