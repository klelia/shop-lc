<?php
include __DIR__ . '/../settings.php';


abstract class Model
{
    public function __construct()
    {
    }

    public static function readAll($conn, $table)
    {
        $sql = "SELECT * FROM $table";
        $result = $conn->query($sql);
        return $result;

    }

    public static function readOne($conn, $id, $table, $class)
    {
        $sql = "SELECT * FROM `$table` WHERE `id` = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('i', $id);
        $stmt->execute();

        $result = $stmt->get_result();
        $num_rows = $result->num_rows;
        if ($num_rows > 0) {
            $result = $result->fetch_object($class);
        }
        return $result;
    }

    public static function create($conn)
    {
    }


    public static function update($conn, $id)
    {
    }

    public static function delete($conn, $id)
    {
    }
}