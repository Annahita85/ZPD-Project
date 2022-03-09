<?php
    include 'header.php';
?> 



       <h1>Article page</h1>
 

       <div class="article-countainer">
            <?php
               $title = mysqli_real_escape_string($conn , $_GET['title']);
               $date = mysqli_real_escape_string($conn , $_GET['date']);

               $sql = "SELECT * FROM dbsearch WHERE a_titel='$title' AND a_date='$date'";
               $result = mysqli_query($conn, $sql);
               $queryResults =  mysqli_num_rows($result);

               if ($queryResults > 0) {
                   while ($row = mysqli_fetch_assoc($result)){
                        echo "<div class='article-box'>
                                    <h3>".$row['a_titel']."</h3>
                                    <p>".$row['a_text']."</p>
                                    <p>".$row['a_date']."</p>
                                    <p>".$row['a_author']."</p>
                                </div>";
                   }
                }
            ?>
       </div>

    </body>
</html>