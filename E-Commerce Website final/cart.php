<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 id  align="center">MY CART</h1>
    <?php
        session_start();

        $connection = mysqli_connect('localhost','root','');

        mysqli_select_db($connection, 'e comerce website');

        $cart = "SELECT * FROM cart";

        $dataResult = mysqli_query( $connection,  $cart);

      
    ?>    
  
  <table>
    <tr>
      <th>Item</th>
      <th>Price</th>
      <th>Quantity</th>
      <th>Total</th>
    </tr>
    <tr>
      <td>Product 1</td>
      <td>$105.06</td>
      <td><input type="number" value="1"></td>
      <td>$105.06</td>
    </tr>
    <tr>
      <td>Product 2</td>
      <td>$699.13</td>
      <td><input type="number" value="1"></td>
      <td>$699.13</td>
    </tr>
  </table>

  <p>Total: $804.00</p>

  <button type="button">Checkout</button>

        <?php 
            while($rows  = mysqli_fetch_assoc($dataResult)){
        ?>

        
        <tr>
                <td> <?php echo $rows['Si No']; ?> </td>
                <td> <?php echo $rows['Product name']; ?> </td>
                <td> <?php echo $rows['Quality']; ?> </td>
                <td> <?php echo $rows['Price']; ?> </td>
               
        </tr>


        <?php }?>

    </table>



<style>
    body{
        background-color:white;
    }
    body {
      font-family: Arial, sans-serif;
    }

    table {
      width: 100%;
      border-collapse: collapse;
    }

    th, td {
      padding: 8px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }

    th {
      background-color: #f2f2f2;
    }

    input[type="number"] {
      width: 60px;
    }

    p {
      font-weight: bold;
    }

    button {
      padding: 10px;
      font-size: 16px;
      font-weight: bold;
      color: #fff;
      background-color: #4CAF50;
      border: none;
      border-radius: 3px;
      cursor: pointer;
    }


</style>

    <h2 >Delete products</h2>

    <form action="cartdelete.php" method="POST">
    <input type="text" placeholder="Enter Serial Number" name="Si">
    <button type="submit" name="delete">Delete</button>
    </form>
    
    




    


    <script type="text/javascript">
   
   alert("ADDED TO CART")
   </script>



</body>
</html>