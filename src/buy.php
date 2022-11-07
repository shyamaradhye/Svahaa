<?php
    session_start();
    include("connection.php");
    include("functions.php");
    
    $user_data = check_login($con);

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $prod_id = $_POST['prod_id'];
        $prod_name = $_POST['prod_name'];
        $prod_amt = $_POST['prod_amt'];
        $quantity = $_POST['quantity'];
        $cartname = $_POST['cartname'];

        //changes
        $query = "insert into '$cartname' values ('$prod_id','$prod_name','$prod_amt','$quantity')";
        mysqli_query($con, $query);
        header("Location: cart.php");
        die;
    }

?>