<?php
    include 'header.php';
?> 

       <form action="search.php" method="POST">
           <input type="text" name="search" placeholder ="Search...">
           <button tpye="submit" name ="submit-search" >Search</button>
       </form>


       <h1>Front page</h1>
       <h2>all article</h2>

       <div class="article-countainer">
            <?php
               $sql = "SELECT * FROM dbsearch";
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