<?php

    function check_login($con)
    {
        if(isset($_SESSION['user_id']))
        {
            $id = $_SESSION['user_id'];
            $query = "select * from users where user_id = $id limit 1";
            $result = mysqli_query($con,$query);

            if($result && mysqli_num_rows($result)>0)
            {
                $user_data = mysqli_fetch_assoc($result);
                return $user_data;
            }

        }
        header("Location: login.php");
        die;
    }

    function random_num($len)
    {
        $text = "";
        if($len < 5)
        {
            $length = 5;
        }
        $l = rand(4,$len);
        for ($i=0; $i < $l; $i++) 
        { 
            $text .= rand(0,9);
        }
        return $text;
    }


?>