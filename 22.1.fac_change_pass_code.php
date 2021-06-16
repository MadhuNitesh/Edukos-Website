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

    $fac_rollno="";
    session_start();
    if($_SESSION['dispfid'])
    {
        $fac_rollno=$_SESSION['dispfid'];
    }
    //echo "hai ".$user;
    if(isset($_POST['pass']))
    {
        $pass=$_POST['pass'];
        $cpass=$_POST['cpass'];

        $sql = " UPDATE fac_Details  SET Pass='$pass' where fid = '$fac_rollno' ";
        $result = mysqli_query( $conn, $sql);

        if($result)
        {
            echo ("<script LANGUAGE='JavaScript'>
                        window.alert('Password succesfully changed!!!');
                        window.location.href='2.1.fac_logout.php';
                    </script>"
                );
        }
        else
        {
            echo "ERROR OCCURED";
        }
    }
?>