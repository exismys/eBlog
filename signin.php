<?php 
include_once('database_connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //getting the post values
  $email=$_POST['email'];
  $password=$_POST['password'];

  $sql = "select email, password from admins where email = '$email'";

  $result = mysqli_query($con, $sql);

  if (mysqli_num_rows($result) > 0) {
      while($row = mysqli_fetch_assoc($result)) {
          if ($row['email'] == $email && $row['password'] == $password) {
              $_SESSION['authEblog'] = 'Yes';
              header("Location: add_article.php");
          } else {
              echo "<script>alert('Wrong email or password')</script>";
              break;
          }
      }
  }
}
include_once('header.php');
 ?>

<div class="row">
<div class="col-md-6 col-md-offset-3">
        <h3>Admin Panel Sign In</h3>
        <form action="#" method="post">
            <div class="form-group">
                <label for="email">Your E-mail</label>
                <input class="form-control" type="text" name="email" id="email">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input class="form-control" type="password" name="password" id="password">
            </div>
            <button type="submit" class="btn btn-primary">Sign In</button>
        </form>
</div>
</div>
</body>
</html>