<?php

    $server_name = "localhost";
    $user_name = "root";
    $password = "";
    $db = "project";

    $conn = mysqli_connect($server_name, $user_name, $password, $db);
    if(!$conn)
    {
        die("Connection failed: " . mysqli_connect_error());
    }
    if (isset($_POST['uname']))
    {
        $uname = trim($_POST['uname']);
        $fid = trim($_POST['fid']);
        $email = trim($_POST['email']);
        $pass = trim($_POST['pass']);
        $query = " SELECT  Fid FROM fac_details WHERE Fid = '$fid' ";


        $result = mysqli_query( $conn, $query);
        $row= mysqli_num_rows($result);
        if( ($row) == 0 )
        {
            $sql = " INSERT INTO fac_details values('$uname','$fid','$email','$pass')";
            if(mysqli_query($conn,$sql))
            {
                echo ("<script LANGUAGE='JavaScript'>
                        window.alert('Succesfully registered!!!!!! Redirecting to Login Page....');
                        window.location.href='2.fac_login.php';
                        </script>"
                    );
            } 
        }
        else
        {
            echo ("<script LANGUAGE='JavaScript'>
                    window.alert('ID already exists');
                    window.location.href='3.fac_signup.php';
                    </script>"
            );
        }
    }
?>