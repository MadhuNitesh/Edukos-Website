<?php
	require '0.conn.php';
	session_start();
	if(isset($_SESSION['fid']))
	{
		header('Location:17.fac_select.php');
	}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Login Page</title>
		<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet">
		<style>
			body
			{
                background: linear-gradient(120deg,#2980b9,#8e44ad);
            }
			*{
				font-family: 'Lato',sans-serif;
			}
			.login-div{
				margin:100px auto;
				width: 350px;
				background-color: #fff;
				padding: 60px;
			}
			.logo{
				background-color: #59c9fc;
				width:150px;
				height: 150px;
				border-radius: 50%;
				margin:0 auto;
				margin-bottom:10px
			}
			.logo img{
				width:100%;
			}
			.title{
				text-align: center;
				color: #505050;
				font-weight: bolder;
				font-size: 35px;
			}
			.form{
				width: 100%;
				margin-top: 30px;
			}
			.form input{
				font-size: 18px;
				padding: 10px 20px 10px 5px;
				border: none;
				outline: none;
				background: none;
			}
			.username, .password{
				display: block;
				border-radius: 30px;
				border: 1px solid rgba(0,0,0,2);
				padding: 10px;
				margin: 10px 0;
			}
			.form svg{
				height: 25px;
				margin-bottom: -5px;
				margin-left: 10px;
				margin-right: 5px;
			}
			.options{
				display: flex;
				flex-direction: row;
				justify-content: spacebetween;
				padding: 5px 0px;
				margin-bottom: 30px;
			}
			button.signin-btn{
				width: 100%;
				padding: 12px 10px;
				border: none;
				font-size: 30px;
				border-radius: 30px;
				background-color: #59c9fc;
				color: #fff;
				margin-bottom: 5px;
				cursor: pointer;
			}
			.sign-up{
				text-align: center;
			}
			a{
				text-decoration: none;
				color: #505050;
			}

	</style>

	</head>
	<body style="background-color: #59c9fc">
		<div class="login-div">
			<div class="logo">
				<img src="images/man.png" alt="Profile_pic">
			</div>
			<div class="title">Faculty Login</div>
			
			<form method="POST" action = "">
				<div class="form">
					<div class="username">
						<svg class="svg-icon" viewBox="0 0 20 20">
								<path d="M12.075,10.812c1.358-0.853,2.242-2.507,2.242-4.037c0-2.181-1.795-4.618-4.198-4.618S5.921,4.594,5.921,6.775c0,1.53,0.884,3.185,2.242,4.037c-3.222,0.865-5.6,3.807-5.6,7.298c0,0.23,0.189,0.42,0.42,0.42h14.273c0.23,0,0.42-0.189,0.42-0.42C17.676,14.619,15.297,11.677,12.075,10.812 M6.761,6.775c0-2.162,1.773-3.778,3.358-3.778s3.359,1.616,3.359,3.778c0,2.162-1.774,3.778-3.359,3.778S6.761,8.937,6.761,6.775 M3.415,17.69c0.218-3.51,3.142-6.297,6.704-6.297c3.562,0,6.486,2.787,6.705,6.297H3.415z"></path>
							</svg>
						<input type="text" id="text1" placeholder="Faculty Id"  name="fid" size="30">
					</div>
					<div class="password">
						<svg class="svg-icon" viewBox="0 0 20 20">
								<path d="M17.308,7.564h-1.993c0-2.929-2.385-5.314-5.314-5.314S4.686,4.635,4.686,7.564H2.693c-0.244,0-0.443,0.2-0.443,0.443v9.3c0,0.243,0.199,0.442,0.443,0.442h14.615c0.243,0,0.442-0.199,0.442-0.442v-9.3C17.75,7.764,17.551,7.564,17.308,7.564 M10,3.136c2.442,0,4.43,1.986,4.43,4.428H5.571C5.571,5.122,7.558,3.136,10,3.136 M16.865,16.864H3.136V8.45h13.729V16.864z M10,10.664c-0.854,0-1.55,0.696-1.55,1.551c0,0.699,0.467,1.292,1.107,1.485v0.95c0,0.243,0.2,0.442,0.443,0.442s0.443-0.199,0.443-0.442V13.7c0.64-0.193,1.106-0.786,1.106-1.485C11.55,11.36,10.854,10.664,10,10.664 M10,12.878c-0.366,0-0.664-0.298-0.664-0.663c0-0.366,0.298-0.665,0.664-0.665c0.365,0,0.664,0.299,0.664,0.665C10.664,12.58,10.365,12.878,10,12.878"></path>
							</svg>
						<input type="password"  id="text2" placeholder="Password" name="pass" size="30">
					</div>
					<div class="options">
						<div class="remember-me">
							<input id="remember-me" type="checkbox" checked>
							<label for="remember-me">Remember me?</label>
						</div>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<div class="forgot-password">
							<a href="20.fac_forgot_pass.php">Forgot Password?</a>
						</div>
					</div>
					<button id="sign-in" class="signin-btn" name="register">Login</button>
					&nbsp;
					<div class="sign-up">
						<a href="3.fac_signup.php">New User?</a>
					</div>
				</div>
			</form>
		</div>
		
		<?php

			if(isset($_POST['register']))
			{

				$fid = $_POST['fid'];
				$pass = $_POST['pass'];
				$fid = trim($fid);

				//$pass = trim($pass);

				$sql = "SELECT * FROM fac_details WHERE Fid = '$fid' AND Pass = '$pass' ;";

				$res = mysqli_query($conn,$sql);

				if(mysqli_num_rows($res) ==1 )
				{
					session_start();
					$_SESSION['fid'] = True;
					$_SESSION['dispfid'] = $fid;
					echo ("<script LANGUAGE='JavaScript'>
							window.alert('Login Success');
							window.location.href='17.fac_select.php';
							</script>"
                		);
				}
				else if(mysqli_num_rows($res) == 0)
				{
					echo ("<script LANGUAGE='JavaScript'>
							window.alert('Id or password is wrong');
							window.location.href='2.fac_login.php';
							</script>"
						);
				}
			}
		?>

	</body>
</html>
