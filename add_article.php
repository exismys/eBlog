<?php 
include_once('database_connection.php');

if ($_SESSION['authEblog'] == 'Yes') {
    // pass
} else {
    header("Location: signin.php");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $heading=$_POST['heading'];
    $content=$_POST['content'];
   
    $query=mysqli_query($con, "insert into articles(heading, content, authorid) value('$heading', '$content', 1)");

    if ($query) {
        echo "<script>alert('You have successfully inserted the data');</script>";
    } else {
        echo "<script>alert('Something Went Wrong. Please try again');</script>";
    }
}

include_once('header.php'); ?>
<section class="row">
    <div class="col-md-6 col-md-offset-3">
        <header><h3>Add a new article</h3></header>
        <form action="" method="post">
            <div class="form-group">
                <input class="text" name="heading" placeholder="Your Article Heading">
            </div>
            <div class="form-group">
                <textarea class="form-control" name="content" rows="5" placeholder="Your Article"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Add Article</button>
        </form>
    </div>
</section>
</body>
</html>