<?php


// connect to database
$mysqli = new mysqli('localhost', 'root', '', 'crud') or die(mysqli_error($mysqli));

$id = 0;
$name = '';
$email = '';
$update = false;
//insert data
if (isset($_POST['save'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mysqli->query("INSERT INTO siswa (nama, email) VALUES('$name','$email')") or die($mysqli->error);
}

//delete data

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $mysqli->query("DELETE FROM siswa WHERE id=$id");
}

//Read Data
$result = $mysqli->query("select * from siswa") or die($mysqli->error);

//select data
if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $result = $mysqli->query("SELECT * FROM siswa WHERE id=$id");
    if (count($result) == 1) {
        $row = $result->fetch_array();
        $update = true;
        $name = $row['nama']; /// nama dari database
        $email = $row['email']; ///email dari database
    }
}

//update data
if (isset($_POST['update'])) {

    $id = $_POST['id']; /// id nama dari valuenya
    $name = $_POST['name']; /// name dari valuenya
    $email = $_POST['email']; /// email nama dari valuenya


    $mysqli->query("UPDATE siswa SET nama='$name', email='$email' WHERE id=$id");

    header('location: view.php');
}
