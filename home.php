<?php 
include_once('database_connection.php');
include_once('header.php');
?>

<section class="row posts">
    <div class="col-md-6 col-md-offset-3">
        <header><h3>Articles</h3></header>
        
        <div class="col-md-8 post" style="margin-bottom:24px">

        <?php
        $sql = "SELECT * FROM articles";
        $result = mysqli_query($con, $sql);

        if (mysqli_num_rows($result) > 0) {
        // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                $postid = $row['id'];
                $heading = $row['heading'];
                $date = $row['creationdate'];
                echo "<h4><a href='view_post.php?id=$postid'>$heading</a></h4><div class='info'>
                <i>Posted by Ritesh on $date</i></div>";
            }
        } else {
            echo "0 results";
        }
        ?>
    </div>
</section> 
</body>
</html>