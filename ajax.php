<?php
include('config.php');

$sql = "SELECT title, author, genre from mustread ORDER BY RAND() LIMIT 1";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)){

        echo 'Book: '  . $row["title"] . "<br />" . 'Author: ' . $row["author"] . "<br />" . 'Genre: ' . $row["genre"];
    }

} else {
    echo "0 results";
};

