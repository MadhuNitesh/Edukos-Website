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

    session_start();
    if($_SESSION['disprollno'])
    {
        echo "WELCOME ".$_SESSION['disprollno']."!!!";
    }

    if(isset($_POST['register']))
    {
                //echo "<script>alert('hello')</script>";
                $year = $_POST['year'];
                $sem =  $_POST['sem'];

                if( $year == "FIRST_YEAR" && $sem == "FIRST_SEM")
                {
                    header('Location:8.sem1.php');
                }

                if( $year == "FIRST_YEAR" && $sem == "SECOND_SEM")
                {
                    header('Location:9.sem2.php');
                }

                if( $year == "SECOND_YEAR" && $sem == "THIRD_SEM")
                {
                    header('Location:10.sem3.php');
                }

                if( $year == "SECOND_YEAR" && $sem == "FOURTH_SEM")
                {
                    header('Location:11.sem4.php');
                }

                if( $year == "THIRD_YEAR" && $sem == "FIFTH_SEM")
                {
                    header('Location:12.sem5.php');
                }

                if( $year == "THIRD_YEAR" && $sem == "SIXTH_SEM")
                {
                    header('Location:13.sem6.php'); 
                }
    }
?>
<html>
    <head>
        <title>
            select year academic
        </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

        <style>
             body{
                font-family: Arial, Helvetica, sans-serif;
                background-image: url("https://images.unsplash.com/photo-1456513080510-7bf3a84b82f8?ixid=MXwxMjA3fDB8MHxzZWFyY2h8M3x8c3R1ZHl8ZW58MHx8MHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60");
                background-size: cover;
            }
            .wrap h4{
                position: absolute;
                left:50%;
                top:22%;
                font-weight: bold;
                font-size: 20px;
                animation:first;
                animation-duration:1s;
            }
            .wrap select{
                position: absolute;
                top: 26%;
                left: 50%;
                padding:10px;
                color:white;
                background-color:grey;
                animation:second;
                animation-duration:1s;
            }
            .wrapn h4{
            position: absolute;
            left: 50%;
            top:35%;
            font-weight: bold;
            font-size: 20px;
            animation:third;
            animation-duration:1s;
            }
            .wrapn select{
                position: absolute;
                top: 39%;
                left: 50%;
                padding:10px;
                color:white;
                background-color:grey;
                animation:four;
                animation-duration:1s;

            }
            button{
                position: absolute;
                left: 52.5%;
                top:49%;
                padding:8px;
                color: white;
                background-color:grey;
                animation:five;
                animation-duration: 1s;
                
            }
            @keyframes first{
                from{
                    left:0%;
                    top:0%;
                }
                to{
                    left:50%;
                    top:22%;
    
                }
            }
            @keyframes second{
                from{
                    left:0%;
                    top:0%;
                }
                to{
                    left:50%;
                    top:26%
                }
            }
            @keyframes third{
                from{
                    left:0%;
                    top:0%;
                }
                to{
                    left:50%;
                    top:35%;
                }
            }
            @keyframes four{
                from{
                    left:0%;
                    top:0%;
                }
                to{
                    left:50%;
                    top:39%;
                }
            }
            @keyframes five{
                from{
                    left:0%;
                    top:53%;
                }
                to{
                    left:52.5%;
                    top:49%;
                }
            }


        </style>
    </head>
    <body>
    <form method="POST" action="">
        <div class="wrap">
            <h4>Select Year:</h4>
            <select name="year">
                <option >YEAR</option>
                <option value="FIRST_YEAR">FIRST YEAR</option>
                <option value="SECOND_YEAR">SECOND YEAR</option>
                <option value="THIRD_YEAR">THIRD YEAR</option>
                <option value="FOURTH_YEAR">FOURTH YEAR</option>
            </select>
        </div>
        <div class="wrapn">
            <h4>Select Sem:</h4>
            <select name="sem">
                <option >SEMESTER</option>
                <option value="FIRST_SEM">FIRST SEM</option>
                <option value="SECOND_SEM">SECOND SEM</option>
              </select>
        </div>
        
        <button value="submit" class="btn btn-primary" name="register">Submit</button>
    </form>
    </body>
</html>