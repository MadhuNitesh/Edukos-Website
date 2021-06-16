<?php
	session_start();
	$otp=$_SESSION["fac_otp"];
	if(isset($_POST["submit"]))
    {
		$new_otp=$_POST["new_otp"];
		if($otp == $new_otp)
        {
			header("LOCATION:21.1.fac_otp_change_pass.php");
		}
		else{
			echo '<script>alert("Invalid OTP.")</script>';
		}
	}
?>

<html>
    <head>
        <title>OTP verification</title>
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
            <h1>Enter OTP Sent To Mail</h1>
            <form method="POST" action="21.fac_otp.php">
                <div class="txt_field">
               <input type="text" name="new_otp" required placeholder="Enter OTP">
            </div>
            <div class="sub">
                <button type="submit" name="submit">Submit</button>
            </div>
            </form>
        </div>
    </body>
</html>
