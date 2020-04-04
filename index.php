<?php 
    session_start();
    include_once("db.php");
?>
<!DOCTYPE html>
<html lang="sk">

    <head>
        <title>Alpha Shard</title>
        <?php include('includes/head.php'); ?> 
    </head>

    <body onload="headerTransition()">
    <?php include('includes/nav.php'); ?> 
        <div id="headerImg" class="headerImg">
            <div id="headerImgContent" class="headerImgContent content">
                <img src="images/logo.png" class="logo">
                <p class="headerImgContentText">Survival s vlastnými pluginmi</p>
                <h2 class="playerCount">Pripoj sa k <span class="pocet sip" data-ip="alphashard.eu" data-port="25565">0</span> hráčom na</h2>
                <h2 class="Ip">alphashard.eu</h2>
                <a class="mainBtn">HLASUJ ZA SERVER</a>
                <a class="mainBtn">O NÁS</a>
            </div>
            <div class="slide show" style="background-image: url('images/headerImgFade.jpg');"></div>
            <div class="slide" style="background-image: url('images/headerImgFade2.jpg');"></div>
            <div class="slide" style="background-image: url('images/headerImgFade3.jpg');"></div>
        </div>
        <?php include('includes/socialSites.php'); ?> 
        
        <div class="newsFeed">
            <?php 
                //Tu začína PHP mágia (nezodpovedám za humus kód xd)
                error_reporting(0);
                require_once("nbbc/nbbc.php");
                $bbcode = new BBCode;
                
                $sql = "SELECT * FROM posts ORDER BY id DESC";
                $res = mysqli_query($db, $sql);
                $posts = "";

                function readMoreHelper($article,$id, $chars = 280) {
                    if (strlen($article) > 280){
                        $article = substr($article,0,$chars);  
                        $article = substr($article,0,strrpos($article,' '));  
                        $article = $article."<a class=\"readMore\" href=\page.php?id=$id>Čítaj viac...</a>";  
                    }
                    return $article;  
                } 

                if(mysqli_num_rows($res) > 0) {
                    while ($row = mysqli_fetch_assoc($res)) {
                        $id = $row['id'];
                        $title = $row['title'];
                        $content = $row['content'];
                        $date = $row['date'];
                        $image = $row['image'];
                        
                        $output = $bbcode ->Parse($content);
                        $output = readMoreHelper($output,$id);

                        $posts .= 
                        "<div class=\"news\">
                            <a href=\page.php?id=$id><img src=\"articleImg/$image\" class=\"articleImg\"></a>
                            <div class=\"textContent\">
                                <h2 class=\"newsHeader\">
                                    <a href=\page.php?id=$id>$title</a>
                                </h2>
                                <p class=\"date\">$date</p>
                                <p class=\"newsText\">$output</p>
                            </div>
                        </div>";
                    }
                    echo $posts;
                } 
            ?>
        </div>
        
        <script>
            $(function () {
                cycleBackgrounds(6000);
            });

            // This is to fetch the player count
            $(document).ready(()=>{
                const ip = $(".sip").attr("data-ip");
                const port = $(".sip").attr("data-port");

            $.get(`https://mcapi.us/server/status?ip=${ip}&port=${port}`, (result)=>{
                if (result.online) {
                $(".sip").html(result.players.now);
                } else {
                $(".playercount").html("Server isn't online!");
                }
            });

            setInterval(()=>{
                $.get(`https://mcapi.us/server/status?ip=${ip}&port=${port}`, (result)=>{
                if (result.online) {
                    $(".sip").html(result.players.now);
                } else {
                    $(".playercount").html("Server isn't online!");
                }
                });
            }, 60000);
            });
        </script>
        <?php include('includes/footer.php'); ?> 
        <?php include('includes/lfBuilders.php'); ?> 
    </body>
</html>