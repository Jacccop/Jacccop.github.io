<!DOCTYPE html>
<html lang="sk">

    <head>
        <title>Alpha Shard</title>
        <?php include('includes/head.php'); ?>  
    </head>

    <body>
        <?php include('includes/nav.php'); ?>
        <?php include('includes/socialSites.php'); ?>  
        <?php
        error_reporting(0);
        include_once("db.php");
        session_start();
        $id = $_GET['id'];

        $result = ("SELECT * FROM posts WHERE id='$id'");
        $res = mysqli_query($db, $result);
        require_once("nbbc/nbbc.php");
        $bbcode = new BBCode;

        while($row = mysqli_fetch_assoc($res)){ 
            $title = $row['title'];
            $content = $row['content'];
            $content = $bbcode ->Parse($content);
            $date = $row['date'];
            $image = $row['image'];
            $article = "";
            $article .= 
                "<div class=\"singlePage\">
                    <img src=\"articleImg/$image\" class=\"singleImg\">
                    <div class=\"singleText\">
                        <h2 class=\"\">
                                <h1 class=\"singleHeader\">$title</h1>
                        </h2>
                        <p class=\"singleDate\">$date</p>
                        <p class=\"\">$content</p>
                    </div>
                </div>";         
            echo $article;
        }  
        ?>
        <?php include('includes/footer.php'); ?> 
    </body>




