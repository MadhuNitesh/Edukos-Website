<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Home Page</title>
    <style>

        .navbar-brand{
         font-family: monospace;
         font-size: 30px;
         margin-left:80px;

         }
         .bg-light .navbar-nav .nav-link{
           font-family: monospace;
           font-size: 18px;
          margin-left:80px; 
         } 
         .carousel-inner{
           height: 90vh;
           min-height: 300px;
           background: no-repeat center center scroll;
           background-size: cover;
         }
         .one{
           position:relative;
           top:70px;
         }
         .one img{
           width: 600px;
           height:550px;
           position: relative;
           left:-50px;
         }
         .one h1,p{
           display: flex;
           justify-content: center;
           align-items: center;
           padding: 10px;
           font-style: monospace;
           line-height:25px;
           position: relative;
           top:80px;
         }
         .third{
           display: flex;
           justify-content: center;
           align-items: center;
           position: relative;
           top:150px;
         }
         .four .card1 img{
           width:250px;
           height:250px;
           box-shadow: 5px 10px 18px grey;
         }
         .four .card1 h6{
           position: relative;
           left: 70px;
           top:20px;
           font-style: monospace;
         }
         .four .card1{
          float: left;
          padding: 10px;
         }
         .four{
           position: relative;
           top:160px;
           display: flex;
           align-items: center;
         }
         
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#"><span>EDUKOS</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav >
            <li class="nav-item">
              <a class="nav-link" href="#here">About us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="4.stu_login.php">Student</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="2.fac_login.php">Faculty</a>
            </li>
          </ul>
        </div>
      </nav>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img class="d-block w-100" src="images/study.jpg" alt="First slide">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="images/study6.jpg" alt="First slide">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="images/study7.jpg" alt="First slide">
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
                  <section class="one" id="here">
                    <div class="container">
                      <div class="row">
                        <div class="col">
                          <img src="images/about2.jpg">
                        </div>
                        <div class="col">
                          <h1>About us</h1>
                          <p>Edukos envisions to provide the brightest way to learn the techinical topics <br> right in your hands.
                            You will be having a very good ease to learn. We will be <br>giving the guidence in the form of road maps that helps you to prepare for<br> your competitive exams and placements.
                             Not only this you can get different <br> notes and textbooks fordifferent subjects here in our EDUKOS.
                              Intended <br>users or students can contact or raise a requestto a faculty memberto get <br>your doubts clarified.
                            Faculty members also provide few notes and help you in knowing the importance of a particular subject.</p>
                
                        </div>
                      </div>
                    </div>
                  </section>
                 <div class="third">
                   <h1>Team Members</h1>
                 </div>
                 <section class="four">
                   <div class="container">
                    <div class="card1" >
                      <img src="images/person2.jpg">
                      <h6>Prasanth kumar</h6>
                    </div>
                    <div class="card1" >
                      <img src="images/person3.jpg">
                      <h6>Madhu Nitesh</h6>
                    </div>
                    <div class="card1" >
                      <img src="images/person1.jpg">
                      <h6>Bharathi Lakshmi</h6>
                    </div>
                    <div class="card1" >
                      <img src="images/person5.jpg">
                      <h6>Divyanth Ramnath</h6>
                    </div>
                  </div>
                 </section>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>