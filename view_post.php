<?php
include_once('database_connection.php');
include_once('header.php') 
?>

<div class="col-md-6 col-md-offset-3">
    <?php
    $postid = $_GET['id'];

    $sql = "SELECT * FROM articles where id = $postid";
    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) > 0) {
    // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            $heading = $row['heading'];
            $date = $row['creationdate'];
            $content = $row['content'];
            $authorid = $row['authorid'];

            $authorResult = mysqli_query($con, "Select * from admins where id = $authorid");
            if (mysqli_num_rows($authorResult) > 0) {
                while ($row2 = mysqli_fetch_assoc($authorResult)) {
                    $authorname = $row2['username'];
                }
            }
            echo "<h3>$heading</h3>";
                    
            echo "<div class='info'><i>Posted by $authorname on $date</i></div>";

            echo "<div class='body' style='margin-top:24px'>$content</div>";
        }
    } else {
        echo "0 results";
    }
    ?>
</div>