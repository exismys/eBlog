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
            echo "<h3>$heading</h3>";
                    
            echo "<div class='info'><i>Posted by Ritesh on $date</i></div>";

            echo "<div class='body' style='margin-top:24px'>$content</div>";
        }
    } else {
        echo "0 results";
    }
    ?>
</div>