<?php

    $conn = mysqli_connect("localhost","root","","project");

    //EM-2 subject

    if(isset($_POST['btn1']))
    {

        $filename= $_FILES['f1']['name'];

        $destination = 'Uploads/sem2/em2/' . $filename;

        $extension = pathinfo($filename,PATHINFO_EXTENSION);

        $file = $_FILES['f1']['tmp_name'];

        $size= $_FILES['f1']['size'];


        if(!in_array($extension,['zip','pdf','docx','doc','ppt','pptx','txt','png','jpeg','jpg']))
        {
            echo '<script>alert("you files extensions must be .(zip,pdf,docx,doc,ppt,pptx,txt,png,jpeg,jpg)")</script>';
        }
        else if($size > 10485761)
        {
            echo '<script>alert("File size cannot exceed 10 mb")</script>';
        }
        else
        {
            if(move_uploaded_file($file,$destination))
            {
                $sql = "INSERT INTO sem2(Name,Size,Subject) values('$filename','$size','em2')";

                if(mysqli_query($conn,$sql))
                {
                    echo '<script>alert("File uploaded succesfully")</script>';
                }
                else
                {
                   echo die(mysqli_error($conn));
                }
            }
        }
    }


    //ENG PHYSICS SUBJECT

    if(isset($_POST['btn2']))
    {
        $filename= $_FILES['f2']['name'];

        $destination = 'Uploads/sem2/ep/' . $filename;

        $extension = pathinfo($filename,PATHINFO_EXTENSION);

        $file = $_FILES['f2']['tmp_name'];

        $size= $_FILES['f2']['size'];


        if(!in_array($extension,['zip','pdf','docx','doc','ppt','pptx','txt','png','jpeg','jpg']))
        {
            echo '<script>alert("you files extensions must be .(zip,pdf,docx,doc,ppt,pptx,txt,png,jpeg,jpg)")</script>';
        }
        else if($size > 10485761)
        {
            echo '<script>alert("File size cannot exceed 10 mb")</script>';
        }
        else
        {
            if(move_uploaded_file($file,$destination))
            {
                $sql = "INSERT INTO sem2(Name,Size,Subject) values('$filename','$size','ep')";

                if(mysqli_query($conn,$sql))
                {
                    echo '<script>alert("File uploaded succesfully")</script>';
                }
                else
                {
                   echo die(mysqli_error($conn));
                }
            }
        }
    }


    // eng chemistry subject

    if(isset($_POST['btn3']))
    {

        $filename= $_FILES['f3']['name'];

        $destination = 'Uploads/sem2/ec/' . $filename;

        $extension = pathinfo($filename,PATHINFO_EXTENSION);

        $file = $_FILES['f3']['tmp_name'];

        $size= $_FILES['f3']['size'];


        if(!in_array($extension,['zip','pdf','docx','doc','ppt','pptx','txt','png','jpeg','jpg']))
        {
            echo '<script>alert("you files extensions must be .(zip,pdf,docx,doc,ppt,pptx,txt,png,jpeg,jpg)")</script>';
        }
        else if($size > 10485761)
        {
            echo '<script>alert("File size cannot exceed 10 mb")</script>';
        }
        else
        {
            if(move_uploaded_file($file,$destination))
            {
                $sql = "INSERT INTO sem2(Name,Size,Subject) values('$filename','$size','ec')";

                if(mysqli_query($conn,$sql))
                {
                    echo '<script>alert("File uploaded succesfully")</script>';
                }
                else
                {
                   echo die(mysqli_error($conn));
                }
            }
        }

    }


    //eee subject

    if(isset($_POST['btn4']))
    {
        $filename= $_FILES['f4']['name'];

        $destination = 'Uploads/sem2/eee/' . $filename;

        $extension = pathinfo($filename,PATHINFO_EXTENSION);

        $file = $_FILES['f4']['tmp_name'];

        $size= $_FILES['f4']['size'];


        if(!in_array($extension,['zip','pdf','docx','doc','ppt','pptx','txt','png','jpeg','jpg']))
        {
            echo '<script>alert("you files extensions must be .(zip,pdf,docx,doc,ppt,pptx,txt,png,jpeg,jpg)")</script>';
        }
        else if($size > 10485761)
        {
            echo '<script>alert("File size cannot exceed 10 mb")</script>';
        }
        else
        {
            if(move_uploaded_file($file,$destination))
            {
                $sql = "INSERT INTO sem2(Name,Size,Subject) values('$filename','$size','eee')";

                if(mysqli_query($conn,$sql))
                {
                    echo '<script>alert("File uploaded succesfully")</script>';
                }
                else
                {
                   echo die(mysqli_error($conn));
                }
            }
        }
    }

    //ed subject

    if(isset($_POST['btn5']))
    {
        $filename= $_FILES['f5']['name'];

        $destination = 'Uploads/sem2/ed/' . $filename;

        $extension = pathinfo($filename,PATHINFO_EXTENSION);

        $file = $_FILES['f5']['tmp_name'];

        $size= $_FILES['f5']['size'];


        if(!in_array($extension,['zip','pdf','docx','doc','ppt','pptx','txt','png','jpeg','jpg']))
        {
            echo '<script>alert("you files extensions must be .(zip,pdf,docx,doc,ppt,pptx,txt,png,jpeg,jpg)")</script>';
        }
        else if($size > 10485761)
        {
            echo '<script>alert("File size cannot exceed 10 mb")</script>';
        }
        else
        {
            if(move_uploaded_file($file,$destination))
            {
                $sql = "INSERT INTO sem2(Name,Size,Subject) values('$filename','$size','ed')";

                if(mysqli_query($conn,$sql))
                {
                    echo '<script>alert("File uploaded succesfully")</script>';
                }
                else
                {
                   echo die(mysqli_error($conn));
                }
            }
        }
    }

    //Ethics(hvpe) subject

    if(isset($_POST['btn6']))
    {
        $filename= $_FILES['f6']['name'];

        $destination = 'Uploads/sem2/hvpe/' . $filename;

        $extension = pathinfo($filename,PATHINFO_EXTENSION);

        $file = $_FILES['f6']['tmp_name'];

        $size= $_FILES['f6']['size'];


        if(!in_array($extension,['zip','pdf','docx','doc','ppt','pptx','txt','png','jpeg','jpg']))
        {
            echo '<script>alert("you files extensions must be .(zip,pdf,docx,doc,ppt,pptx,txt,png,jpeg,jpg)")</script>';
        }
        else if($size > 10485761)
        {
            echo '<script>alert("File size cannot exceed 10 mb")</script>';
        }
        else
        {
            if(move_uploaded_file($file,$destination))
            {
                $sql = "INSERT INTO sem2(Name,Size,Subject) values('$filename','$size','hvpe')";

                if(mysqli_query($conn,$sql))
                {
                    echo '<script>alert("File uploaded succesfully")</script>';
                }
                else
                {
                   echo die(mysqli_error($conn));
                }
            }
        }

    }
    
?>




<html>
    <head>
        <title>sem-2 page</title>
        <style>
            * {
                margin:0;
                padding:0;
            }
            body{
                background: linear-gradient(120deg,#2980b9,#8e44ad);
            }
            ul{
                list-style-type:none;
                width:100%;
                height:8%;
                background-color:black;
            }
            li{
                float:left;
            }
            li a{
                font-style: bold;
                font-size: larger;
                display:block;
                padding:20px 18px;
                color:white;
                text-decoration:none;
            }
            .a1:hover{
                color:blue;
                background-color:white;
            }
            .hello{
                margin-left:82%;
            }
            .name{
               position: absolute;
               top:16px;
               left:5%;
               color:pink;

            }
            .head1{
                margin-top:60px;
                margin-left:38%;
                font-size: 25px;
            }
            .more
            {
                width: 25px;
                height: 3px;
                background-color: white;
                color:blue;
                margin-top:5px;

            }
            #academichead
            {
                margin-left:620px;
            }
            .subjects
            {
                margin-left:350px;
                margin-top:20px;
                background-color: lightcyan;
                width:800px;
                height:30px;
                padding:20px;
                text-align:left;
                cursor: pointer;
                border-radius: 5px;
                
            }
            .sub
            {
                background-color:#d8e3e7;
                height:60px;
                width:839px;
                margin-left:350px;
                border-radius: 5px;
               
            }
            .sub h6{
                font-size: 13px;  
            }
            .sub form{
                display:flex;
                align-items: center;
                justify-content: center;
                justify-content: space-evenly;
                padding-top: 10px;
            }
            .sub form button{
                padding: 5px;
                border-radius: 4px solid black;
            }
            .gate
            {
                margin-top:50px;
                margin-left:660px;
            }
            .dropdown
            {
                margin-left:95.5%;
                padding-top:18px;
            }
        </style>
        
    </head>
    <body>
     <ul>
         <div class="hello">
            <li><a class= "a1" href="17.fac_select.php">Home</a></li>
            <li><a class ="a1" href="19.response.php">Response</a></li>
        </div>    
        <div  id="dd" class="dropdown" style="color:white; cursor:pointer">
            <div class="more"></div>
            <div class="more"></div>
            <div class="more"></div>
        </div>

        <div id="dd1">
            <div  id="dd2" style="margin-top:18px; margin-left:90%; text-align:center;background-color:black; color:white; border: 1px solid lightpink; padding:6px; cursor:pointer">Change Password</div>
            <div  id="dd3" style="margin-left:90%;  background-color:black;text-align:center; color:white; padding:6px; cursor:pointer">Logout</div>
        </div> 
    </ul>
     <div class="name">
        <h2>EDUKOS</h2>
    </div>
    <div class="head1">
        <h1>I/IV CSE SEM-II</h1> 
    </div>
    <br>
    <br>

    <!--Academic subjects-->
    <div><h2 id="academichead" class="academic">ACADEMIC SUBJECTS</h2></div>
    <div id="hsub1" class="subjects" >Engineering Mathematics - II</div>
    <div id="sub1" class="sub">
        <form action="" method="POST" enctype="multipart/form-data">
            <input type="file" id="myFile" name="f1">
            <button type="submit" name="btn1">Submit</button>
            <br><br>
            <a href="admin_sem2_em2.php" target="_blank">View Files</a>
        </form>
    </div> 
        
    <div id="hsub2" class="subjects">Engineering Physics</div>
    <div id="sub2" class="sub">
        <form action="" method="POST" enctype="multipart/form-data">
            <input type="file" id="myFile" name="f2">
            <button type="submit" name="btn2">Submit</button>
            <br><br>
            <a href="admin_sem2_ep.php" target="_blank">View Files</a>
        </form>
    </div>

    <div id="hsub3" class="subjects">Engineering Chemistry</div>
    <div id="sub3" class="sub">
        <form action="" method="POST" enctype="multipart/form-data">
            <input type="file" id="myFile" name="f3">
            <button type="submit" name="btn3">Submit</button>
            <a href="admin_sem2_ec.php" target="_blank">View Files</a>
        </form>
    </div>
        
    <div id="hsub4" class="subjects">Elements of Electrical Engineering</div>
    <div id="sub4" class="sub">
        <form action="" method="POST" enctype="multipart/form-data">
            <input type="file" id="myFile" name="f4">
            <button type="submit" name="btn4">Submit</button>
            <a href="admin_sem2_eee.php" target="_blank">View Files</a>
        </form>
    </div>

    <div id="hsub5" class="subjects">Engineering Drawing</div>
    <div id="sub5" class="sub">
        <form action="" method="POST" enctype="multipart/form-data">
            <input type="file" id="myFile" name="f5">
            <button type="submit" name="btn5">Submit</button>
            <a href="admin_sem2_ed.php" target="_blank">View Files</a>
        </form>
    </div>

    <div id="hsub6" class="subjects">Human values and Professional Ethics (Mandatory non-credit course)</div>
    <div id="sub6" class="sub">
        <form action="" method="POST" enctype="multipart/form-data">
            <input type="file" id="myFile" name="f6">
            <button type="submit" name="btn6">Submit</button>
            <a href="admin_sem2_hvpe.php" target="_blank">View Files</a>
        </form>
    </div>
    

    <!--GATE SUBJECTS-->
    <div><h2  class="gate">GATE SUBJECTS</h2></div>
    <div id="hsub7" class="subjects" >Engineering Mathematics - II</div>
    <div id="sub7" class="sub">
        <form action="/action_page.php">
            <input type="file" id="myFile" name="filename">
            <button>Submit</button><br><br>
            <a href="">View</a>
          </form>
    </div> 
  <br><br><br>

    </body>
    <script src="jquery.js"></script>

    <script> 

    
      /*  function fun1()
        {
            document.getElementById("dd2").style.visibility="visible";
            document.getElementById("dd3").style.visibility="visible";
        }
      */
        $(document).ready(function()
        {
            
            // academic subjects
            $("#sub1").hide();
            $("#sub2").hide();
            $("#sub3").hide();
            $("#sub4").hide();
            $("#sub5").hide();
            $("#sub6").hide();
            $("#dd1").hide();

            $("#dd").click(function()
            {
                $("#dd1").slideToggle('fast');

            });  

            $("#dd2").click(function()
            {
                //window.alert('Logging Out');
				window.location.href='22.fac_change_pass.php';
            });

            $("#dd3").click(function()
            {
                window.alert('Logging Out');
				window.location.href='2.1.fac_logout.php';
            });


            $("#hsub1").click(function()
            {
                $("#sub1").slideToggle('fast');

            });

            $("#hsub2").click(function()
            {
                $("#sub2").slideToggle('fast');

            });

            $("#hsub3").click(function()
            {
                $("#sub3").slideToggle('fast');

            });

            $("#hsub4").click(function()
            {
                $("#sub4").slideToggle('fast');

            });

            $("#hsub5").click(function()
            {
                $("#sub5").slideToggle('fast');

            });

            $("#hsub6").click(function()
            {
                $("#sub6").slideToggle('fast');

            });



            // gate subjects

            $("#sub7").hide();

            $("#hsub7").click(function()
            {
                $("#sub7").slideToggle('fast');

            });


        });  
    </script>


</html>