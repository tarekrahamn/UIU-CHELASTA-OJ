<?php 
require('config.php');

// SAVE IMAGE SCRIPT
    // include("config.php");
    // $_FILES -- $HTTP_POST_FILES [deprecated] — HTTP File Upload variables
    if (isset($_FILES['images'])) {
        savePostWithImage($dbh);
    }

    function savePostWithImage($dbh)
    {
        $errors = array();

        $file_name = $_FILES['images']["name"];
        $file_size = $_FILES['images']["size"];
        $file_tmp_name = $_FILES['images']["tmp_name"];

        // echo $file_name . $file_size . $file_tmp_name;
        // die();

        // explode — Split a string by a string
        // end — Set the internal pointer of an array to its last element
        // strtolower — Make a string lowercase
        $file_parts = explode('.', $file_name);
        // $file_ext = strtolower(end($file_parts));
        $file_ext = strtolower(end($file_parts));


        $extensions = array("jpeg", "jpg", "png");
        if (in_array($file_ext, $extensions) === false) {
            $errors[] = ["This extension file is not allowed, use png, jpg or jpeg"];
        }
        if ($file_size > 2097152) {
            $errors[] = ["This file is too large, file must be less than 2 mb"];
        }

        if (empty($errors) == true) {
            // move_uploaded_file — Moves an uploaded file to a new location
            move_uploaded_file($file_tmp_name, "uploads/" . $file_name);
        } else {
            print_r($errors);
            die();
        }

        $title = htmlspecialchars($_POST['title']);
        $description = htmlspecialchars($_POST['description']);


        $sql = "INSERT INTO post(title, description, image_src) VALUES (?, ?, ?)";
        $stmt = $dbh->prepare($sql);
        $stmt->bindParam(1, $title);
        $stmt->bindParam(2, $description);
        $stmt->bindParam(3, $file_name);
        if($stmt->execute()){
            header("Location: index.php");
            // header("Location: " . $_SERVER['PHP_SELF']);

        }
    }




?>