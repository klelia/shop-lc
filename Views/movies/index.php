<?php
include_once __DIR__ . '/../../Models/Movie.php';
include __DIR__ . '/../header.php';

$result = Model::readAll($conn, 'movies');



echo "<ul>";
if ($result && $result->num_rows > 0) {
    //var_dump($result);
    while ($row = $result->fetch_assoc()) {
        //var_dump($row);
        echo "<li>" . $row["title"] . "</li>";
    }
}
echo "</ul>";
$conn->close();