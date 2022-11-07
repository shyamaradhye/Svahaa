<?php
    session_start();
    include("connection.php");
    include("functions.php");

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];


        if(($user_name == "admin") && ($password == "admin"))
        {
            header("Location: admin.php");
            die;
        }


        $query = "select * from users where user_name = '$user_name' limit 1";
        $result = mysqli_query($con, $query);

        if($result && mysqli_num_rows($result)>0)
        {
            $user_data = mysqli_fetch_assoc($result);
            
            if($user_data['password'] == $password)
            {
                $_SESSION['user_id'] = $user_data['user_id'];
                //changes
                /*
                $cart_id = $user_data['id'];
                $cartname = "cart";
                $cartname .= $cart_id;
                $new = "Create table '$cartname' (prod_id bigint primary key,prod_name varchar(30),prod_amt int(5),quantity int(5))";
                mysqli_query($con,$new);*/
                //changes
                header("Location: index.php");
                die;
            }
            echo "Please enter valid information!"; 
        } 
        else
        {
            echo "Please enter valid information!";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <style type="text/css">
        #text{
            height: 25px;
            border-radius: 5px;
            padding: 4px;
            border: solid thin #aaa;
            width: 90%;
        }

        #button{
            padding: 10px;
            width: 100px;
            color: black;
            background-color: lightblue;
            border: solid;
        }

        #box{
            background-color: pink;
            margin: auto;
            width: 300px;
            padding: 20px;
            border: solid;
        }

        body 
        {
            background-image: url('logos/background.jpg');
        }
        
    </style>

    <br><br><br>

    <div id="box">
        <img src="logos/svahaa-logo.png" alt="Svahaa">
    </div>

    <br><br><br>

    <div id="box">
        <form method="post">
            <div style="font-size: 20px;margin: 10px;color: black;">Login</div>

            <input id="text" type="text" name="user_name" placeholder="Enter your username"><br><br>
            <input id="text" type="password" name="password" placeholder="Enter your password"><br><br>

            <input id="button" type="submit" value="Login"><br><br>

            <a href="signup.php">Don't Have an Account!? Sign Up</a>
        </form>
    </div>


    <br><br><br>
    <br><br><br>

    <footer class="footer">
  	 <div class="container mx-4">
        <!--
  	 	<div class="row">
  	 		<div class="footer-col">
  	 			<h4 style="color:black;">company</h4>
  	 			<ul>
  	 				<li><a href="#">about us</a></li>
  	 				<li><a href="#">our services</a></li>
  	 				<li><a href="#">privacy policy</a></li>
  	 				<li><a href="#">affiliate program</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4 style="color:black;">get help</h4>
  	 			<ul>
  	 				<li><a href="#">FAQ</a></li>
  	 				<li><a href="#">shipping</a></li>
  	 				<li><a href="#">returns</a></li>
  	 				<li><a href="#">order status</a></li>
  	 				<li><a href="#">payment options</a></li>
  	 			</ul>
  	 		</div>
  	 	</div>
    -->
  	 </div>
     <br>
     <center>
     COEP CT-21001 | Made by Shyam Aradhye, Ved Biilaskar, Adwait Vipra
    </center>
  </footer>


</body>
</html>