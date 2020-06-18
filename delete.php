<?php
include 'conn.php';
 $id = $_GET['id'];

 $qry = "DELETE FROM `contact` WHERE id = $id";

 mysqli_query($con,$qry);

 header('location:Display.php');
 ?> 