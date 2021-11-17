<?php
include 'connection.php';

if (isset($_POST['submit']))
 {
      $name          =$_POST['name'];
      $subject       =$_POST['subject'];
      $qualification =$_POST['qualification'];
      $contact       =$_POST['contact'];

    $query="INSERT INTO `faculty`(`name`, `subject`, `qualification`, `contact`) VALUES ('$name','$subject','$qualification',' $contact')";

    $run=mysqli_query($conn,$query);
      if($run)
      {
        echo "<script>alert('Add....');</script>";
        header('refresh:1,url=dashboard.php');

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
<h1 class="text-uppercase bg-primary text-white p-2 mb-0" align="center">Vijay Convent Hr. Sec. School Satna Madhya Pradesh</h1>

<div class="container">
  <h1 class="" align="center">Add New Teacher/Faculty</h1>
  <form action="#" method="post">
    <label for="fname">Name</label>
    <input type="text" id="fname" name="name" placeholder="Enter Teacher name..">

    <label for="lname">Subject</label>
    <input type="text" id="lname" name="subject" placeholder="Teacher's Subjet..">

    <label for="lname">Qualification</label>
    <input type="text" id="lname" name="qualification" placeholder="Enter qualification detail's..">

    <label for="lname">Contact Detail's</label>
    <input type="text" id="lname" name="contact" placeholder="Enter Teacher' contact detail's...">


    <input type="submit" value="Submit" name="submit">
  </form>
</div>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>