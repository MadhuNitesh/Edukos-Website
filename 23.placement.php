<html>
    <head>
        <title>Placement Section</title>
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
            .dropdown
            {
                margin-left:95.5%;
                padding-top:18px;
            }
           
            .head1{
                margin-top:90px;
                margin-left:38%;
                font-size: 25px;
            }
            
            .subjects
            {
                margin-left:560px;
                margin-top:30px;
                background-color: lightcyan;
                width:400px;
                height:30px;
                padding:20px;
                text-align:left;
                cursor: pointer;
                border-radius: 5px;
                box-shadow: rgba(17, 12, 46, 0.15) 0px 48px 100px 0px;
                
            }
            .subjects a
            {           
                text-decoration: none;
                font-size: 17px;
                color: black;
                margin-left: 80px;
     
            }
           
        </style>
        
    </head>
    <body>
        <ul>
            <div class="hello">
               <li><a class= "a1" href="7.select.php">Home</a></li>
               <li><a class ="a1" href="18.request.php">Request</a></li>

               
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
        <h1>Placement Section</h1> 
    </div>
    <br>
    <br>

    <!--Academic subjects-->
    <div id="hsub1" class="subjects" ><a href="https://whimsical.com/first-year-2t24UQHhs1YMuEPw5aCdrs" target="_blank">FIRST YEAR PLACEMENTS</a></div>
    
    <div id="hsub2" class="subjects"><a href="https://whimsical.com/second-year-Y93Gbuh5kRaj3cNtLjB93S" target="_blank">SECOND YEAR PLACEMENTS</a></div>
    
    <div id="hsub3" class="subjects"><a href="https://whimsical.com/third-year-Tr5kjZkUmvq9AJCqMdaGzk" target="_blank">THIRD YEAR PLACEMENTS</a></div>
    
    <div id="hsub5" class="subjects"><a href="https://whimsical.com/overall-CXZq7zNLm5RybEdnpWLonV" target="_blank">OVERALL YEAR PLACEMENTS</a></div>
   

   

    </body>
    <script src="jquery.js"></script>
    <script> 

    
          $(document).ready(function()
          {

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
              
  
          });  
      </script>

      
</html>