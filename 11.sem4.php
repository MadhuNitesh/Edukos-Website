<html>
    <head>
        <title>sem-4 page</title>
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
        <h1>II/IV CSE SEM-II</h1> 
    </div>
    <br>
    <br>

    <!--Academic subjects-->
    <div><h2 id="academichead" class="academic">ACADEMIC SUBJECTS</h2></div>
    <div id="hsub1" class="subjects" >Probability,Statistics And Queing Theory</div>
    <div id="sub1" class="sub">
        <h6>Unit - I: Introduction to Probability</h6>
        <h6>Unit - II: Probability Distributions</h6>
        <h6>Unit - III: Curve fiting and correlation and Regression</h6>
        <h6>Unit - IV: Testing of Hypothesis</h6>
        <h6>Unit - V: Queuing Theory</h6>
        <a  href="admin_sem4_psqt.php" target="blank">CLICK HERE</a>
    </div> 
        
    <div id="hsub2" class="subjects">Microprocessor & Interfacing</div>
    <div id="sub2" class="sub">
        <h6>Unit - I: Introduction to 8085 Microprocessor</h6>
        <h6>Unit - II: 8085 µP Assembly Language Programming        </h6>
        <h6>Unit - III: Interfacing Peripheral ICs to Intel 8085    </h6>
        <h6>Unit - IV: File Systems Interface&Implementing File-Systems</h6>
        <h6>Unit - V: Secondary Storage Structure&Protection</h6>
        <a  href="admin_sem4_mpi.php" target="blank">CLICK HERE</a>
    </div>

    <div id="hsub3" class="subjects">Operating Systems</div>
    <div id="sub3" class="sub">
        <h6>Unit - I: Introduction to OS&Introduction to Shell Programming</h6>
        <h6>Unit - II: CPU Scheduling&Process Synchronization</h6>
        <h6>Unit - III: Deadlock&Memory Management&Virtual Memory</h6>
        <h6>Unit - IV: Multiple Integrals</h6>
        <h6>Unit - V: Special functions</h6>
        <<a  href="admin_sem4_os.php" target="blank">CLICK HERE</a>
    </div>
        
    <div id="hsub4" class="subjects">Computer Networks</div>
    <div id="sub4" class="sub">
        <h6>Unit - I: Introduction to Computer Networks</h6>
        <h6>Unit - II: Data Link Layer</h6>
        <h6>Unit - III: Network Layer</h6>
        <h6>Unit - IV: Transport Layer</h6>
        <h6>Unit - V: Application Layer</h6>
        <a  href="admin_sem4_cn.php" target="blank">CLICK HERE</a>
    </div>

    <div id="hsub5" class="subjects">Computer Graphics</div>
    <div id="sub5" class="sub">
        <h6>Unit - I: Over view of Graphics systems</h6>
        <h6>Unit - II: Output primitives & its attributes&Attributes of Output Primitives</h6>
        <h6>Unit - III: Two Dimensional Geometric Transformations&Two Dimensional Viewing</h6>
        <h6>Unit - IV: Three Dimensional Concepts and Object representations & Transformation</h6>
        <h6>Unit - V: Visible Surface Detection & Hidden Surface Detection Methods</h6>
        <a  href="admin_sem4_cg.php" target="blank">CLICK HERE</a>
    </div>

    <div id="hsub6" class="subjects">Formal Language And Automation Theory</div>
    <div id="sub6" class="sub">
        <h6>Unit - I: Finite Automata&NFA</h6>
        <h6>Unit - II: Regular expressions&Regular Grammar</h6>
        <h6>Unit - III: Context free automata</h6>
        <h6>Unit - IV: Push down automata&Turning machines</h6>
        <h6>Unit - V: Recursive and Recursively Enumerable Language</h6>
        <a  href="admin_sem4_flat.php" target="blank">CLICK HERE</a>
    </div>
    

    <!--GATE SUBJECTS-->
    <div><h2  class="gate">GATE SUBJECTS</h2></div>
    <div id="hsub7" class="subjects" >Probability,Statistics And Queing Theory</div>
    <div id="sub7" class="sub">
        <h6>Unit - I: Introduction to Probability</h6>
        <h6>Unit - II: Probability Distributions</h6>
        <h6>Unit - III: Curve fiting and correlation and Regression</h6>
        <h6>Unit - IV: Testing of Hypothesis</h6>
        <h6>Unit - V: Queuing Theory</h6>
        <a  href="https://github.com/MadhuNitesh/Gate-CS-Subjects-Resources" target="blank">CLICK HERE</a>
    </div> 
        
    <div id="hsub8" class="subjects">Formal Language And Automation Theory</div>
    <div id="sub8" class="sub">
        <h6>Unit - I: Finite Automata&NFA</h6>
        <h6>Unit - II: Regular expressions&Regular Grammar</h6>
        <h6>Unit - III: Context free automata</h6>
        <h6>Unit - IV: Push down automata&Turning machines</h6>
        <h6>Unit - V: Recursive and Recursively Enumerable Language</h6>
        <a  href="https://github.com/MadhuNitesh/Gate-CS-Subjects-Resources" target="blank">CLICK HERE</a>
    </div>

    <div id="hsub9" class="subjects">Operating Systems</div>
    <div id="sub9" class="sub">
        <h6>Unit - I: Introduction to OS&Introduction to Shell Programming</h6>
        <h6>Unit - II: CPU Scheduling&Process Synchronization</h6>
        <h6>Unit - III: Deadlock&Memory Management&Virtual Memory</h6>
        <h6>Unit - IV: Multiple Integrals</h6>
        <h6>Unit - V: Special functions</h6>
        <a  href="https://github.com/MadhuNitesh/Gate-CS-Subjects-Resources" target="blank">CLICK HERE</a>
    </div>

    <div id="hsub10" class="subjects">Computer Networks</div>
    <div id="sub10" class="sub">
        <h6>Unit - I: Introduction to Computer Networks</h6>
        <h6>Unit - II: Data Link Layer</h6>
        <h6>Unit - III: Network Layer</h6>
        <h6>Unit - IV: Transport Layer</h6>
        <h6>Unit - V: Application Layer</h6>
        <a  href="https://github.com/MadhuNitesh/Gate-CS-Subjects-Resources" target="blank">CLICK HERE</a>
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
            $("#sub10").hide();

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

            $("#hsub10").click(function()
            {
                $("#sub10").slideToggle('fast');

            });

        });  
    </script>


</html>