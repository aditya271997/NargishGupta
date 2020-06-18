<?php
error_reporting(0);
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
	<title>NGP/display</title>
   <link rel="icon" type="image/icon" href="images/t2.png" />
	<link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<!--script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script-->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

<section id="nav-bar">

<nav class="navbar navbar-expand-lg  " style="background-color: lightgrey;">
 <a class="navbar-brand" href="#">
    <!--img  src="images/t2.png"width="45" height="45" class="d-inline-block align-top t2" alt=""-->
    <h1 style=""><b>nargishgupta<span>.com</span></b></h1>
  </a>
  <!--button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
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
  </div-->
</nav>
	
</section>

<div class="container-fluid">
  <div class="col-lg-12"><br><br>
  	<h1 class="text-center text-danger"> Displaying Table</h1>
  	<table class=" table table-striped table-hover table-bordered ">
  		<tr class="bg-dark text-white text-center">
  			<th> Id</th>
  			<th> Full Name</th>
  			<th> Email</th>
  			<th> Query</th>
  			<th> Delete</th>
  		</tr>
<?php
   include 'conn.php';
	
	$qry = "select*from contact";
 
     $query= mysqli_query($con,$qry);
     while($res= mysqli_fetch_array($query))
     {


 
?>
  		<tr class="text-center">
  			<td> <?php echo $res['id'];  ?></td>
            <td> <?php echo $res['fullname']; ?></td>
            <td> <?php echo $res['email']; ?></td>
            <td> <?php echo $res['query']; ?></td>
            <td><button class="btn-danger btn"> <a href="delete.php?id=<?php echo $res['id'];?>" class="text-white"> delete</a></button></td>
         
  			
  		</tr>

<?php
}
?>
</table>
  </div>	

</div>


</body>
</html>