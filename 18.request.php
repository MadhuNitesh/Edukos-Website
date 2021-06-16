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

	$comment_err = $email_err = "";

	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$email=$_POST["email"];
		$comment=$_POST["comment"];

		if(empty($email))
		{
			$email_err="Required";
		}
		else if(!filter_var($email,FILTER_VALIDATE_EMAIL) or !str_contains($email, ".cse@anits.edu.in"))
		{
			$email_err="Invalid email address";
		}
		if(empty($comment))
		{
			$comment_err="Required";
		}
		if(strlen($email_err)==0 and strlen($comment_err)==0)
		{
			$query="SELECT * FROM fac_details WHERE Email = '$email' " ;

			$sql=mysqli_query($conn,$query);

			$row= mysqli_num_rows($sql);

			if(($row) >0 )
			{
				$msg="Dear sir/madam,\n \t\t\t  This is a request from student bearing Roll No:";
				$roll_no=$_SESSION['disprollno'];
				$msg=$msg . strval($roll_no);			
				$msg=$msg.". ".$comment;
				$msg=$msg."\n\n\n\n\nRegards\n".strval($roll_no);
				mail($email,"Request From Student",$msg);
				echo ("<script LANGUAGE='JavaScript'>
						window.alert('Request sent successfully to concerned Faculty');
						</script>"
        			);

			}
			else
			{
				$email_err="Invalid email ID";
			}
		}
	}
?>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width: device-width, initial scale=2.0">
		<title>Request Form</title>
		<style>
			body
			{
				background-image: url(images/request.jpeg);
				background-size: cover;
				
			}
			.done
			{
				margin-top:10%;
				margin-left:39%;
			}
			.done h2
			{
				font-size: 50px;
				margin-left:15px;
			}
			.done label
			{
				color:black;
			}
			.email
			{
				width: 250px;
				height: 34px;
				border:none;
				border-radius: 5px;
				margin-left:50px;
				background-color:#9DAAF2;
			}
			.done textarea
			{
				border-radius: 5px;
				background-color:#9DAAF2;
				margin-left:0px;
				border:none;
				margin-left:-10px;
				
			}
			.btn1
			{
                padding-top:10px;
				padding-bottom:10px;
				padding-left:12px;
				padding-right:12px;
				width: 90px;
				border-radius: 5px;
				margin-left: 130px;
				color:white;
                font-size:15px;
                border:none;
                border:1px solid white;
                border-radius:10px;
                background-color:#263f97;
                cursor:pointer;
                font-weight: bold;
				opacity:0.8;
			}
			.btn1:hover
            {
                background-color:white;
                color:#263f97;
                transition-duration: 0.6s;
            }
			.email::-webkit-input-placeholder 
			{
  				font-size:15px;
				color:black;
			}
			textarea::placeholder
			{
				font-size:15px;
				color:black;
			}

			
		</style>
	</head>
	<body>
		<div class="done">
			<h2 > Request Form </h2>

			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" method="POST" id="req_form">
				
				<input type="text" name="email" class="email" placeholder="  Enter Email  ">&nbsp;&nbsp;&nbsp;<span style="color: red">* <?php echo $email_err ?></span>
				<br><br><br>
				<textarea   name="comment" form="req_form" rows="11" cols="50" placeholder="Enter Your Request Here....."></textarea>
				&nbsp;&nbsp;&nbsp;<span style="color: red; vertical-align: top;">* <?php echo $comment_err ?></span>
				<br><br>
				<br>
				<input class="btn1" type="submit" name="submit" value="Submit">
			</form>
		</div>
	</body>
</html>
