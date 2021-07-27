<?php
$name = $this->session->userdata('name');
$id = $this->session->userdata('id');
$type = $this->session->userdata('type');
$email = $this->session->userdata('email');
$image=$this->session->userdata('image');
$loggin = $this->session->userdata('logged_in');

$idb = $this->input->get('id');


//url validation
if ($type == 'newuser' ||  $loggin != true) {
  if ($id != $idb) {
    redirect('Login/login');
  }
}
// else if($type == 'admin'){
//     redirect('Admin/admin');
//   }

?>
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
            <a class="nav-link active" aria-current="page" href="/rahultask/form.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/codeigniter/Logout/logout">logout</a>
          </li>
        </ul>
        <form class="d-grid">
          <a class="nav-link active font-weight-bold text-info display-7" aria-current="page"  href="">Hello  <img  src="<?php echo base_url().'upload/'.$image; ?>"class="rounded-circle"  width="50" height="40"/><?php echo $name ?></a></a>

        </form>
      </div>
    </div>
  </nav>


  <?php
  foreach ($data as $row) {
  ?>

    <div class="container my-3 ">

      <h2> Update :</h2>
      <form action="" method='post' enctype="multipart/form-data">
        <div class="form-group my-2  col-md-6 ">
          <label for="name">Name:</label>
          <input type="name" class="form-control" value="<?php echo $row->name; ?>" placeholder=" Please Enter Your name" name="name" Required>
        </div>
        <div class="form-group  my-2  col-md-6">
          <label for="number">phone_number:</label>
          <input type="number" class="form-control" value="<?php echo $row->number; ?>" placeholder="Please Enter Your Number" name="number" Required>
        </div>
        <div class="form-group  my-2  col-md-6">
          <label for="file">profile:</label><img style="height:30px; width:30px;" src="<?php echo base_url().'upload/'.$row->image; ?>">
          <input type="file" class="form-control"  placeholder="upload your profile" name="image">
         
        </div>


        <div class="form-group  my-2  col-md-6">
          <label for="gender">Gender:</label>
          <div class="form-check  col-md-6">
            <input class="form-check-input" type="radio" value="male" name="gender" id="inlineRadio1" <?php echo ($row->gender == 'male' ? 'checked="checked"' : ''); ?>>
            <label class="form-check-label" for="inlineRadio1" Required>
              Male
            </label>
          </div>
          <div class="form-check  col-md-6">
            <input class="form-check-input" type="radio" value="female" name="gender" id="inlineRadio1" <?php echo ($row->gender == 'female' ? 'checked="checked"' : ''); ?>>
            <label class="form-check-label" for="inlineRadio2" Required>
              Female
            </label>
          </div>
        </div>
        <div class="form-group form-check ">
        </div>
        <button type="submit" class="btn btn-primary"  value="update" name="update">Update</button>
        <?php if ($type == 'newuser') {  ?>
          <input type="button" onclick="location.href='User/user'" class="btn btn-danger" value="Cancle" />
        <?php   } else {  ?>
          <input type="button" onclick="location.href='Admin/admin'" class="btn btn-danger" value="Cancle" />
        <?php   } ?>


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

  <?php } ?>

</body>

</html>