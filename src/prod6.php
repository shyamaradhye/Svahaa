<?php
    session_start();
    include("connection.php");
    include("functions.php");
    
    $user_data = check_login($con);

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $prod_id = 10006;
        $prod_name = "Tota Chandan Tika for Pooja";
        $prod_amt = 250;
        $quantity = $_POST['quantity'];
        $id = $user_data['id'];
        $cartname = "cart"."$id";
        

        //changes
        $query = "INSERT INTO `$cartname` (`prod_id`, `prod_name`, `prod_amt`, `quantity`) VALUES ('$prod_id', '$prod_name', '$prod_amt', '$quantity')";
        mysqli_query($con, $query);

        // query to subtract from inventory
        /*
        $query = "UPDATE `inventory` SET `inventory_quantity` = `inventory_quantity` - $quantity WHERE `inventory`.`inventory_prod_id` = 10001";
        mysqli_query($con, $query);
        */


        header("Location: cart.php");
        die;
        
        
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tota Chandan Tika for Pooja</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
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

        #wrapper
        {
            position: fixed;
            display: flex;
        }

        #first
        {
            postion: fixed;
            float: left;
            padding-top: 5px;
            border: 3px solid;
        }

        #second
        {
            position: fixed;
            float: right;
            padding-left: 1000px;
        }

        a:link {
        color: black;
        background-color: transparent;
        text-decoration: none;
        }
        a:visited {
        color: black;
        background-color: transparent;
        text-decoration: none;
        }
        a:hover {
        color: black;
        background-color: transparent;
        text-decoration: underline;
        }
        a:active {
        color: black;
        background-color: transparent;
        text-decoration: underline;
        }

        .topnav-right {
        float: right;
        }

        hr.new5 {
        border: 10px solid darkblue;
        border-radius: 5px;
        }

        /*
        changes
        */
        .row {
        display: flex;
        flex-wrap: wrap;
        padding: 0 4px;
        }

        .column {
        flex: 50%;
        padding: 0 4px;
        }
        /*
        changes
        */

        .container{
            max-width: 1170px;
            margin:auto;
        }
        .row{
            display: flex;
            flex-wrap: wrap;
        }
        ul{
            list-style: none;
        }
        .footer{
            background-color: rgb(171,138,228);
            padding: 20px 0;
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            text-align: center;
        }

        .footer-col{
        width: 25%;
        padding: 0 15px;
        }

        .footer-col h4{
            font-size: 18px;
            color: #ffffff;
            text-transform: capitalize;
            margin-bottom: 35px;
            font-weight: 500;
            position: relative;
        }
        .footer-col h4::before{
            content: '';
            position: absolute;
            left:0;
            bottom: -10px;
            background-color: #e91e63;
            height: 2px;
            box-sizing: border-box;
            width: 50px;
        }
        .footer-col ul li:not(:last-child){
            margin-bottom: 10px;
        }
        .footer-col ul li a{
            font-size: 16px;
            text-transform: capitalize;
            color: #ffffff;
            text-decoration: none;
            font-weight: 300;
            color: #bbbbbb;
            display: block;
            transition: all 0.3s ease;
        }
        .footer-col ul li a:hover{
            color: #ffffff;
            padding-left: 8px;
        }
        .footer-col .social-links a{
            display: inline-block;
            height: 40px;
            width: 40px;
            background-color: rgba(255,255,255,0.2);
            margin:0 10px 10px 0;
            text-align: center;
            line-height: 40px;
            border-radius: 50%;
            color: #ffffff;
            transition: all 0.5s ease;
        }
        .footer-col .social-links a:hover{
            color: #24262b;
            background-color: #ffffff;
        }

        /*responsive*/
        @media(max-width: 767px){
        .footer-col{
            width: 50%;
            margin-bottom: 30px;
        }
        }
        @media(max-width: 574px){
        .footer-col{
            width: 100%;
        }
        }
        
    </style>
<!--
    <div id="wrapper">
    <div id="first" allign="center">
        <a href="index.php"><img src="logos/svahaa-symbol.png" width="50" height="50" ></a>
    </div>
    <div id="second">
        <h3>
        Hi, <?php echo $user_data['user_name']; ?>!  <a href="logout.php">Logout</a>
        </h3>
    </div>
    </div>
    <br><br><br>
    -->

    <?php
    include("_nav.php");
    ?>
    <hr class="new5">
    
    <center>
    <table>
        <tr>
            <td></td>
            <td><img src="prod_images/prod6.jpeg" width="500"></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>
                <h3>Tota Chandan Tika for Pooja</h3>
                <center><h5>₹250.00</h5></center>
                <br>
                <center>
                <form method="post">
                <label for="quantity">Quantity:</label>
                <input type="number" id="quantity" name="quantity" min=1 max=20>
                
                </center>
                <br><br>

                <center><input id="button" type="submit" value="Add to Cart"><br><br></center>
                </form>
            </td>
            <td></td>
        </tr>
    </table>
    </center>


    <!--
    <center>
    <table>
    <tr>
        <td><a href="prod1.php"><img src="prod_images/prod1.png" width="300"></a></td>
        <td> </td>
        <td></td>
        <td><a href="prod2.php"><img src="prod_images/prod2.jpeg" width="300"></a></td>
        <td></td>
    </tr>
    <tr>
    </tr>
        <td><br></td>
    <tr>
        <td><a href="prod3.php"><img src="prod_images/prod_3.jpeg" width="300"></a></td>
        <td></td>
        <td></td>
        <td><a href="prod4.php"><img src="prod_images/prod4.png" width="300"></a></td>
        <td></td>
    </tr>
    <tr>
    </tr>
        <td><br></td>
    <tr>
        <td><a href="prod5.php"><img src="prod_images/prod5.jpeg" width="300"></a></td>
        <td></td>
        <td></td>
        <td><a href="prod6.php"><img src="prod_images/prod6.jpeg" width="300"></a></td>
        <td></td>
    </tr>
    </table>
    </center>
    -->
    <!--

    <div class="row"> 
        <center>
        <div class="column">
            <img src="prod_images/prod1.png" width="200" height="200" align="left">
            <img src="prod_images/prod2.jpeg" width="200" height="200" align="center">
            <img src="prod_images/prod3.jpeg" width="200" height="200" align="right">
        </div>
        <br>
        <div class="column">
            <img src="prod_images/prod1.png" width="200" height="200" align="left">
            <img src="prod_images/prod2.jpeg" width="200" height="200" align="center">
            <img src="prod_images/prod3.jpeg" width="200" height="200" align="right">
        </div>
        <br>
        <div class="column">
            <img src="prod_images/prod1.png" width="200" height="200" align="left">
            <img src="prod_images/prod2.jpeg" width="200" height="200" align="center">
            <img src="prod_images/prod3.jpeg" width="200" height="200" align="right">
        </div>
        <br>
        <div class="column">
            <img src="prod_images/prod1.png" width="200" height="200" align="left">
            <img src="prod_images/prod2.jpeg" width="200" height="200" align="center">
            <img src="prod_images/prod3.jpeg" width="200" height="200" align="right">
        </div>
        </center>
    </div>

    -->
    
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>