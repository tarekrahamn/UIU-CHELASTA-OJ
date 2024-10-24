<?php
if (isset($_POST["create"])) {
    include("../config.php");
    $title = mysqli_real_escape_string($con, $_POST["title"]);
    $summary = mysqli_real_escape_string($con, $_POST["summary"]);
    $content = mysqli_real_escape_string($con, $_POST["content"]);
    $content = mysqli_real_escape_string($con, $_POST["username"]);

    $date = mysqli_real_escape_string($con, $_POST["date"]);
    $sqlInsert = "INSERT INTO posts(date,title, summary, content) VALUES ('$date', '$title', '$summary','$content' )";
    if(mysqli_query($con, $sqlInsert)){
        session_start();
        $_SESSION["create"] = "Post added successfully";
        header("Location:index.php");
    }else{
        die("Data is not inserted!");
    }
}
?>

<?php
if (isset($_POST["update"])) {
    include("../config.php");
    $title = mysqli_real_escape_string($con, $_POST["title"]);
    $summary = mysqli_real_escape_string($con, $_POST["summary"]);
    $content = mysqli_real_escape_string($con, $_POST["content"]);
    $content = mysqli_real_escape_string($con, $_POST["username"]);
    $date = mysqli_real_escape_string($con, $_POST["date"]);
    $id = mysqli_real_escape_string($con, $_POST["id"]);
    $sqlUpdate = "UPDATE posts SET title = '$title', summary = '$summary', content = '$content', date = '$date' WHERE id = $id";
    if(mysqli_query($con, $sqlUpdate)){
        session_start();
        $_SESSION["update"] = "Post udpated successfully";
        header("Location:index.php");
    }else{
        die("Data is not updated!");
    }
}
?>