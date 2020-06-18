<?php
include 'conn.php';

if(isset($_POST['submit']))
{
  $fullname = $_POST['fullname'];
  $email = $_POST['email'];
  $query = $_POST['query'];
  $qry = "INSERT INTO `contact`(`fullname`, `email`, `query`) VALUES ('$fullname','$email','$query')";
 
     $query= mysqli_query($con,$qry);
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Nargishgupta</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="icon" type="image/icon" href="images/t2.png" />
	<link rel="stylesheet" href="style2.css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
  
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<!--script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script-->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<section>
  <!--div class="">
    <div class="row row2">
       <div class="col-lg-6">
        <h1 style=""><b>nargishgupta<span>.com</span></b></h1>
         
       </div>
       <div class="col-lg-6">
        <h5 style="float: right; letter-spacing: 2px;">EVERYDAY IS A LEARNING DAY</h5>
         
       </div>
      
    </div>
    
  </div>
</section-->



<section id="nav-bar">

<!--nav class="navbar navbar-expand-lg  " style="background-color: #f8f9fa!important;">
 <a class="navbar-brand" href="#">
    <img  src="images/t2.png"width="45" height="45" class="d-inline-block align-top t2" alt="">
    <h1 style=""><b>nargishgupta<span>.com</span></b></h1>
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <i class="fa fa-bars text-white" aria-hidden="true"></i>
  </button> 
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link active" href="#home">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#about">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="#courses">Courses</a>
      </li>
      
       <li class="nav-item">
        <a class="nav-link " href="#youtube">Youtube</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="#footer">Contact</a>
      </li>
     
      

    </ul>
  </div>
</nav-->

<nav class="navbar navbar-expand-lg navbar-light bg-light " style="background-color: #f8f9fa!important;">
  <a class="navbar-brand" href="#" style="color: red; font-size: 30px; ">Nargishgupta<span style="color:black">.com</span></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav  ml-5">
      <li class="nav-item active">
        <a class="nav-link" href="#home">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#about">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#courses">Courses</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#youtube">Youtube</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#footer">Contact</a>
      </li>
    </ul>
  </div>
</nav>	
</section>


<section id="home">
<div class="container text-center text-white wrap">
     
     
      	<div class="container">
      		<div class="row">
      		<div class="col-md-6">
      	<!--a href="openaccount.html" style="font-size: 10px!important; "><i class="fa fa-university fa-3x  text-white icon bg-danger" aria-hidden="true"> Open Account</i></a>
        </div>
           <div class="col-md-6">
      	<a href="#" style="font-size: 10px!important" ><i class="fa fa-user-o fa-3x text-white icon bg-primary" aria-hidden="true">   Login </i></a-->
	</div>
	</div>
	</div>

</div>
	
</section>


<section id=about>
  <h1 class=" text text-center"  style="padding: 50px 0px 10px;"> ABOUT</h1>
  <div class="container">
    
    <div class="row">
              <div class="col-md-6 col-12 col-sm-12 mt-5">
                 <p>I have created this Website for computer science and information technology students. Through this Website I have tried to explain some important topics in a simple way.This Website is very helpful for computer science engineering students may be from <b>GATE, NET, M.TECH, B.Tech , BCA, BSC, MCA, MSC</b> etc.In this Website I am trying to cover Data Structures, Algorithm Design, Operating System, Data Base Management System, TOC, etc.</b></p>
              </div>
              <div class=" col-md-6 col-12  col-sm-12 text-center ">
                 <img class="img" src="images/t2.png" alt="">
              </div>  
          <br><br>

            <div class=" col-md-6 col-12  col-sm-12 text-center ">
             <img class="img2" src="images/you1.png" >
          </div>
          <br>

         <div class=" col-md-6 col-12  col-sm-12  r ">
           <h1 class="">Video Lectures</h1>
                 <p>Bring your ideas and start-up to a new level of global platform and customer focused.Build your dreams by innovating the way of business and service quality.</p>
          </div>

          <div class=" col-md-6 col-12  col-sm-12  "style="margin-top: 100px;">
                 <h1 class="">Theory Concept</h1>
                 <p>Financial service is designed to get you higher profit on saving for your financial strength. You can customize your financial plan, let you experience financial freedom. Caring your choice and securing your wealth. Positive loss zone experience. <b>Most profitable personal saving. Advanced, analyzed & valuable investing.</b></p>
              </div>
            <div class=" col-md-6 col-12  col-sm-12 text-center ">
              <img class="img4" src="images/note.png" alt="">
            </div>  
       <br><br>

       </div>
    
  </div>
  
</section>

<!--section id="services">
	<div class="container text-center">
		<h1 class="text ">OUR COURSES</h1>
		
	</div>
	
</section-->

<section id=courses>
<div class="container text-center ser">
  <h1 class="text">OUR COURSES</h1>
   <div class="row">
    
    




     <div class="col-md-6 col-sm-12 col-lg-6 ">
       <div class="box">
        <div class="icon">T</div> 
         <div class="content">
           <h3 class="text-center">Theory of Computation</h3>
            <a href="#"><button type="button" class="btn btn-danger"> Study Material</button></a>
            <a href="toc.php"><button id="myBtn" type="button" class="btn btn-danger "> Vedios Lecture</button></a>
         </div>
      </div>
    </div>

 <div class="col-md-6 col-sm-12 col-lg-6 ">
       <div class="box">
        <div class="icon">A</div> 
         <div class="content">
           <h3 class="text-center">Algorithm Design</h3>
            <a href="#"><button type="button" class="btn btn-danger"> Study Material</button></a>
            <a href="algo.php"><button id="myBtn1" type="button" class="btn btn-danger "> Vedios Lecture</button></a>






           
         </div>
      </div>
    </div>

<div class="col-md-6 col-sm-12 col-lg-6 ">
       <div class="box">
        <div class="icon">D</div> 
         <div class="content">
           <h3 class="text-center">Data Structure</h3>
            <a href="#"><button type="button" class="btn btn-danger"> Study Material</button></a>
            <a href="#"><button id="myBtn2" type="button" class="btn btn-danger "> Vedios Lecture</button></a>









            
         </div>
      </div>
    </div>


<div class="col-md-6 col-sm-12 col-lg-6 ">
       <div class="box">
        <div class="icon">C</div> 
         <div class="content">
           <h3 class="text-center">Compiler Design</h3>
            <a href="#"><button type="button" class="btn btn-danger"> Study Material</button></a>
            <a href="#"><button id="myBtn3" type="button" class="btn btn-danger "> Vedios Lecture</button></a>










         </div>
      </div>
    </div>



    

    

   <div class="col-md-6 col-sm-12 col-lg-6 ">
       <div class="box">
        <div class="icon">O</div> 
         <div class="content">
           <h3 class="text-center">Operating System</h3>
            <a href="#"><button type="button" class="btn btn-danger"> Study Material</button></a>
            <a href="#"><button id="myBtn4" type="button" class="btn btn-danger "> Vedios Lecture</button></a>






    </div>
      </div>
    </div>

     <div class="col-md-6 col-sm-12 col-lg-6 ">
       <div class="box">
        <div class="icon">D</div> 
         <div class="content">
           <h3 class="text-center">DBMS</h3>
            <a href="#"><button type="button" class="btn btn-danger"> Study Material</button></a>
            <a href="#"><button id="myBtn5" type="button" class="btn btn-danger "> Vedios Lecture</button></a>





    </div>
      </div>
    </div>

     <div class="col-md-6 col-sm-12 col-lg-6 ">
       <div class="box">
        <div class="icon">G</div> 
         <div class="content">
           <h3 class="text-center">GATE Questions</h3>
            <a href="#"><button type="button" class="btn btn-danger"> Study Material</button></a>
            <a href="#"><button id="myBtn6" type="button" class="btn btn-danger "> Vedios Lecture</button></a>





    </div>
      </div>
    </div>

     <div class="col-md-6 col-sm-12 col-lg-6 ">
       <div class="box">
        <div class="icon">P</div> 
         <div class="content">
           <h3 class="text-center">Placement Questions</h3>
            <a href="#"><button type="button" class="btn btn-danger"> Study Material</button></a>
            <a href="#"><button id="myBtn7" type="button" class="btn btn-danger "> Vedios Lecture</button></a>





    </div>
      </div>
    </div>

     <div class="col-md-6 col-sm-12 col-lg-6 ">
       <div class="box">
        <div class="icon">M</div> 
         <div class="content">
           <h3 class="text-center">Motivational Vedios</h3>
            <a href="#"><button type="button" class="btn btn-danger"> Study Material</button></a>
            <a href="#"><button id="myBtn8" type="button" class="btn btn-danger "> Vedios Lecture</button></a>





    </div>
      </div>
    </div>

     <div class="col-md-6 col-sm-12 col-lg-6 ">
       <div class="box">
        <div class="icon">S</div> 
         <div class="content">
           <h3 class="text-center">Social Vedios</h3>
            <a href="#"><button type="button" class="btn btn-danger"> Study Material</button></a>
            <a href="#"><button id="myBtn9" type="button" class="btn btn-danger "> Vedios Lecture</button></a>





    </div>
      </div>
    </div>

     


  </div>
</div>


</section>




<section id="youtube">
 <h1 class="text text-center " style="margin-top: 80px;">Youtube Channel</h1>
<section style="color: red; padding:40px 0px 50px; margin:40px 0px 70px;  ">
  <div class="container text-center">
    <!--p class="text-center " style="color: black; font-size: 30px;">Watch vedios on my Youtube channel </p-->
    <iframe class="text-center" width="560" height="315" src="https://www.youtube.com/embed/Q_rcH0Ni8us" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  </div>
</section>





<!--     ****************footer****-->

<section id="footer">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-sm-6 footer-box">
				<h4>Our Courses</h4>
				<ul class="footer_ul">
                  <li><a href="#">TOC</a></li>
                  <li><a href="#">Algorithm Design</a></li>
                  <li><a href="#">Data Structure</a></li>
                  <li><a href="#">Compiler Design</a></li>
                  <li><a href="#">Operating System</a></li>
                  <li><a href="#">DBMS</a></li>
                  <li><a href="#">GATE Questions</a></li>
                  <li><a href="#">Placement Questions </a></li>
                  <li><a href="#">Motivational Vedios</a></li>
                  <li><a href="#">Social Vedios</a></li>
                </ul>
            </div>

			<div class="col-md-4 col-sm-6 footer-box">
				<h4>Menu</h4>
				<ul class="footer_ul">
                  <li><a href="#">Home</a></li>
                  <li><a href="#">About</a></li>
                  <li><a href="#">Courses</a></li>
                  <li><a href="#">Youtube</a></li>
                  <li><a href="#">Contact</a></li>
                </ul>
            </div>
			 
			 <div class="col-md-4 col-sm-6 footer-box">
           <form method="post">
			 	     <h4> Contact Us</h4>
			 	       <input type="text" class="form" name="fullname" placeholder="Full name">
               <input type="email" class="form" name="email" placeholder="Email id">
               <div class="form-group select">
                 <textarea class="form-control" id="exampleFormControlSelect1" name="query" placeholder="Query" rows="3"></textarea>
                 <button type="submit" class="btn btn-outline-danger but" style="border-radius: 20px;" name="submit">Submit</button>
              </div>
			 	   </form>
			 </div>
           
		</div>
		
	</div>

<div style="background-color:white; color:grey;">
<p class="text-center">Copyright @2019 | Designed by <b>Aditya Singh</b></p>

 <div>
<ul class="social_footer_ul">
<li><a href="#"><i class="fa fa-facebook-square fa-2x"></i></a></li>
<li><a href="#"><i class="fa fa-instagram fa-2x"></i></a></li>
<li><a href="#"><i class="fa fa-twitter fa-2x"></i></a></li>
<li><a href="#"><i class="fa fa-linkedin-square fa-2x"></i></a></li>
<li><a href="#"><i class="fa fa-youtube fa-2x"></i></a></li>
</ul>
</div>
</div>	
</section>











 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>









</body>
</html>
























