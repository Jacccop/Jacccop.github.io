<?php 
    session_start();
    include_once("db.php");
    $msg = "";
    if(isset($_POST['post'])) {
        
        $title = strip_tags($_POST['title']);
        $content = strip_tags($_POST['content']);

        $target = "articleImg/".basename($_FILES['image']['name']);
        $image = $_FILES['image']['name'];

        $title = mysqli_real_escape_string($db, $title);
        $content = mysqli_real_escape_string($db, $content);


        $date = date('d.m.Y H:i');

        $sql = "INSERT into posts (title, content, date, image) VALUES ('$title','$content','$date','$image')";
    
        if(move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
            $msg = "Image uploaded successfully";
        } else {
            $msg = "There was a problem uploading";
        }


        if($title == "" || $content == "") {
            echo "PLease complete your post!";
            return;
        }

        mysqli_query($db, $sql);

        header("Location: index.php");
    
    }
?>



<!DOCTYPE html>
<html lang="sk">

    <head>
        <title>Alpha Shard</title>
        <?php include('includes/head.php'); ?>  
    </head>

    <body>
        <div id="adminForm" class="adminForm">
            <form action="post.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="size" value="1000000">
                <br>
                <input class="titleInput" placeholder="Title" type="text" id="title" name="title"><br>
                <ul>
                    <li onclick="addBold(event)" style="font-weight: bold;" class="btn">B</li>
                    <li onclick="addItalic(event)" style="font-style: italic;" class="btn">I</li>
                    <li onclick="addUnderline(event)" style="text-decoration: underline;" class="btn">U</li>
                    <li onclick="addLineThrough(event)" style="text-decoration: line-through;" class="btn">S</li>
                    <li onclick="addColor(event)"  class="btn">C</li>
                    <li onclick="addUrl(event)"  class="btn">li</li>
                </ul>
                <textarea id="contentInput" class="contentInput" placeholder="Content" name="content"></textarea>
                <br>
                <input type="file" name="image" id="uploadedImg">
                <br>
                <input class="btn" value="Post" type="submit" id="text" name="post">
            </form> 
        </div>
    </body>
</html>