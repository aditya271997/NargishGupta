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
<!--nav class="navbar navbar-expand-lg navbar-danger bg-danger">
  <a class="navbar-brand" href="#"><img  src="images/t2.png" width="45" height="45" class="d-inline-block align-top t2" alt=""></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <i class="fa fa-bars  text-white" style="font-size: 25px;" aria-hidden="true"></i>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#about">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#courses">Courses</a>
      </li>
     
        
    </ul>
  </div>
</nav-->
<nav class="navbar navbar-expand-lg  " style="background-color: lightgrey;">
 <a class="navbar-brand" href="#">
    <!--img  src="images/t2.png"width="45" height="45" class="d-inline-block align-top t2" alt=""-->
    <h1 style=""><b>nargishgupta<span>.com</span></b></h1>
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
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
  <h1 class="text text-center"  style="padding: 50px 0px 10px;"> ABOUT</h1>
  <div class="container">
    
    <div class="row">
              <div class="col-md-6  mt-5">
                 <p>I have created this Website for computer science and information technology students. Through this Website I have tried to explain some important topics in a simple way.This Website is very helpful for computer science engineering students may be from <b>GATE, NET, M.TECH, B.Tech , BCA, BSC, MCA, MSC</b> etc.In this Website I am trying to cover Data Structures, Algorithm Design, Operating System, Data Base Management System, TOC, etc.</b></p>
              </div>
              <div class="col-md-6 text-center ">
                 <img class="img" src="images/t2.png" alt="">
              </div>  
          <br><br>

            <div class="col-md-6 text-center ">
             <img class="img2" src="images/you1.png" >
          </div>
          <br>

         <div class="col-md-6 col-sm-12 r ">
           <h1 class="text1">Video Lectures</h1>
                 <p>Bring your ideas and start-up to a new level of global platform and customer focused.Build your dreams by innovating the way of business and service quality.</p>
          </div>

          <div class="col-md-6 col-sm-12 "style="margin-top: 100px;">
                 <h1 class="text1">Theory Concept</h1>
                 <p>Financial service is designed to get you higher profit on saving for your financial strength. You can customize your financial plan, let you experience financial freedom. Caring your choice and securing your wealth. Positive loss zone experience. <b>Most profitable personal saving. Advanced, analyzed & valuable investing.</b></p>
              </div>
            <div class="col-md-6 text-center ">
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
            <a href="#"><button id="myBtn" type="button" class="btn btn-danger "> Vedios Lecture</button></a>




<!-- Trigger/Open The Modal -->


<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="header">
      <span class="close">&times;</span>
      <h3>Theory of Computation</h3>
    </div>
    <div class="modal-body text-center">
      <ol>
      <li><a href="#"> Introduction of TOC</a></li>
      <hr>
      <li><a href="#"> Finite Automata | Types | Introduction.</a></li>
      <hr>
      <li><a href="#"> DFA Construction | Binary No. Divisible by 3 .</a></li>
      <hr>
      <li><a href="#"> DFA Construction | Neither Accept'00' Nor '11' . </a></li>
      <hr>
      <li><a href="#"> DFA Construction | Exmaples.</a></li>
      <hr>
      <li><a href="#"> DFA Construction | Ending With Substring 'ab'.</a></li>
      <hr>
      <li><a href="#"> DFA Construction | Starting With 'a' and Ending With 'b' .</a></li>
      <hr>
      <li><a href="#"> DFA Construction | Length of the String .</a></li>
      <hr>
      <li><a href="#"> DFA Construction | Length of the String | Exactly-3 Atleast-3  .</a></li>
      <hr>
      <li><a href="#"> DFA Construction | Start and End With Different Symbol.</a></li>
      <hr>
      <li><a href="#"> DFA Construction | Start and End With Same Symbol .</a></li>
      <hr>
      <li><a href="#"> DFA Construction | Example 2 .</a></li>
      <hr>
      <li><a href="#"> DFA Construction | Example 3 .</a></li>
      <hr>
      <li><a href="#"> DFA Construction | Example 4.</a></li>
      <hr>
      
</ol>

    </div>
    <div class="modal-footer">
      <h3>Modal Footer</h3>
    </div>
  </div>

</div>





         </div>
      </div>
    </div>

 <div class="col-md-6 col-sm-12 col-lg-6 ">
       <div class="box">
        <div class="icon">A</div> 
         <div class="content">
           <h3 class="text-center">Algorithm Design</h3>
            <a href="#"><button type="button" class="btn btn-danger"> Study Material</button></a>
            <a href="#"><button id="myBtn1" type="button" class="btn btn-danger "> Vedios Lecture</button></a>




<!-- Trigger/Open The Modal -->


<!-- The Modal -->
<div id="myModal1" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="header">
      <span class="close">&times;</span>
      <h3>Algorithm Design</h3>
    </div>
    <div class="modal-body text-center">
      <ol>
      <li><a href="#"> Introduction of TOC</a></li>
      <hr>
      <li><a href="#"> Finite Automata | Types | Introduction.</a></li>
      <hr>
      <li><a href="#"> DFA Construction | Binary No. Divisible by 3 .</a></li>
      <hr>
      <li><a href="#"> DFA Construction | Neither Accept'00' Nor '11' . </a></li>
      <hr>
      <li><a href="#"> DFA Construction | Exmaples.</a></li>
      <hr>
      <li><a href="#"> DFA Construction | Ending With Substring 'ab'.</a></li>
      <hr>
      <li><a href="#"> DFA Construction | Starting With 'a' and Ending With 'b' .</a></li>
      <hr>
      <li><a href="#"> DFA Construction | Length of the String .</a></li>
      <hr>
      <li><a href="#"> DFA Construction | Length of the String | Exactly-3 Atleast-3  .</a></li>
      <hr>
      <li><a href="#"> DFA Construction | Start and End With Different Symbol.</a></li>
      <hr>
      <li><a href="#"> DFA Construction | Start and End With Same Symbol .</a></li>
      <hr>
      <li><a href="#"> DFA Construction | Example 2 .</a></li>
      <hr>
      <li><a href="#"> DFA Construction | Example 3 .</a></li>
      <hr>
      <li><a href="#"> DFA Construction | Example 4.</a></li>
      <hr>
      
</ol>

    </div>
    <div class="modal-footer">
      <h3>Modal Footer</h3>
    </div>
  </div>

</div>
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




<!-- Trigger/Open The Modal -->


<!-- The Modal -->
<div id="myModal2" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="header">
      <span class="close">&times;</span>
      <h3>Data Structure</h3>
    </div>
    <div class="modal-body text-center">
      <ol>
      <li><a href="#"> Introduction of TOC</a></li>
      <hr>
      <li><a href="#"> Finite Automata | Types | Introduction.</a></li>
      <hr>
      <li><a href="#"> DFA Construction | Binary No. Divisible by 3 .</a></li>
      <hr>
      <li><a href="#"> DFA Construction | Neither Accept'00' Nor '11' . </a></li>
      <hr>
      <li><a href="#"> DFA Construction | Exmaples.</a></li>
      <hr>
      <li><a href="#"> DFA Construction | Ending With Substring 'ab'.</a></li>
      <hr>
      <li><a href="#"> DFA Construction | Starting With 'a' and Ending With 'b' .</a></li>
      <hr>
      <li><a href="#"> DFA Construction | Length of the String .</a></li>
      <hr>
      <li><a href="#"> DFA Construction | Length of the String | Exactly-3 Atleast-3  .</a></li>
      <hr>
      <li><a href="#"> DFA Construction | Start and End With Different Symbol.</a></li>
      <hr>
      <li><a href="#"> DFA Construction | Start and End With Same Symbol .</a></li>
      <hr>
      <li><a href="#"> DFA Construction | Example 2 .</a></li>
      <hr>
      <li><a href="#"> DFA Construction | Example 3 .</a></li>
      <hr>
      <li><a href="#"> DFA Construction | Example 4.</a></li>
      <hr>
      
</ol>

    </div>
    <div class="modal-footer">
      <h3>Modal Footer</h3>
    </div>
  </div>

</div>





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




<!-- Trigger/Open The Modal -->


<!-- The Modal -->
<div id="myModal3" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="header">
      <span class="close">&times;</span>
      <h3>Compiler Design</h3>
    </div>
    <div class="modal-body text-center">
      <ol>
      <li><a href="#"> Introduction of TOC</a></li>
      <hr>
      <li><a href="#"> Finite Automata | Types | Introduction.</a></li>
      <hr>
      <li><a href="#"> DFA Construction | Binary No. Divisible by 3 .</a></li>
      <hr>
      <li><a href="#"> DFA Construction | Neither Accept'00' Nor '11' . </a></li>
      <hr>
      <li><a href="#"> DFA Construction | Exmaples.</a></li>
      <hr>
      <li><a href="#"> DFA Construction | Ending With Substring 'ab'.</a></li>
      <hr>
      <li><a href="#"> DFA Construction | Starting With 'a' and Ending With 'b' .</a></li>
      <hr>
      <li><a href="#"> DFA Construction | Length of the String .</a></li>
      <hr>
      <li><a href="#"> DFA Construction | Length of the String | Exactly-3 Atleast-3  .</a></li>
      <hr>
      <li><a href="#"> DFA Construction | Start and End With Different Symbol.</a></li>
      <hr>
      <li><a href="#"> DFA Construction | Start and End With Same Symbol .</a></li>
      <hr>
      <li><a href="#"> DFA Construction | Example 2 .</a></li>
      <hr>
      <li><a href="#"> DFA Construction | Example 3 .</a></li>
      <hr>
      <li><a href="#"> DFA Construction | Example 4.</a></li>
      <hr>
      
</ol>

    </div>
    <div class="modal-footer">
      <h3>Modal Footer</h3>
    </div>
  </div>

</div>





         </div>
      </div>
    </div>



    

    <!--div class="col-md-6 col-sm-12 col-lg-6 ">
       <div class="box">
        <div class="icon ">S</div> 
         <div class="content">
           <h3 class="text-center">Social Vedios</h3>
            <a href="#"><button type="button" class="btn btn-danger">Study Material</button></a>
            <a href="https://www.youtube.com/watch?v=9_lcmRg-OTY&list=PLPzfPcir5uPQ6LrB421cvMvcF3EcsGrr5"><button type="button" class="btn btn-danger">Vedios Lecture</button></a>
            
         </div>
      </div>
    </div-->

   <div class="col-md-6 col-sm-12 col-lg-6 ">
       <div class="box">
        <div class="icon">O</div> 
         <div class="content">
           <h3 class="text-center">Operating System</h3>
            <a href="#"><button type="button" class="btn btn-danger"> Study Material</button></a>
            <a href="#"><button id="myBtn4" type="button" class="btn btn-danger "> Vedios Lecture</button></a>




<!-- Trigger/Open The Modal -->


<!-- The Modal -->
<div id="myModal4" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="header">
      <span class="close">&times;</span>
      <h2>Operating System</h2>
    </div>
    <div class="modal-body text-center">
      <ol>
      <li><a href="#"> Introduction of TOC</a></li>
      <hr>
      <li><a href="#"> Finite Automata | Types | Introduction.</a></li>
      <hr>
      <li><a href="#"> DFA Construction | Binary No. Divisible by 3 .</a></li>
      <hr>
      <li><a href="#"> DFA Construction | Neither Accept'00' Nor '11' . </a></li>
      <hr>
      <li><a href="#"> DFA Construction | Exmaples.</a></li>
      <hr>
      <li><a href="#"> DFA Construction | Ending With Substring 'ab'.</a></li>
      <hr>
      <li><a href="#"> DFA Construction | Starting With 'a' and Ending With 'b' .</a></li>
      <hr>
      <li><a href="#"> DFA Construction | Length of the String .</a></li>
      <hr>
      <li><a href="#"> DFA Construction | Length of the String | Exactly-3 Atleast-3  .</a></li>
      <hr>
      <li><a href="#"> DFA Construction | Start and End With Different Symbol.</a></li>
      <hr>
      <li><a href="#"> DFA Construction | Start and End With Same Symbol .</a></li>
      <hr>
      <li><a href="#"> DFA Construction | Example 2 .</a></li>
      <hr>
      <li><a href="#"> DFA Construction | Example 3 .</a></li>
      <hr>
      <li><a href="#"> DFA Construction | Example 4.</a></li>
      <hr>
      
</ol>

    </div>
    <div class="modal-footer">
      <h3>Modal Footer</h3>
    </div>
  </div>

</div>
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




<!-- Trigger/Open The Modal -->


<!-- The Modal -->
<div id="myModal5" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="header">
      <span class="close">&times;</span>
      <h2>DBMS</h2>
    </div>
    <div class="modal-body text-center">
      <ol>
      <li><a href="#"> Introduction of TOC</a></li>
      <hr>
      <li><a href="#"> Finite Automata | Types | Introduction.</a></li>
      <hr>
      <li><a href="#"> DFA Construction | Binary No. Divisible by 3 .</a></li>
      <hr>
      <li><a href="#"> DFA Construction | Neither Accept'00' Nor '11' . </a></li>
      <hr>
      <li><a href="#"> DFA Construction | Exmaples.</a></li>
      <hr>
      <li><a href="#"> DFA Construction | Ending With Substring 'ab'.</a></li>
      <hr>
      <li><a href="#"> DFA Construction | Starting With 'a' and Ending With 'b' .</a></li>
      <hr>
      <li><a href="#"> DFA Construction | Length of the String .</a></li>
      <hr>
      <li><a href="#"> DFA Construction | Length of the String | Exactly-3 Atleast-3  .</a></li>
      <hr>
      <li><a href="#"> DFA Construction | Start and End With Different Symbol.</a></li>
      <hr>
      <li><a href="#"> DFA Construction | Start and End With Same Symbol .</a></li>
      <hr>
      <li><a href="#"> DFA Construction | Example 2 .</a></li>
      <hr>
      <li><a href="#"> DFA Construction | Example 3 .</a></li>
      <hr>
      <li><a href="#"> DFA Construction | Example 4.</a></li>
      <hr>
      
</ol>

    </div>
    <div class="modal-footer">
      <h3>Modal Footer</h3>
    </div>
  </div>

</div>
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




<!-- Trigger/Open The Modal -->


<!-- The Modal -->
<div id="myModal6" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="header">
      <span class="close">&times;</span>
      <h2>GATE Questions</h2>
    </div>
    <div class="modal-body text-center">
      <ol>
      <li><a href="#"> Introduction of TOC</a></li>
      <hr>
      <li><a href="#"> Finite Automata | Types | Introduction.</a></li>
      <hr>
      <li><a href="#"> DFA Construction | Binary No. Divisible by 3 .</a></li>
      <hr>
      <li><a href="#"> DFA Construction | Neither Accept'00' Nor '11' . </a></li>
      <hr>
      <li><a href="#"> DFA Construction | Exmaples.</a></li>
      <hr>
      <li><a href="#"> DFA Construction | Ending With Substring 'ab'.</a></li>
      <hr>
      <li><a href="#"> DFA Construction | Starting With 'a' and Ending With 'b' .</a></li>
      <hr>
      <li><a href="#"> DFA Construction | Length of the String .</a></li>
      <hr>
      <li><a href="#"> DFA Construction | Length of the String | Exactly-3 Atleast-3  .</a></li>
      <hr>
      <li><a href="#"> DFA Construction | Start and End With Different Symbol.</a></li>
      <hr>
      <li><a href="#"> DFA Construction | Start and End With Same Symbol .</a></li>
      <hr>
      <li><a href="#"> DFA Construction | Example 2 .</a></li>
      <hr>
      <li><a href="#"> DFA Construction | Example 3 .</a></li>
      <hr>
      <li><a href="#"> DFA Construction | Example 4.</a></li>
      <hr>
      
</ol>

    </div>
    <div class="modal-footer">
      <h3>Modal Footer</h3>
    </div>
  </div>

</div>
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




<!-- Trigger/Open The Modal -->


<!-- The Modal -->
<div id="myModal7" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="header">
      <span class="close">&times;</span>
      <h2>Placement Questions</h2>
    </div>
    <div class="modal-body text-center">
      <ol>
      <li><a href="#"> Introduction of TOC</a></li>
      <hr>
      <li><a href="#"> Finite Automata | Types | Introduction.</a></li>
      <hr>
      <li><a href="#"> DFA Construction | Binary No. Divisible by 3 .</a></li>
      <hr>
      <li><a href="#"> DFA Construction | Neither Accept'00' Nor '11' . </a></li>
      <hr>
      <li><a href="#"> DFA Construction | Exmaples.</a></li>
      <hr>
      <li><a href="#"> DFA Construction | Ending With Substring 'ab'.</a></li>
      <hr>
      <li><a href="#"> DFA Construction | Starting With 'a' and Ending With 'b' .</a></li>
      <hr>
      <li><a href="#"> DFA Construction | Length of the String .</a></li>
      <hr>
      <li><a href="#"> DFA Construction | Length of the String | Exactly-3 Atleast-3  .</a></li>
      <hr>
      <li><a href="#"> DFA Construction | Start and End With Different Symbol.</a></li>
      <hr>
      <li><a href="#"> DFA Construction | Start and End With Same Symbol .</a></li>
      <hr>
      <li><a href="#"> DFA Construction | Example 2 .</a></li>
      <hr>
      <li><a href="#"> DFA Construction | Example 3 .</a></li>
      <hr>
      <li><a href="#"> DFA Construction | Example 4.</a></li>
      <hr>
      
</ol>

    </div>
    <div class="modal-footer">
      <h3>Modal Footer</h3>
    </div>
  </div>

</div>
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




<!-- Trigger/Open The Modal -->


<!-- The Modal -->
<div id="myModal8" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="header">
      <span class="close">&times;</span>
      <h2></h2>
    </div>
    <div class="modal-body text-center">
      <ol>
      <li><a href="#"> Introduction of TOC</a></li>
      <hr>
      <li><a href="#"> Finite Automata | Types | Introduction.</a></li>
      <hr>
      <li><a href="#"> DFA Construction | Binary No. Divisible by 3 .</a></li>
      <hr>
      <li><a href="#"> DFA Construction | Neither Accept'00' Nor '11' . </a></li>
      <hr>
      <li><a href="#"> DFA Construction | Exmaples.</a></li>
      <hr>
      <li><a href="#"> DFA Construction | Ending With Substring 'ab'.</a></li>
      <hr>
      <li><a href="#"> DFA Construction | Starting With 'a' and Ending With 'b' .</a></li>
      <hr>
      <li><a href="#"> DFA Construction | Length of the String .</a></li>
      <hr>
      <li><a href="#"> DFA Construction | Length of the String | Exactly-3 Atleast-3  .</a></li>
      <hr>
      <li><a href="#"> DFA Construction | Start and End With Different Symbol.</a></li>
      <hr>
      <li><a href="#"> DFA Construction | Start and End With Same Symbol .</a></li>
      <hr>
      <li><a href="#"> DFA Construction | Example 2 .</a></li>
      <hr>
      <li><a href="#"> DFA Construction | Example 3 .</a></li>
      <hr>
      <li><a href="#"> DFA Construction | Example 4.</a></li>
      <hr>
      
</ol>

    </div>
    <div class="modal-footer">
      <h3>Modal Footer</h3>
    </div>
  </div>

</div>
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




<!-- Trigger/Open The Modal -->


<!-- The Modal -->
<div id="myModal9" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="header">
      <span class="close">&times;</span>
      <h3>Social Vedios</h3>
    </div>
    <div class="modal-body text-center">
      <ol>
      <li><a href="#"> Introduction of TOC</a></li>
      <hr>
      <li><a href="#"> Finite Automata | Types | Introduction.</a></li>
      <hr>
      <li><a href="#"> DFA Construction | Binary No. Divisible by 3 .</a></li>
      <hr>
      <li><a href="#"> DFA Construction | Neither Accept'00' Nor '11' . </a></li>
      <hr>
      <li><a href="#"> DFA Construction | Exmaples.</a></li>
      <hr>
      <li><a href="#"> DFA Construction | Ending With Substring 'ab'.</a></li>
      <hr>
      <li><a href="#"> DFA Construction | Starting With 'a' and Ending With 'b' .</a></li>
      <hr>
      <li><a href="#"> DFA Construction | Length of the String .</a></li>
      <hr>
      <li><a href="#"> DFA Construction | Length of the String | Exactly-3 Atleast-3  .</a></li>
      <hr>
      <li><a href="#"> DFA Construction | Start and End With Different Symbol.</a></li>
      <hr>
      <li><a href="#"> DFA Construction | Start and End With Same Symbol .</a></li>
      <hr>
      <li><a href="#"> DFA Construction | Example 2 .</a></li>
      <hr>
      <li><a href="#"> DFA Construction | Example 3 .</a></li>
      <hr>
      <li><a href="#"> DFA Construction | Example 4.</a></li>
      <hr>
      
</ol>

    </div>
    <div class="modal-footer">
      <h3>Modal Footer</h3>
    </div>
  </div>

</div>
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
<style type="text/css">
  
/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width:100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  border: 1px solid #888;
  width: 50%;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
  -webkit-animation-name: animatetop;
  -webkit-animation-duration: 0.4s;
  animation-name: animatetop;
  animation-duration: 0.4s
}

/* Add Animation */
@-webkit-keyframes animatetop {
  from {top:-300px; opacity:0} 
  to {top:0; opacity:1}
}

@keyframes animatetop {
  from {top:-300px; opacity:0}
  to {top:0; opacity:1}
}

/* The Close Button */
.close {
  color: white;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

.header {
  padding: 2px 16px;
  background-color: #dc3545;
  color: white;
  float: left;


}

.modal-body 
{
  color:black;
  padding: 2px 16px;

}
.modal-body ol 
{
  padding-left: 10px; 
}
.modal-body ol li a
{
  color:black;
}

 .modal-body li a:hover
 {
  color:#dc3545;
 }



.modal-footer {
  padding: 2px 16px;
  background-color: #dc3545;
  color: white;
}
</style>

<!--script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
<script>
// Get the modal
var modal1 = document.getElementById("myModal1");

// Get the button that opens the modal
var btn1 = document.getElementById("myBtn1");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal1.style.display = "block";
}

// When the user clicks on <span> (x), close the modal1
span.onclick = function() {
  modal1.style.display = "none";
}

// When the user clicks anywhere outside of the modal1, close it
window.onclick = function(event) {
  if (event.target == modal1) {
    modal1.style.display = "none";
  }
}
</script>

<script>
// Get the modal
var modal2 = document.getElementById("myModal2");

// Get the button that opens the modal
var btn2 = document.getElementById("myBtn2");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal2.style.display = "block";
}

// When the user clicks on <span> (x), close the modal2
span.onclick = function() {
  modal2.style.display = "none";
}

// When the user clicks anywhere outside of the modal2, close it
window.onclick = function(event) {
  if (event.target == modal2) {
    modal2.style.display = "none";
  }
}
</script>
<script>
// Get the modal
var modal3 = document.getElementById("myModal3");

// Get the button that opens the modal
var btn3 = document.getElementById("myBtn3");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal3.style.display = "block";
}

// When the user clicks on <span> (x), close the modal3
span.onclick = function() {
  modal3.style.display = "none";
}

// When the user clicks anywhere outside of the modal3, close it
window.onclick = function(event) {
  if (event.target == modal3) {
    modal3.style.display = "none";
  }
}
</script>
<script>
// Get the modal
var modal4 = document.getElementById("myModal4");

// Get the button that opens the modal
var btn4 = document.getElementById("myBtn4");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal4.style.display = "block";
}

// When the user clicks on <span> (x), close the modal4
span.onclick = function() {
  modal4.style.display = "none";
}

// When the user clicks anywhere outside of the modal4, close it
window.onclick = function(event) {
  if (event.target == modal4) {
    modal4.style.display = "none";
  }
}
</script>
<script>
// Get the modal
var modal5 = document.getElementById("myModal5");

// Get the button that opens the modal
var btn5 = document.getElementById("myBtn5");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal5.style.display = "block";
}

// When the user clicks on <span> (x), close the modal5
span.onclick = function() {
  modal5.style.display = "none";
}

// When the user clicks anywhere outside of the modal5, close it
window.onclick = function(event) {
  if (event.target == modal5) {
    modal5.style.display = "none";
  }
}
</script>
<script>
// Get the modal
var modal6 = document.getElementById("myModal6");

// Get the button that opens the modal
var btn6 = document.getElementById("myBtn6");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal6.style.display = "block";
}

// When the user clicks on <span> (x), close the modal6
span.onclick = function() {
  modal6.style.display = "none";
}

// When the user clicks anywhere outside of the modal6, close it
window.onclick = function(event) {
  if (event.target == modal6) {
    modal6.style.display = "none";
  }
}
</script>
<script>
// Get the modal
var modal7 = document.getElementById("myModal7");

// Get the button that opens the modal
var btn7 = document.getElementById("myBtn7");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal7.style.display = "block";
}

// When the user clicks on <span> (x), close the modal7
span.onclick = function() {
  modal7.style.display = "none";
}

// When the user clicks anywhere outside of the modal7, close it
window.onclick = function(event) {
  if (event.target == modal7) {
    modal7.style.display = "none";
  }
}
</script>
<script>
// Get the modal
var modal8 = document.getElementById("myModal8");

// Get the button that opens the modal
var btn8 = document.getElementById("myBtn8");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal8.style.display = "block";
}

// When the user clicks on <span> (x), close the modal8
span.onclick = function() {
  modal8.style.display = "none";
}

// When the user clicks anywhere outside of the modal8, close it
window.onclick = function(event) {
  if (event.target == modal8) {
    modal8.style.display = "none";
  }
}
</script>
<script>
// Get the modal
var modal9 = document.getElementById("myModal9");

// Get the button that opens the modal
var btn9 = document.getElementById("myBtn9");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal9.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal9.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal9) {
    modal9.style.display = "none";
  }
}
</script-->












 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>









</body>
</html>
























