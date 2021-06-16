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
        <h1>I/IV CSE SEM-II</h1> 
    </div>
    <br>
    <br>

    <!--Academic subjects-->
    <div><h2 id="academichead" class="academic">ACADEMIC SUBJECTS</h2></div>
    <div id="hsub1" class="subjects" >Engineering Mathematics - II</div>
    <div id="sub1" class="sub">
        <h6>Unit - I: Ordinary Differential equations of ftrst orderand its applications</h6>
        <h6>Unit - II: Higher order Linear Differential Equations and its applications</h6>
        <h6>Unit - III: Numerical solutions of algebraic and transcendental equations</h6>
        <h6>Unit - IV: Interpolation, Numerical Differentiation & Integration</h6>
        <h6>Unit - V: Laplace Transforms and its application</h6>
        <a  href="admin_sem2_em2.php" target="blank">CLICK HERE</a>
    </div> 
        
    <div id="hsub2" class="subjects">Engineering Physics</div>
    <div id="sub2" class="sub">
        <h6>Unit - I: Thermodynamics </h6>
        <h6>Unit - II: Electromagnetism</h6>
        <h6>Unit - III: Optics</h6>
        <h6>Unit - IV: Lasers&Fibre optics</h6>
        <h6>Unit - V: Quantum mechanics</h6>
        <a  href="admin_sem2_ep.php" target="blank">CLICK HERE</a>
    </div>

    <div id="hsub3" class="subjects">Engineering Chemistry</div>
    <div id="sub3" class="sub">
        <h6>Unit - I: Water Chemistry&Water treatment techniques</h6>
        <h6>Unit - II: Electrochemical cells</h6>
        <h6>Unit - III: Corrosion Chemistry</h6>
        <h6>Unit - IV: Semiconducting Materials&Ceramic Materials</h6>
        <h6>Unit - V: Nanomaterials&Polymer Composites&Smart polymers</h6>
        <a  href="admin_sem2_ec.php" target="blank">CLICK HERE</a>
    </div>
        
    <div id="hsub4" class="subjects">Elements of Electrical Engineering</div>
    <div id="sub4" class="sub">
        <h6>Unit - I: Electric Circuits</h6>
        <h6>Unit - II: Magnetic Circuits</h6>
        <h6>Unit - III: D.C. Generators</h6>
        <h6>Unit - IV: D.C. Motors</h6>
        <h6>Unit - V: AC Machines</h6>
        <a  href="admin_sem2_eee.php" target="blank">CLICK HERE</a>
    </div>

    <div id="hsub5" class="subjects">Engineering Drawing</div>
    <div id="sub5" class="sub">
        <h6>Unit - I: Introduction to Engineering Drawing</h6>
        <h6>Unit - II: Orthographic projections</h6>
        <h6>Unit - III: Projections of regular polygon planes</h6>
        <h6>Unit - IV: Projection of solids</h6>
        <h6>Unit - V: Isometric projections</h6>
        <a  href="admin_sem2_ed.php" target="blank">CLICK HERE</a>
    </div>

    <div id="hsub6" class="subjects">Human values and Professional Ethics (Mandatory non-credit course)</div>
    <div id="sub6" class="sub">
        <h6>Unit - I: Human Values</h6>
        <h6>Unit - II: Engineering Ethics</h6>
        <h6>Unit - III: Engineering as Social Exerimentation</h6>
        <h6>Unit - IV: Engineering Responsibility for Safety andcRisk</h6>
        <h6>Unit - V: Global Issues</h6>
        <a  href="admin_sem2_hvpe.php" target="blank">CLICK HERE</a>
    </div>
    

    <!--GATE SUBJECTS-->
    <div><h2  class="gate">GATE SUBJECTS</h2></div>
    <div id="hsub7" class="subjects" >Engineering Mathematics - II</div>
    <div id="sub7" class="sub">
        <h6>Unit - I: Ordinary Differential equations of ftrst orderand its applications</h6>
        <h6>Unit - II: Higher order Linear Differential Equations and its applications</h6>
        <h6>Unit - III: Numerical solutions of algebraic and transcendental equations</h6>
        <h6>Unit - IV: Interpolation, Numerical Differentiation & Integration</h6>
        <h6>Unit - V: Laplace Transforms and its application</h6>
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

            $("#hsub7").click(function()
            {
                $("#sub7").slideToggle('fast');

            });


        });  
    </script>


</html>