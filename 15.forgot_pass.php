<?php
	session_start();
	if (isset($_POST['submit'])){
		include("0.conn.php");
		$reg_no=$_POST['rollno'];
		$query="SELECT `Uname` FROM `stu_details` WHERE `Rollno`=$reg_no";
		$result=mysqli_query($conn,$query);
		if(mysqli_num_rows($result)==1)
        {
			$_SESSION['rollno']=$reg_no;
			$sql="SELECT `Email` FROM `stu_details` WHERE `Rollno`=$reg_no";
			$query=mysqli_query($conn,$sql);
			$result=mysqli_fetch_assoc($query);
			$mail=$result['Email'];
			$otp=mt_rand(100000, 999999);
			$_SESSION["otp"]=$otp;
			$sub="OTP verification";
			$msg="Your otp is: $otp";
			mail($mail, $sub, $msg);	
			header("Location:16.otp.php");	
		}
		else{
			echo '<script>alert("Invalid Rollno")</script>';
		}
	}
?>

<html>
    <head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width initial-scale=1.0">
        <title>Forgot password</title>
        <style>
            body{
                margin:0px;
                padding:0px;
                font-family: monospace;
                background: linear-gradient(120deg,#2980b9,#8e44ad);
                overflow: hiddden;
            }
            .center{
                position: absolute;
                top:50%;
                left:50%;
                transform:translate(-50%,-50%);
                width: 400px;
                height:270px;
                background: white;
                border-radius: 10px;
            }
            .center h1{
                text-align: center;
                padding: 0 0 20px 0;
                border-bottom: 1px solid silver;
            }
            .center form{
                padding: 0 40px;
                box-sizing: border-box;
            }
            form .txt_field{
            position: relative;
            margin:50px 0;
            }
            .txt_field input{
                margin-left: 70px;
                padding:10px;
                border:1px solid black;
                border-radius:5px;
            }
            .sub button{
                margin-left: 125px;
                padding: 8px;
                margin-top: -20px;
                width:70px;
                border:1px solid black;
                border-radius:5px;
            }
        </style>
    </head>
    <body>
        <div class="center">
            <h1>Forgot Password</h1>
            <form method="POST" action="15.forgot_pass.php">
                <div class="txt_field">
               <input type="text" name="rollno" required placeholder="Enter roll number">
            </div>
            <div class="sub">
                <button type="submit" name="submit">Submit</button>
            </div>
            </form>
        </div>
    </body>
</html>
