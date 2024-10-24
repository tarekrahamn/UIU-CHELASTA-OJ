<?php
session_start();
require_once('./db-connect.php');


// Require/Include DB Connection
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    extract($_POST);
    $sql = "INSERT INTO `post_list` (`title`, `author`, `content`) VALUES ('{$conn->real_escape_string($title)}','{$conn->real_escape_string($un)}', '{$conn->real_escape_string($content)}')";
    $save = $conn->query($sql);
    if ($save) {
        echo "<script> alert('Post has been inserted successfully.'); location.replace('index.php'); </script>";
    } else {
        echo "<script> alert('Post has failed to insert. Error: '.$conn->error); location.replace('index.php'); </script>";
    }
    echo "<script> location.replace('index.php'); </script>";
}
if (isset($_GET['post_id'])) {
    extract($_GET);
    $get = $conn->query("SELECT * FROM `like_list` where post_id = '{$post_id}' and session_name = '{$_SESSION['un']}'");
    if ($get->num_rows > 0) {
        $sql = "DELETE FROM `like_list` where post_id = '{$post_id}' and session_name = '{$_SESSION['un']}' ";
    } else {
        $sql = "INSERT INTO `like_list` set post_id = '{$post_id}', session_name = '{$_SESSION['un']}' ";
    }
    $process = $conn->query($sql);
    if ($process) {
        echo "<script> alert('Post Like has been updated.'); location.replace('index.php'); </script>";
    } else {
        echo "<script> alert('Post Like/Unlike has failed.'); location.replace('index.php'); </script>";
    }
}
if (isset($_GET['delete_post'])) {
    extract($_GET);
    $sql = "DELETE FROM `post_list` where id = '{$delete_post}'";
    $delete = $conn->query($sql);
    if ($delete) {
        echo "<script> alert('Post has been deleted successfully.'); location.replace('index.php'); </script>";
    } else {
        echo "<script> alert('Post has failed to delete. Error: '.$conn->error); location.replace('index.php'); </script>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Counting Likes</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js" integrity="sha512-6PM0qYu5KExuNcKt5bURAoT6KCThUmHRewN3zUFNaoI6Di7XJPTMoT6K0nsagZKk2OB4L7E3q1uQKHNHd4stIQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="./js/bootstrap.min.js"></script>

</head>

<style>
    html,
    body {
        height: 100%;
        width: 100%;
    }

    .card {
        background-color: #2c2c2c;
        border-radius: 10px;
        border: none;
        /* Remove border for a cleaner look */
        transition: transform 0.2s, box-shadow 0.2s;
    }

    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 30px rgba(0, 0, 0, 0.5);
    }

    .post-title {
        font-size: 1.75rem;
        font-weight: bold;
        color: white;
    }

    .post-author {
        font-size: 1rem;
        color: #f1faee;
    }

    .post-date {
        font-size: 0.9rem;
        color: #a8dadc;
    }

    .post-content {
        font-size: 1.1rem;
        color: #f1faee;
        line-height: 1.6;
        /* Improve readability */
    }

    .like-container {
        font-size: 0.9rem;
    }
    .like-count {
    color: #ffc107; /* Set to a yellow color for contrast, change as needed */
    font-weight: bold; /* Make the text bold */
    font-size: 1.1rem; /* Slightly increase the font size for better visibility */
}

</style>
<style>
    .back-button {
        position: absolute;
        top: 10px;
        right: 20px;
        background-color: #4CAF50;
        color: white;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        border-radius: 5px;
        cursor: pointer;
        border: none;
    }

    .back-button:hover {
        background-color: #45a049;
    }

    .attribution {
        font-size: 11px;
        text-align: center;
    }

    .attribution a {
        color: hsl(228, 45%, 44%);
    }
</style>

<body class="bg-gradient bg-dark bg-opacity-50">
    <script>
        start_loader()
    </script>
    <nav class="navbar navbar-expand-sm navbar-dark bg-gradient bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="../home.php">UIU CHELESTA OJ</a>

            <div>
                <div>
                    <a href="../home.php" class="back-button">Back</a>
                </div>
            </div>
        </div>
        </div>
    </nav>
    <main>
        <div class="container w-100 mt-3">
            <div class="d-flex w-100 align-items-center mb-3">
                <div class="col-auto flex-shrink-1 flex-grow-1">
                    <h3 class="text-center fw-bolder text-light">Posts</h3>
                </div>
                <div class="col-auto">
                    <button class="btn btn-primary btn-sm bg-gradient rounded-0" type="button" data-bs-toggle="modal" data-bs-target="#postFormModal"><i class="fa fa-plus"></i> Add Post</button>
                </div>
            </div>
            <?php
            $posts = $conn->query("SELECT *,COALESCE((SELECT COUNT(id) FROM like_list where post_id = post_list.id), 0) as `likes` FROM `post_list` order by unix_timestamp(date_created) desc");
            while ($row = $posts->fetch_assoc()):
                $is_liked = $conn->query("SELECT * FROM `like_list` where post_id = '{$row['id']}' and session_name = '{$_SESSION['un']}'")->num_rows;

            ?>
                <div class="card mb-3 post-card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="post-title card-title"><?= $row['title'] ?></h5>
                            <h6 class="post-author card-subtitle text-muted"><?= $row['author'] ?></h6>
                        </div>
                        <p class="post-date text-muted"><?= date("F d, Y h:i A", strtotime($row['date_created'])) ?></p>
                        <div class="post-content my-3">
                            <p><?= nl2br($row['content']) ?></p>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <button class="like-button btn btn-light me-3" onclick="location.href='index.php?post_id=<?= $row['id'] ?>'">
                                    <?php if ($is_liked > 0): ?>
                                        <i class="fa fa-thumbs-up text-primary"></i>
                                    <?php else: ?>
                                        <i class="far fa-thumbs-up"></i>
                                    <?php endif; ?>
                                </button>
                                <span class="like-count fw-bold"><?= $row['likes'] ?> Like<?= $row['likes'] > 1 ? "s" : "" ?></span>
                            </div>
                            <div>
                                <?php if ($_SESSION['un'] == $row['author']): ?>
                                    <button class="delete-button btn btn-link text-danger" onclick="if(confirm('Are you sure to delete this post?')) location.href='./?delete_post=<?= $row['id'] ?>'">
                                        <i class="fa fa-trash"></i> Delete
                                    </button>
                                <?php endif; ?>
                            </div>
                        </div>

                    </div>
                </div>

            <?php endwhile; ?>

        </div>
        <div class="modal fade" id="postFormModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="postFormModallabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="postFormModallabel">New Member Form</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="index.php" method="POST" id="new_post">
                            <input type="hidden" name="un" value="<?= $_SESSION['un'] ?>">
                            <div class="border-top border-bottom item py-2">
                                <div class="form-group mb-3">
                                    <label for="title" class="control-label">Title</label>
                                    <input type="text" class="form-control form-control-sm rounded-0" id="title" name="title" required="required">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="content" class="control-label">Content</label>
                                    <textarea rows="4" class="form-control form-control-sm rounded-0" id="content" name="content" required="required"></textarea>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary btn-sm rounded-0" form="new_post">Save Post</button>
                        <button type="button" class="btn btn-secondary btn-sm rounded-0" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>