<html>
    <head>
        <title>sem-3 page</title>
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
        <h1>II/IV CSE SEM-I</h1> 
    </div>
    <br>
    <br>

    <!--Academic subjects-->
    <div><h2 id="academichead" class="academic">ACADEMIC SUBJECTS</h2></div>
    <div id="hsub1" class="subjects" >Data Structures and Algorithms</div>
    <div id="sub1" class="sub">
        <h6>Unit - I: Introduction&Arrays&Searching &Sorting</h6>
        <h6>Unit - II: Stacks&Queues</h6>
        <h6>Unit - III: Linked list</h6>
        <h6>Unit - IV: Trees</h6>
        <h6>Unit - V: Graphs</h6>
        <a  href="admin_sem3_dsa.php" target="blank">CLICK HERE</a>
    </div> 
        
    <div id="hsub2" class="subjects">Computer Organization</div>
    <div id="sub2" class="sub">
        <h6>Unit - I: Register Transfer and Micro operations</h6>
        <h6>Unit - II: Basic Computer Organization</h6>
        <h6>Unit - III: Control Design</h6>
        <h6>Unit - IV: Central Processing Unit</h6>
        <h6>Unit - V: Input-Output Organization</h6>
        <a  href="admin_sem3_co.php" target="blank">CLICK HERE</a>
    </div>

    <div id="hsub3" class="subjects">Oops using Java Programming</div>
    <div id="sub3" class="sub">
        <h6>Unit - I: Fundamentals of Object Oriented Programming</h6>
        <h6>Unit - II: Inheritance &Polymorphism &Packages</h6>
        <h6>Unit - III: I/O&Exception handling&Multithreading</h6>
        <h6>Unit - IV: Swings</h6>
        <h6>Unit - V: Event Handling&Enterprise Java Beans</h6>
        <a  href="admin_sem3_java.php" target="blank">CLICK HERE</a>
    </div>
        
    <div id="hsub4" class="subjects">Data Communication</div>
    <div id="sub4" class="sub">
        <h6>Unit - I: Introduction to Data Communications</h6>
        <h6>Unit - II: Transmission Media</h6>
        <h6>Unit - III: The Digital Data Communication Techniques</h6>
        <h6>Unit - IV: Local Area Network and IoT</h6>
        <h6>Unit - V: Multiplexing: Caterories, Demultiplexings</h6>
        <a  href="admin_sem3_dc.php" target="blank">CLICK HERE</a>
    </div>

    <div id="hsub5" class="subjects">Discrete Mathematical Structures</div>
    <div id="sub5" class="sub">
        <h6>Unit - I: Mathematical Logic</h6>
        <h6>Unit - II: Relations and algebraic systems</h6>
        <h6>Unit - III: Elementary Combinatorics</h6>
        <h6>Unit - IV: Recurrence Relations</h6>
        <h6>Unit - V: Graph Theroy</h6>
        <a  href="admin_sem3_dms.php" target="blank">CLICK HERE</a>
    </div>

    <div id="hsub6" class="subjects">Design Thinking and Product Innovation</div>
    <div id="sub6" class="sub">
        <h6>Unit - I: Introduction to Design Thinking</h6>
        <h6>Unit - II: Design thinking</h6>
        <h6>Unit - III: Innovation</h6>
        <h6>Unit - IV:Design thinking for strategic Innovation</h6>
        <h6>Unit - V: Design thinking in various sectors</h6>
        <a  href="admin_sem3_dtpi.php" target="blank">CLICK HERE</a>
    </div>
    

    <!--GATE SUBJECTS-->
    <div><h2  class="gate">GATE SUBJECTS</h2></div>
    <div id="hsub7" class="subjects" >Data Structures and Algorithms</div>
    <div id="sub7" class="sub">
        <h6>Unit - I: Introduction&Arrays&Searching &Sorting</h6>
        <h6>Unit - II: Stacks&Queues</h6>
        <h6>Unit - III: Linked list</h6>
        <h6>Unit - IV: Trees</h6>
        <h6>Unit - V: Graphs</h6>
        <a  href="https://github.com/MadhuNitesh/Gate-CS-Subjects-Resources" target="blank">CLICK HERE</a>
    </div> 
        
    <div id="hsub9" class="subjects">Discrete Mathematical Structures</div>
    <div id="sub9" class="sub">
        <h6>Unit - I: Mathematical Logic</h6>
        <h6>Unit - II: Relations and algebraic systems</h6>
        <h6>Unit - III: Elementary Combinatorics</h6>
        <h6>Unit - IV: Recurrence Relations</h6>
        <h6>Unit - V: Graph Theroy</h6>
        <a  href="https://github.com/MadhuNitesh/Gate-CS-Subjects-Resources" target="blank">CLICK HERE</a>
    </div>

    <div id="hsub10" class="subjects">Computer Organization</div>
    <div id="sub10" class="sub">
            <h6>Unit - I: Register Transfer and Micro operations</h6>
        <h6>Unit - II: Basic Computer Organization</h6>
        <h6>Unit - III: Control Design</h6>
        <h6>Unit - IV: Central Processing Unit</h6>
        <h6>Unit - V: Input-Output Organization</h6>
        <a  href="https://github.com/MadhuNitesh/Gate-CS-Subjects-Resources" target="blank">CLICK HERE</a>
    </div>

    <div id="hsub11" class="subjects">Data Communication</div>
    <div id="sub11" class="sub">
        <h6>Unit - I: Introduction to Data Communications</h6>
        <h6>Unit - II: Transmission Media</h6>
        <h6>Unit - III: The Digital Data Communication Techniques</h6>
        <h6>Unit - IV: Local Area Network and IoT</h6>
        <h6>Unit - V: Multiplexing: Caterories, Demultiplexings</h6>
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
            $("#sub10").hide()
            $("#sub11").hide()

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

            $("#hsub11").click(function()
            {
                $("#sub11").slideToggle('fast');

            });


        });  
    </script>


</html>