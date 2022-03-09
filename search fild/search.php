<?php
    include 'header.php';
?> 

<h1>Result Page</h1>

<div class="article-countainer">
<?php
    if (isset($_POST['submit-search'])) {
        $search = mysqli_real_escape_string($conn , $_POST['search']);
        $sql = "SELECT * FROM dbsearch WHERE a_titel LIKE '%$search%' OR a_text LIKE '%$search%' 
                OR a_author LIKE '%$search%' OR a_date LIKE '%$search%'";
        $result = mysqli_query($conn, $sql);
        $queryResult = mysqli_num_rows($result);
        
        echo "There are ". $queryResult."results!";
        if ($queryResult > 0 ) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<a href='article.php?title=".$row['a_titel']."&date=".$row['a_date']."'><div class='article-box'>
                <h3>".$row['a_titel']."</h3>
                <p>".$row['a_text']."</p>
                <p>".$row['a_date']."</p>
                <p>".$row['a_author']."</p>
            </div></a>";
            }
        } else {
            echo "There are no results matching your search !";
        }

    }
?>
</div>    