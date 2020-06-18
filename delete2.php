<?php
include 'conn.php';
 $id = $_GET['chapter'];

 $qry = "DELETE FROM `toc` WHERE chapter = $chapter";

 mysqli_query($con,$qry);

 header('location:toc.php');
 ?> 