<?php
include_once __DIR__ . '/../../Models/Book.php';
include __DIR__ . '/../header.php';

$result = Model::readAll($conn, 'books');



echo "<ul>";
if ($result && $result->num_rows > 0) {
    //var_dump($result);
    while ($row = $result->fetch_assoc()) {
        //var_dump($row);
        echo "<li><a href='show.php?id=" . $row["id"] . "'>" . $row["id"] . "</a> - " . $row["title"] . "</li>";
    }
}
echo "</ul>";
$conn->close();