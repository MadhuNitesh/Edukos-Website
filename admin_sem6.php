<?php

    $conn = mysqli_connect("localhost","root","","project");

    // OE-2 subject

    if(isset($_POST['btn1']))
    {

        $filename= $_FILES['f1']['name'];

        $destination = 'Uploads/sem6/oe2/' . $filename;

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
                $sql = "INSERT INTO sem6(Name,Size,Subject) values('$filename','$size','oe2')";

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



    // PE-2 subject

    if(isset($_POST['btn2']))
    {
        $filename= $_FILES['f2']['name'];

        $destination = 'Uploads/sem6/pe2/' . $filename;

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
                $sql = "INSERT INTO sem6(Name,Size,Subject) values('$filename','$size','pe2')";

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


    // pe3 subject

    if(isset($_POST['btn3']))
    {

        $filename= $_FILES['f3']['name'];

        $destination = 'Uploads/sem6/pe3/' . $filename;

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
                $sql = "INSERT INTO sem6(Name,Size,Subject) values('$filename','$size','pe3')";

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

    // OOSE subject

    if(isset($_POST['btn4']))
    {
        $filename= $_FILES['f4']['name'];

        $destination = 'Uploads/sem6/oose/' . $filename;

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
                $sql = "INSERT INTO sem6(Name,Size,Subject) values('$filename','$size','oose')";

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

    // WT subject

    if(isset($_POST['btn5']))
    {
        $filename= $_FILES['f5']['name'];

        $destination = 'Uploads/sem6/wt/' . $filename;

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
                $sql = "INSERT INTO sem6(Name,Size,Subject) values('$filename','$size','wt')";

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

    // CNS SUBJECT


    if(isset($_POST['btn6']))
    {
        $filename= $_FILES['f6']['name'];

        $destination = 'Uploads/sem6/cns/' . $filename;

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
                $sql = "INSERT INTO sem6(Name,Size,Subject) values('$filename','$size','cns')";

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

    // QA-2 SUBJECT
    if(isset($_POST['btn7']))
    {
        $filename= $_FILES['f7']['name'];

        $destination = 'Uploads/sem6/qa2/' . $filename;

        $extension = pathinfo($filename,PATHINFO_EXTENSION);

        $file = $_FILES['f7']['tmp_name'];

        $size= $_FILES['f7']['size'];


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
                $sql = "INSERT INTO sem6(Name,Size,Subject) values('$filename','$size','qa2')";

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
        <title>sem-6 page</title>
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
        <h1>III/IV CSE SEM-II</h1> 
    </div>
    <br>
    <br>

    <!--Academic subjects-->
    <div><h2 id="academichead" class="academic">ACADEMIC SUBJECTS</h2></div>
    <div id="hsub1" class="subjects" >OPEN ELECTIVE -II</div>
    <div id="sub1" class="sub">
        <form action="" method="POST" enctype="multipart/form-data">
            <input type="file" id="myFile" name="f1">
            <button type="submit" name="btn1">Submit</button>
            <br><br>
            <a href="admin_sem6_oe2.php" target="_blank">View Files</a>
        </form>
    </div> 
        
    <div id="hsub2" class="subjects">Professional Elective-II</div>
    <div id="sub2" class="sub">
        <form action="" method="POST" enctype="multipart/form-data">
            <input type="file" id="myFile" name="f2">
            <button type="submit" name="btn2">Submit</button>
            <br><br>
            <a href="admin_sem6_pe2.php" target="_blank">View Files</a>
        </form>
    </div>

    <div id="hsub3" class="subjects">Professional Elective-III</div>
    <div id="sub3" class="sub">
        <form action="" method="POST" enctype="multipart/form-data">
            <input type="file" id="myFile" name="f3">
            <button type="submit" name="btn3">Submit</button>
            <a href="admin_sem6_pe3.php" target="_blank">View Files</a>
        </form>
    </div>
        
    <div id="hsub4" class="subjects">Object Oriented Software Engineering</div>
    <div id="sub4" class="sub">
        <form action="" method="POST" enctype="multipart/form-data">
            <input type="file" id="myFile" name="f4">
            <button type="submit" name="btn4">Submit</button>
            <a href="admin_sem6_oose.php" target="_blank">View Files</a>
        </form>
    </div>

    <div id="hsub5" class="subjects">Web Technologies</div>
    <div id="sub5" class="sub">
        <form action="" method="POST" enctype="multipart/form-data">
            <input type="file" id="myFile" name="f5">
            <button type="submit" name="btn5">Submit</button>
            <a href="admin_sem6_wt.php" target="_blank">View Files</a>
        </form>
    </div>

    <div id="hsub6" class="subjects">Cryptograpghy and Network Security</div>
    <div id="sub6" class="sub">
        <form action="" method="POST" enctype="multipart/form-data">
            <input type="file" id="myFile" name="f6">
            <button type="submit" name="btn6">Submit</button>
            <a href="admin_sem6_cns.php" target="_blank">View Files</a>
        </form>
    </div>

    <div id="hsub7" class="subjects">Quantitative Aptitude-II & Soft skills</div>
    <div id="sub7" class="sub">
        <form action="" method="POST" enctype="multipart/form-data">
            <input type="file" id="myFile" name="f7">
            <button type="submit" name="btn7">Submit</button>
            <a href="admin_sem6_qa2.php" target="_blank">View Files</a>
        </form>
    </div>

    <br>
    <br>
    <br>
    

    

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
            $("#sub7").hide();
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

            $("#hsub7").click(function()
            {
                $("#sub7").slideToggle('fast');

            });

        });  
    </script>


</html>