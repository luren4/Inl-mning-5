<?php
$sql = "SELECT * FROM loginbase";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "loginuppgift5";
$conn = new mysqli($servername, $username, $password, $dbname);

$result = $conn->query($sql);



$login_success = false;
$full_name = "";
if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            if($row["username"] == $_POST["username"] && $row["password"] == $_POST["password"]) 
            {
                $login_success = true;
                echo "login success.   ";
                $full_name = $row["firstname"] . " " . $row["lastname"];

                echo $full_name;
                
            } 
            else
            {
                echo "You couldnt log in";
            }
        }
    }

else 
    {
        echo "There are no users on this webpage";
    }


?>