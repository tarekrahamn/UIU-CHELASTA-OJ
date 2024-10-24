<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Post</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
    <style>
        * {
            padding: 0;
            margin: 0;

        }

        .wrapper {
            width: 100%;
            height: 100%;
            background-image: url(bg.jpg);
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <div class="ui pointing menu">
            <div class="ui container">
                <a class="active item">
                    Home
                </a>
                <a class="item">
                    Messages
                </a>
                <a class="item">
                    Friends
                </a>
                <div class="right menu">
                    <div class="item">
                        <div class="ui transparent icon input">
                            <input type="text" placeholder="Search...">
                            <i class="search link icon"></i>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <br>
        <div class="ui container">
            <form class="ui mini form" action="add-post.php" method="POST" enctype="multipart/form-data">
                <h1 class="ui header olive" ><strong>File upload</strong></h1>
                <div class="ui field">
                    <div class="ui mini input">
                        <input type="text" name="title" placeholder="Title" />
                    </div>
                </div>
                <div class="ui field">
                    <div class="ui mini input">
                        <textarea name="description" id="" cols="30" rows="3" placeholder="Description"></textarea>
                    </div>
                </div>

                <div class="ui field">
                    <div class="ui mini input">
                        <input type="file" name="images" id="images" required="required" multiple="multiple" />
                    </div>
                </div>




                <div class="ui field">
                    <button class="ui blue mini button " type="submit" name="submit">Upload Posts</button>
                </div>

            </form>



            <br>
            <br>
            <br>

        </div>
        <div class="ui container">
            <div class="ui">
                <h1 class="ui header olive">
                    Uploaded images
                </h1>
                <br>
                <?php
                // SHOWING DATA TO USERS 
                require('config.php');
                $sql = "SELECT * FROM blog_table";
                $dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
                $stmt = $dbh->prepare($sql);
                $stmt->execute();
                $result = $stmt->fetchAll();
                // print_r($result);
                // echo count($result);
                // echo $result['title'];
                ?>
                <div class="ui six stackable cards">
                    <?php
                    // https://www.php.net/manual/en/pdostatement.fetchall.php
                    // array_shift — Shift an element off the beginning of array
                    while ($row = array_shift($result)) {
                    ?>
                        <div class="ui card">
                            <img src="uploads/<?php echo $row['image_src']; ?>"  alt="" style="width: 200px; height:100px; object-fit:cover; " class="ui t image">
                            
                            <div class="content">
                                <a class="header"><?php echo $row['title']; ?></a>
                                <div class="description">
                                    <?php echo substr($row['description'], 0, 30); ?>
                                </div>
                            </div>
                            <div class="extra content">
                                <a href="delete-post.php?id=<?php echo $row['id']; ?>" class="ui button red">Delete</a>
                            </div>
                        </div>
                    <?php                }                ?>

                </div>


            </div>

        </div>
    </div>



</body>

</html>