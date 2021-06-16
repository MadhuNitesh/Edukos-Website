<html>
    <head>
        <title>sem-1 page</title>
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
                margin-left:73%;
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
                height:110px;
                width:839px;
                margin-left:350px;
                border-radius: 5px;
               
            }
            .sub h6{
                font-size: 13px;  
                line-height:21px;
                margin-left: 15px;
            }
            .sub a{
                position: relative;
                 top: -55px;
                 left:650px
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
            <li><a class= "a1" href="7.select.php">Home</a></li>
            <li><a class ="a1" href="18.request.php">Request</a></li>
            <li><a class ="a1" href="23.placement.php">Placement</a></li>
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
        <h1>I/IV CSE SEM-I</h1> 
    </div>
    <br>
    <br>

    <!--Academic subjects-->
    <div><h2 id="academichead" class="academic">ACADEMIC SUBJECTS</h2></div>
    <div id="hsub1" class="subjects" >Engineering Mathematics - I</div>
    <div id="sub1" class="sub">
        <h6>Unit - I: Linear Equations</h6>
        <h6>Unit - II: Lineartransformations and Quadratic forms</h6>
        <h6>Unit - III: Single and Multivariable Calculus</h6>
        <h6>Unit - IV: Multiple Integrals</h6>
        <h6>Unit - V: Special functions</h6>
        <a  href="admin_sem1_em1.php" target="blank">CLICK HERE</a>
    </div> 
        
    <div id="hsub2" class="subjects">Communicative English</div>
    <div id="sub2" class="sub">
        <h6>Unit - I: Reading & Writing & Grammar & Vocabulary</h6>
        <h6>Unit - II: Reading & Writing & Grammar & Vocabulary</h6>
        <h6>Unit - III: Reading & Writing & Grammar & Vocabulary</h6>
        <h6>Unit - IV: Reading & Writing & Grammar & Vocabulary</h6>
        <h6>Unit - V: Reading & Writing & Grammar & Vocabulary</h6>
        <a  href="admin_sem1_ce.php" target="blank">CLICK HERE</a>
    </div>

    <div id="hsub3" class="subjects">Basic Electronic Engineering</div>
    <div id="sub3" class="sub">
        <h6>Unit - I: Semiconductor diodes</h6>
        <h6>Unit - II: Rectifiers and Filters</h6>
        <h6>Unit - III: Transistor Characteristics</h6>
        <h6>Unit - IV:Transistor biasing and Stabilization</h6>
        <h6>Unit - V: FET/MOSFET Characteristics</h6>
        <a  href="admin_sem1_bee.php" target="blank">CLICK HERE</a>
    </div>
        
    <div id="hsub4" class="subjects">Digital Logic Design</div>
    <div id="sub4" class="sub">
        <h6>Unit - I: Digital Systems, Boolean Algebra and Logic Gates</h6>
        <h6>Unit - II: Gate-Level Minimization&Combinational Logic </h6>
        <h6>Unit - III: Programmable Logic Devices</h6>
        <h6>Unit - IV: Sequential logic circuits</h6>
        <h6>Unit - V: Synchronous Sequential Logic</h6>
        <a  href="admin_sem1_dld.php" target="blank">CLICK HERE</a>
    </div>

    <div id="hsub5" class="subjects">Problem Solving With C</div>
    <div id="sub5" class="sub">
        <h6>Unit - I:Introduction to Computer Problem-solving</h6>
        <h6>Unit - II: Number systems</h6>
        <h6>Unit - III:Arrays</h6>
        <h6>Unit - IV: Functions</h6>
        <h6>Unit - V: Derived Types Enumerated, Structure and Union Types&Files</h6>
        <a  href="admin_sem1_c.php" target="blank">CLICK HERE</a>
    </div>

    <div id="hsub6" class="subjects">Environmental Science (Mandatory non-credit course)</div>
    <div id="sub6" class="sub">
        <h6>Unit - I: Introduction to Environment and natural resources</h6>
        <h6>Unit - II:Ecosystem & Bio diversity</h6>
        <h6>Unit - III:Environmental pollution and waste Management</h6>
        <h6>Unit - IV: Social issues and environmental legislations</h6>
        <h6>Unit - V: Human Population and the Environment</h6>
        <a  href="admin_sem1_es.php" target="blank">CLICK HERE</a>
    </div>
    

    <!--GATE SUBJECTS-->
    <div><h2  class="gate">GATE SUBJECTS</h2></div>
    <div id="hsub7" class="subjects" >Engineering Mathematics - I</div>
    <div id="sub7" class="sub">
        <h6>Unit - I: Linear Equations</h6>
        <h6>Unit - II: Lineartransformations and Quadratic forms</h6>
        <h6>Unit - III: Single and Multivariable Calculus</h6>
        <h6>Unit - IV: Multiple Integrals</h6>
        <h6>Unit - V: Special functions</h6>
        <a  href="https://github.com/MadhuNitesh/Gate-CS-Subjects-Resources" target="blank">CLICK HERE</a>
    </div>
        
    </div>
    <div id="hsub8" class="subjects">Digital Logic Design</div>
    <div id="sub8" class="sub">
        <h6>Unit - I: Digital Systems, Boolean Algebra and Logic Gates</h6>
        <h6>Unit - II: Gate-Level Minimization&Combinational Logic </h6>
        <h6>Unit - III: Programmable Logic Devices</h6>
        <h6>Unit - IV:Sequential logic circuits</h6>
        <h6>Unit - V: : Synchronous Sequential Logic</h6>
        <a  href="https://github.com/MadhuNitesh/Gate-CS-Subjects-Resources" target="blank">CLICK HERE</a>
    </div>
    <div id="hsub9" class="subjects">C-Programming</div>
    <div id="sub9" class="sub">
        <h6>Unit - I:Introduction to Computer Problem-solving</h6>
        <h6>Unit - II: Number systems</h6>
        <h6>Unit - III:Arrays</h6>
        <h6>Unit - IV: Functions</h6>
        <h6>Unit - V: Derived Types Enumerated, Structure and Union Types&Files</h6>
        <a  href="https://github.com/MadhuNitesh/Gate-CS-Subjects-Resources" target="blank">CLICK HERE</a>
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
				window.location.href='14.change_pass.php';
            });

            $("#dd3").click(function()
            {
                window.alert('Logging Out');
				window.location.href='4.1.stu_logout.php';
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
            $("#sub8").hide();
            $("#sub9").hide();

            $("#hsub7").click(function()
            {
                $("#sub7").slideToggle('fast');

            });

            $("#hsub8").click(function()
            {
                $("#sub8").slideToggle('fast');

            });

            $("#hsub9").click(function()
            {
                $("#sub9").slideToggle('fast');

            });

        });  
    </script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</html>