<?php
include_once('config.php');
if (isset($_POST['submit'])) {
 
  $id = $_POST['id'];
  $name = $_POST['name'];
  $contact = $_POST['contact'];
  $email = $_POST['email'];
  $address = $_POST['address'];
 

 
  $sql = "update contacts set  name='$name', contact=$contact, email='$email', address='$address' where id =$id " ;
  $result = mysqli_query($conn, $sql);
  if ($result > 0) {
    echo "<script>alert('Record Updated Successfully')</script>";
    echo "<script>window.location.href='contact_list.php'</script>";
  } else {
    echo "<script>alert('Record not Updated')</script>";
  }
}
if (isset($_GET['action']) && isset($_GET['id'])) {
  $action = $_GET['action'];
  $id = $_GET['id'];
  if ($action == 'update') {
    $sql = "select * from contacts where id = $id";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
      $row = mysqli_fetch_assoc($result);
    } else {
      echo "<script>alert('Record not found')</script>";
      echo "<script>window.location.href='contact_list.php'</script>";
    }
  } else if ($action == 'delete') {
    $sql = "delete from contacts where id = $id";
    $result = mysqli_query($conn, $sql);
    if ($result > 0) {
      echo "<script>alert('Record deleted successfully')</script>";
      echo "<script>window.location.href='contact_list.php'</script>";
    } else {
      echo "<script>alert('Record not deleted')</script>";
    }
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
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <title>Contact Edit</title>
</head>

<body>
  <div class="container my-3">
    <h1>Contact Edit</h1>
    <form method="post">

      <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" value="<?php echo $row['name']; ?>">
      </div>
      <div class="form-group">
        <label for="contact">Contact</label>
        <input type="text" class="form-control" id="contact" name="contact" placeholder="Enter contact number" value="<?php echo $row['contact']; ?>">
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="text" class="form-control" id="email" name="email" placeholder="Enter Email" value="<?php echo $row['email']; ?>">
      </div>
      <div class="form-group">
        <label for="address">Address</label>
        <input type="text" class="form-control" id="address" name="address" placeholder="Enter address" value="<?php echo $row['address']; ?>">
      </div>

      <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
</body>

</html>