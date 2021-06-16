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
        $rollno = trim($_POST['rollno']);
        $email = $_POST['email'];
        $pass = $_POST['pass'];

        $query = " SELECT  Rollno FROM stu_details WHERE Rollno = '$rollno' ";

        $result = mysqli_query( $conn, $query);
        $row= mysqli_num_rows($result);
        if( ($row) == 0)
        {
            $sql = " INSERT INTO stu_details values('$uname','$rollno','$email','$pass')";
            if(mysqli_query( $conn, $sql))
            {
                echo ("<script LANGUAGE='JavaScript'>
                        window.alert('Succesfully registered!!!!!! Redirecting to Login Page....');
                        window.location.href='4.stu_login.php';
                        </script>"
                    );
            } 
        }
        else
        {
            echo ("<script LANGUAGE='JavaScript'>
                        window.alert('Rollno already exists');
                        window.location.href='5.stu_signup.php';
                        </script>"
            );
        }
    }


?>