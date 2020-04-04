<html lang="sk">
    <head>
        <?php include('includes/head.php'); ?>
    </head>
    <body>
        <?php
            error_reporting(0);
            $pass = $_POST['pass'];
            if($pass == "fortnite") {
                include("post.php");
            }
            else {
                if(isset($_POST)) { ?>

                        <div class="loginForm">
                                <form action="login.php" method="POST">
                                <span>Heslo:</span>
                                <input class="pass" type="password" name="pass">
                                <br>
                                <input class="btn" type="submit" name="submit" value="OK">
                            </form>
                        </div>

                <?php }
            }
            ?>
    </body>
</html>

