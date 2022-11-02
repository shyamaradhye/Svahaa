<?php
    include("connection.php");


    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $quantity = $_POST['quantity'];
        
        $query = "UPDATE `inventory` SET `inventory_quantity` = `inventory_quantity` + '$quantity' ";
        mysqli_query($con, $query);
        
        header("Location: inventory.php");
        die; 
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
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
            /*chnages*/
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            text-align: center;
            /*chnages*/
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
    include("admin_nav.php");
    ?>
    <hr class="new5">
    <center>
    <h1>Welcome Admin!</h1>
    </center>
    

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
    <hr class="new5">
    


    <div class="container mt-4">
    <table class="table" id="myTable">
  <thead>
    <tr>
      <th scope="col">Product ID</th>
      <th scope="col"></th>
      <th scope="col">Product Name</th>
      <th scope="col">Left in Inventory</th>
    </tr>
  </thead>
  <tbody>
  <?php
  $sql = "SELECT * FROM inventory";
  $result = mysqli_query($con,$sql);
  while($row = mysqli_fetch_assoc($result))
  {
    echo "<tr>
    <th scope='row'>".$row['inventory_prod_id']."</th>
    <th scope='row'><img src=".$row['prod_image_link']." width='110'></th>
    <th scope='row'>".$row['inventory_prod_name']."</th>
    <th scope='row'>".$row['inventory_quantity']."</th>
    
    </tr>";
  }  
  ?>
  </tbody>
</table>
    </div>

    <br><br>

    <center>
        <form method="post">
            <label for="quantity"><b><h4>Quantity:</h4></b></label>
            <input type="number" id="quantity" name="quantity" min=1 max=250>
                    
            </center>
            <br><br>

            <center><input id="button" type="submit" value="Replenish"><br><br></center>
        </form>
    <!--
    <td>".
    "<form method='post'>
    <label for='quantity'>Quantity:</label>
    <input type='number' id='quantity' name='quantity' min=1 max=250>
    <br><br>

    <input id='button' type='submit' value='Replenish'><br><br>
    </form>"
    ."</td>
-->

    <br><br><br>
    <br><br><br>

    <footer class="footer">
     COEP CT-21001 | Made by Shyam Aradhye, Ved Biilaskar, Adwait Vipra
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>