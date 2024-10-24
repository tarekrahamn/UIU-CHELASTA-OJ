<?php
$id = $_GET["id"];
if($id){
include("../config.php");
$sqlDelete = "DELETE FROM posts WHERE id = $id";
if(mysqli_query($con, $sqlDelete)){
    session_start();
    $_SESSION["delete"] = "Post deleted successfully";
    header("Location:index.php");
}else{
    die("Something is not write. Data is not deleted");
}
}else{
    echo "Post not found";
}
?>