<?php
define("DB_SERVERNAME", "localhost");
define("DB_USERNAME", "root");
define("DB_PASSWORD", "admincle");
define("DB_NAME", "university_db");

// Connect
$conn = new mysqli(DB_SERVERNAME, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if ($conn && $conn->connect_error) {
    echo "Connection failed: " . $conn->connect_error;
}

$corso = "Corso di Laurea in Economia";
$sql = "SELECT `students`.* FROM `students`JOIN `degrees` ON `students`.`degree_id` = `degrees`.`id` WHERE `degrees`.`name` = $corso";

$result = $conn->query($sql);

echo "<h1>Studenti corso di laurea economia</h1> <ul>";

if ($result && $result->num_rows > 0) {
    //var_dump($result);
    while ($row = $result->fetch_assoc()) {
        //var_dump($row);
        echo "<li>" . $row["name"] . " " . $row["surname"] . "</li>";
    }
}
echo "</ul>";
$conn->close();


// prepare and bind
// $stmt = $conn->prepare("INSERT INTO my_guests (firstname, lastname, email) VALUES (?, ?, ?)");
// $stmt->bind_param("sss", $firstname, $lastname, $email);

// set parameters and execute
// $firstname = "John";
// $lastname = "Doe";
// $email = "john@example.com";
// $stmt->execute();

// get result
// $result = $stmt->get_result();