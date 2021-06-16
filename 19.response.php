<?php
	session_start();
	$comment_err = $roll_err = "";
	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		include ("0.conn.php");
		$roll=$_POST["roll"];
		$comment=$_POST["comment"];
		if(empty($comment))
		{
			$comment_err="Required";
		}
		if(empty($roll))
		{
			$roll_err="Required";
		}
		else if(strlen($roll)!=12)
		{
			$roll_err="Invalid Roll Number";
		}
		else{
			$sql="SELECT * FROM stu_details WHERE Rollno = '$roll'";
			$query=mysqli_query($conn,$sql);
			if(mysqli_num_rows($query)!=1){
				$roll_err="Invalid Roll Number";
			}
			else{
				$result=mysqli_fetch_assoc($query);
				$email=$result["Email"];
				$fid=$_SESSION['dispfid'];
				$sql="SELECT uname FROM fac_details WHERE fid='$fid'";
				$query=mysqli_query($conn,$sql);
				$result=mysqli_fetch_assoc($query);
				$name=$result['uname'];
				if($comment=="" or $comment=="Add a comment....")
				{
					$msg="Dear student,\n"."\t\t\t"."This is a response from ".$name." that your request has been i.e  ". $comment ." updated.Please check website.\n\n\n\n\nRegards\n".$name;
				}
				else
				{
					$msg="Dear student,\n"."\t"."This is a response from ".$name." that your request has been updated.Please check website.\n"."\t".$comment;
				}
				mail($email,"Response to your request",$msg);
				echo ("<script LANGUAGE='JavaScript'>
                      window.alert('Response sent successfully.!!!');
                      </script>");
			}
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="widrh: device-width, initial-scale=1.0">
		<title>Response Form</title>
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
			<h2>Response Form</h2>
			<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="POST" id="res_form">

				<input type="text" name="roll" class="email" placeholder="  Enter RollNo  ">&nbsp;&nbsp;&nbsp;<span style="color: red">* <?php echo $roll_err ?></span>
				<br><br><br>
				<textarea name="comment" form="res_form" rows="11" cols="50" placeholder="Type Your Response Here"></textarea>
				&nbsp;&nbsp;&nbsp;<span style="color: red; vertical-align: top;">* <?php echo $comment_err ?></span>
				<br><br><br>
				<input class="btn1" type="submit" name="submit" value="Submit">
			</form>
		</div>
	</body>
</html>
