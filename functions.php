<?php
// koneksi php dan mysql

$server = "localhost";
$host = "root";
$pass = ""; 
$db = "db_web_programming";

// driver
$conn = mysqli_connect($server, $host, $pass, $db);

// fungsi get tabel

function getAll($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = []; 
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}