<?php
include 'connection.php';

if (isset($_POST['submit']))
 {
      $name   =$_POST['name'];
      $class  =$_POST['class'];
      $mobile =$_POST['mobile'];
      $subject=$_POST['subject'];

    $query="INSERT INTO `userdata`(`name`, `class`, `mobile`, `subject`) VALUES ('$name','$class','$mobile','$subject')";

    $run=mysqli_query($conn,$query);
      if($run)
      {
        echo "<script>confirm('Send....');</script>";
       }else{
          echo "Error";
           }
  }

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Contact</title>
    <link rel="icon" href="img11.jpg" type="image/icon type">


    <style type="text/css">
      #slider{
        height: 700px;
      }
      @media screen and (max-width:600px){
       #slider{
        height: 400px;
      }
      h1{
        font-size: 20px;
      }
      }
      body {font-family: Arial, Helvetica, sans-serif;}
        * {box-sizing: border-box;}

        input[type=text], textarea {
          width: 100%;
          padding: 12px;
          border: 1px solid #ccc;
          border-radius: 4px;
          box-sizing: border-box;
          margin-top: 6px;
          margin-bottom: 16px;
          resize: vertical;
        }

        input[type=submit] {
          background-color: #04AA6D;
          color: white;
          padding: 12px 20px;
          border: none;
          border-radius: 4px;
          cursor: pointer;
        }

        input[type=submit]:hover {
          background-color: #45a049;
        }

        .container {
          border-radius: 5px;
          background-color: #f2f2f2;
          padding: 20px;
        }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
  <a class="navbar-brand" href="index.html">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="faculty.php">Faculty</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="course.html">Course</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="gallery.html">Gallery</a>
      </li>
       <li class="nav-item active">
        <a class="nav-link" href="achivement.html">Achivement</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="about.html">About Us</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">Contact Us</a>
      </li>
       <li class="nav-item active">
        <a class="nav-link" href="admin.php">Admin</a>
      </li>
    </ul>
  </div>
</nav>
<h1 class="text-uppercase bg-primary text-white p-2 mb-0" align="center">Vijay Convent Hr. Sec. School Satna Madhya Pradesh</h1>

<div class="container">
  <h1 class="" align="center">Contact Form</h1>
  <form action="#" method="post">
    <label for="fname">Name</label>
    <input type="text" id="fname" name="name" placeholder="Your name..">

    <label for="lname">Class</label>
    <input type="text" id="lname" name="class" placeholder="Your class..">

    <label for="lname">Mobile</label>
    <input type="text" id="lname" name="mobile" placeholder="Enter mobile number..">

    

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit" name="submit">
  </form>
</div>



<marquee class="bg-dark text-white p-2">This Website Managed by Vijay Convent Hr. Sec. School Satna Madhya Pradesh </marquee>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>