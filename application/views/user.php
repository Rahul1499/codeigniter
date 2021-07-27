<?php
$email = $this->session->userdata('email');
$name = $this->session->userdata('name');
$id = $this->session->userdata('id');
$type = $this->session->userdata('type');
$image=$this->session->userdata('image');
$loggin=$this->session->userdata('logged_in');
// print_r($id);die();
//url validation
if($loggin !=true || $type!='newuser')
redirect('Login/login');
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>User page</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Mobilestyx User Page</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/codeigniter/Logout/logout">Logout</a>
          </li>
        </ul>
        <form class="d-grid">
          <a class="nav-link active font-weight-bold text-info display-7" aria-current="page" href="">Hello <img  src="<?php echo base_url().'upload/'.$image; ?>"class="rounded-circle"  width="50" height="40"/><?php echo $name ?></a></a>
        </form>
      </div>
  </nav>
  <div class="container my-3">
    <h2>welcome to user page</h2>
    <?php if ($this->session->flashdata('msg')) : ?>
      <div class="alert alert-success text-center fw-bold col-md-12 mx-auto alert-dismissible fade show">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        <?php echo $this->session->flashdata('msg'); ?>
      </div>
    <?php endif; ?>
    <div class="contanier ">
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone_number</th>
            <th scope="col">Gender</th>
            <th scope="col">Type</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
          //print_r($email);die();
          $i = 0;
          foreach ($data as $row) {
            $i++;
            if (($row->id == $id)) {
              echo "<tr>";
              echo "<td>" . $i . "</td>";
              echo "<td>" . $row->name . "</td>";
              echo "<td>" . $row->email . "</td>";
              echo "<td>" . $row->number . "</td>";
              echo "<td>" . $row->gender . "</td>";
              echo "<td>" . $row->type . "</td>";
              echo " <td><a class='btn btn-success' href='/codeigniter/User/prefilled?id=" . $row->id . "'>Edit</a></td>";
              echo "</tr>";
            } else {
              echo "<tr>";
              echo "<td>" . $i . "</td>";
              echo "<td>" . $row->name . "</td>";
              echo "<td>" . $row->email . "</td>";
              echo "<td>" . $row->number . "</td>";
              echo "<td>" . $row->gender . "</td>";
              echo "<td>" . $row->type . "</td>";
              echo "</tr>";
            }
          };
          ?>
      </table>
      </tbody>
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