<?php
include_once('database_connection.php');

if ($_SESSION['authEblog'] == 'Yes') {
    $postid = $_GET['id'];

    $sql = "delete from articles where id=$postid";

    if (mysqli_query($con, $sql)) {
        echo "<script>alert('Post deleted successfully')</script>";
        header("Location: home.php");
      } else {
        echo "<script>alert('Error deleting record: ' . mysqli_error($conn))</scirpt>";
      }
}
?>