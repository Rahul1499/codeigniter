<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>Registration Form</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Mobilestyx Form</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">

          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/codeigniter/login/login">log in</a>
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>

  <div class="container my-3   col-md-6">
    <h2>Mobilestyx Form</h2>
    <div class="contanier ">
         
    <form method="POST" action="<?= base_url() ?>signup/savedata">
        <div class="form-group my-2  ">
          <label for="name">Name:<?php echo form_error('name');?></label>
          <input type="text" class="form-control"  name="name" placeholder=" Please Enter Your name">
        </div>
        <div class="form-group  my-2  ">
          <label for="email">Email:<?php echo form_error('email');?> </label>
          <input type="email" class="form-control" name="email" placeholder="Please Enter Your Email" >
        </div>
        <div class="form-group  my-2">
          <label for="number">phone_number: <?php echo form_error('number');?></label>
          <input type="number" class="form-control" name="number" placeholder="Please Enter Your Number" >
        </div>
        <div class="form-group  my-2 ">
          <label for="pass">Password:<?php echo form_error('password');?></label>
          <input type="password" class="form-control"  name="password" placeholder="Please Enter Your password" >
        </div>
        <div class="contanier my-2 ">
        <input class="form-check-input" type="checkbox" value="male" name="gender">
        <label class="form-check-label" for="defaultCheck1"> Male </label>
      </div>
        <input class="form-check-input" type="checkbox" value="female" name="gender" >
        <label class="form-check-label" for="defaultCheck2">Female </label>
      </div>
        <div class="contanier my-2 ">
          <select class="form-select"  name="type"  aria-label="Default select example">
            <option selected>Open this select menu</option>
            <option value="newuser">New User </option>
            <option value="admin">Admin</option>
          </select>
        </div>
        <div class="contanier my-4">
          <button type="submit"  class="btn btn-primary" name="submit">SignUp</button>
        </div>
      </form>

    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>
</html>
