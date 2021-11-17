<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Faculty</title>
    <link rel="icon" href="img11.jpg" type="image/icon type">


    <style type="text/css">
      #slider{
        height: 700px;
      }
      @media screen and (max-width:600px){
      h1{
        font-size: 20px;
      }
      .btn{
      	width: 98%;
      }
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
        <a class="nav-link" href="#">Faculty</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="course.html">Course</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">Gallery</a>
      </li>
       <li class="nav-item active">
        <a class="nav-link" href="#">Achivement</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="about.html">About Us</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="contact.php">Contact Us</a>
      </li>
       <li class="nav-item active">
        <a class="nav-link" href="admin.php">Admin</a>
      </li>
    </ul>
  </div>
</nav>
<h1 class="text-uppercase bg-primary text-white p-2 mb-0" align="center">Vijay Convent Hr. Sec. School Satna Madhya Pradesh</h1>


  <div class="container">
    <h2 class="p-3" align="center">Faculty Detail's</h2>
      <table class="table table-responsive-sm">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Name</th>
          <th scope="col">Subject</th>
          <th scope="col">Qualification</th>
          <th scope="col">Contact Detail's</th>
          <th scope="col">Reg.Date</th>
        </tr>
      </thead>
    <?php
    include'connection.php';

    $query="SELECT * FROM faculty";
    $facultyrun=mysqli_query($conn,$query);
      
      while ($facultyres=mysqli_fetch_array($facultyrun)) {
      ?>
    <tbody>
        <tr>
          <th><?php echo $facultyres['name'];?></th>
          <td><?php echo $facultyres['subject'];?></td>
          <td><?php echo $facultyres['qualification'];?></td>
          <td><?php echo $facultyres['contact'];?></td>
          <td><?php echo $facultyres['date'];?></td>
        </tr>
      <?php 
      }?>
      </tbody>
    </table>
</div>
<marquee class="bg-dark text-white p-2">This Website Managed by Vijay Convent Hr. Sec. School Satna Madhya Pradesh </marquee>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>