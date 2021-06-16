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
            .center
            {
                position: absolute;
                top:50%;
                left:50%;
                transform:translate(-50%,-50%);
                width: 400px;
                height:320px;
                background: white;
                border-radius: 10px;
            }
            .center h1
            {
                text-align: center;
                padding: 0 0 20px 0;
                border-bottom: 1px solid silver;
            }
            .center form
            {
                padding: 0 40px;
                box-sizing: border-box;
            }
            form .txt_field
            {
            position: relative;
            margin:50px 0;
            }
            .txt_field input
            {
                margin-left: 70px;
                padding:10px;
                border:1px solid black;
                border-radius:5px;
            }
            .sub button
            {
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
            <h1>Change Password</h1>
            <form id="form" method="POST" action="22.1.fac_change_pass_code.php">
                <div class="txt_field">
               <input type="password" id="text1" name="pass" required placeholder="New Password"><br><br>
               <input type="password" id="text2" name="cpass" required placeholder="Confirm Password">
            </div>
            <div class="sub">
                <button type="submit" id="register" name="register">Submit</button>
                <!--<input  class="signin-btn" type="submit" id="register" name="register" value="Submit">-->
            </div>
            </form>
        </div>


        <script>

                document.getElementById("register").addEventListener("click", function(e)		
			    {
				    e.preventDefault();
                    var pass=document.getElementById("text1").value;
                    var cpass=document.getElementById("text2").value;

                    var pass_status=0,cpass_status=0;
                    var msg="";
                    var regx=/^[a-zA-Z0-9@#$*\.]{8,30}$/;

                    if(pass.length < 8)
                    {
                        msg+=" Password length should be greater than or qeual to 8 charcaters\n";
                    }
                    else
                    {
                        if(regx.test(pass))
                        {
                            if(cpass == pass)
                            {
                                pass_status=1;
                                cpass_status=1;
                            }
                            else
                            {
                                msg+="Password and confirm password are not same\n";
                            }
                        }
                        else
				        {
					        msg+="Password must contain letters, numbers, special characters(@,#,$,*,.)\n";
				        }
                    }

                    if( pass_status == 1 && cpass_status == 1)
                    {
                        alert("Updating Details");
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