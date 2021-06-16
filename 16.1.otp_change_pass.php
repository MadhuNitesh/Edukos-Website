<?php
	session_start();
	if(isset($_POST['register'])){
		include('0.conn.php');
		$reg_no=$_SESSION['rollno'];
		$pass=$_POST['pass'];
		$cpass=$_POST['cpass'];
		$number = preg_match('@[0-9]@', $pass);
	    $uppercase = preg_match('@[A-Z]@', $pass);
	    $lowercase = preg_match('@[a-z]@', $pass);
	    $specialChars = preg_match('@[^\w]@', $pass);
		$msg="";
		if(strlen($pass) < 8 || !$number || !$uppercase || !$lowercase || !$specialChars) {
		    $msg=$msg."Password must contain letters,numbers,special characters(@,#,$,*,.)";
	    }
		if($pass!=$cpass)
        {
            $msg=$msg."Please re-enter your password";
            /*echo ("<script LANGUAGE='JavaScript'>
                        window.alert('Please re-enter your password');
                        </script>"
                    ); */
		}
		if(strlen($msg)!=0)
        {
            echo ("<script LANGUAGE='JavaScript'>
                        window.alert('$msg');
                        </script>"
                    );
			
		}
		else
        {
			$query="UPDATE `stu_details` SET `pass` = '$pass' WHERE `Rollno`=$reg_no";
			$result=mysqli_query($conn,$query);
            session_unset();
			session_destroy();
            echo ("<script LANGUAGE='JavaScript'>
                        window.alert('Password succesfully changed!!!');
                        window.location.href='4.stu_login.php';
                        </script>"
                );
		}
	}
?>
<html>
    <head>
        <title>change password</title>
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
                height:320px;
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
                margin-left: 120px;
                padding: 8px;
                margin-top: -20px;
                width:70px;
                border:1px solid black;
                border-radius:5px;
            }
            .signin-btn 
            {
                margin-left: 120px;
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
            <h1>Change password</h1>
            <form id="form" method="POST" action="16.1.otp_change_pass.php">
                <div class="txt_field">
               <input type="password" id="text1" name="pass" required placeholder="New Password"><br><br>
               <input type="password" id="text2" name="cpass" required placeholder="Confirm Password">
            </div>
            <div class="sub">
                <button type="submit" id="register" name="register">Submit</button>
            </div>
            </form>
        </div>
    </body>
</html>
