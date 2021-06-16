<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		<title>Registration page</title>
		<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet">
		<style>
			body
			{
                background: linear-gradient(120deg,#2980b9,#8e44ad);
            }
			*{
				font-family: 'Lato',sans-serif;
			}
			.sign-up{
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
			.agree{
				display: flex;
				align-items: center;
				justify-content: spacebetween;
				padding: 5px 0px;
				margin-bottom: 30px;
			}

			input.signin-btn{
				width: 100%;
				padding: 12px 10px;
				border: none;
				font-size: 30px;
				border-radius: 30px;
				background-color: #59c9fc;
				color: #fff;
				margin-bottom: 5px;
				cursor:pointer;
			}
	</style>

	</head>
	<body style="background-color: #59c9fc">
	<form id="form" method="POST" action="3.1.fac_signup_code.php">
		<div class="sign-up">
			<div class="logo">
				<img src="images/man.png" alt="Profile_pic">
			</div>
			<div class="title">SignUp</div>
			<div class="form">
				<div class="username">
					<input id="text1" type="text" placeholder="Username" name="uname" size="36">
				</div>
				<div class="username">
					<input id="text2" type="text" placeholder="Faculty Id" name="fid" size="36">
				</div>
				<div class="username">
					<input id="text3" type="text" placeholder="Email" name="email" size="36">
				</div>
				<div class="password">
					<input id="text4" type="password" placeholder="Password" name="pass" size="36">
				</div>
				<div class="password">
					<input id="text5" type="password" placeholder="Confirm Password" name="cpass" size="36"> 
				</div>
				<div class="agree">
					<input id="agree" type="checkbox">
					<label for="agree">I agree to Terms & Conditions</label>
				</div>
				<input  class="signin-btn" type="submit" id="register" name="register" value="Submit">
			</div>
		</div>
	</form>

		<script>
				document.getElementById("register").addEventListener("click", function(e)
				{
					e.preventDefault();
					
					var uname=document.getElementById("text1").value;
					var fid=document.getElementById("text2").value;
					var email=document.getElementById("text3").value;
					var pass=document.getElementById("text4").value;
					var cpass=document.getElementById("text5").value;
					var terms_conditions=document.getElementById("agree");

					uname=uname.trim();
					fid=fid.trim();
					email=email.trim();
					//pass=pass.trim();
					//cpass=cpass.trim();

					var msg="";
					var user_status=0,fid_status=1,email_status=0,pass_status=0,terms_status=0;
					var regx=/^[a-zA-Z0-9]{8,30}$/;
					if(regx.test(uname))
					{
						user_status=1;
					}
					else
					{
						user_status=0;
						if(uname.length < 8)
						msg+=" Username should be greater than or equal to 8 characters\n";
						else
						msg+=" Username must contain letters and numbers only\n";
					}
					var regx=/^[a-zA-Z0-9]{5,12}.cse@anits.edu.in$/;
					if(regx.test(email))
					{
						email_status=1;
					}
					else
					{
						email_status=0;
						if(email.length < 8)
						msg+=" Name of email should be greater than  or equal to 8 charcaters\n";
						else 
						msg+=" Email should be in format username.cse@anits.edu.in \n";
					}

					// testing password 
					var regx=/^[a-zA-Z0-9@#$*\.]{8,30}$/;
					if(regx.test(pass))
					{
						if(pass.length >=8)
						{
							if( pass == cpass)
							{
								pass_status=1;
							}
							else
							{
								msg+="Password and confirm password are not same \n";
							}
						}
						else
						{
							msg+="Password length should be greater than equal to 8 characters\n";
						}
					}
					else
					{
						msg+="Password must contain letters, numbers, special characters(@,#,$,*,.)\n";
					}


					if(terms_conditions.checked == true)
					{
						terms_status=1;
					}
					else
					{
						msg+= "Accept terms and conditions \n";
					}

					if( user_status ==1 && fid_status==1 && email_status ==1 && pass_status == 1 && terms_status ==1)
					{
						alert("Checking Details");
						document.getElementById("form").submit();
					}
					else
					{
						alert(msg);
					}
				});
		</script>
	</body>
</html>
