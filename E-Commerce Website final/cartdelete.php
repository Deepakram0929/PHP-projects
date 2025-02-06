<?php
        session_start();

        $connection = mysqli_connect('localhost','root','');

        mysqli_select_db($connection, 'e commerce website');

        if(isset($_POST['delete']))
        {
            $Si = $_POST['Si'];
            $deletequery = "DELETE FROM cart WHERE Si = '$Si'";

           $run  = mysqli_query($connection, $deletequery);

           if($run) 
           {
                echo " Product Data Deleted";
           }
        }
       

    ?>