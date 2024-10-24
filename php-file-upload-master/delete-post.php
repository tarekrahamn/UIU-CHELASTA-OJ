<?php
// require is identical to include except upon failure it will also produce a fatal E_COMPILE_ERROR level error. In other words, it will halt the script whereas include only emits a warning (E_WARNING) which allows the script to continue.
include("config.php");
$id = $_GET['id'];

// DELETE FROM `post` WHERE 0
$sql = "DELETE FROM blog_table WHERE id=?";
$stmt = $dbh->prepare($sql);
$stmt->bindParam(1, $id);


deleteImage($dbh, $id);

if ($stmt->execute()) {
    header("Location: ../index.php");
}
function deleteImage($dbh, $id)
{
    $delete_sql = "SELECT * FROM blog_table WHERE id=?";
    $dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $delete_stmt = $dbh->prepare($delete_sql);
    $delete_stmt->bindParam(1, $id);
    $delete_stmt->execute();
    $result = $delete_stmt->fetch();
    // print_r($result['image_src']);
    // die();
    unlink('uploads/' . $result['image_src']);
    // die();
}
