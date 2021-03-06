<DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>login</title>
        <link type="text/css" rel="stylesheet" href="css/bootstrap.css"/>
        <link type="text/css" rel="stylesheet" href="estilo_index.css"/>
        <script src="js/jquery-3.1.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    </head>
    <body>
    <?php
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            include("back-end/util_functions.php");

            // Check connection
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

            if ( isset( $_POST ) ){
                $username = $_POST["username"];
                $password = $_POST["password"];

                attemptLogin($conn, $username, $password);
            }
        }
    ?>
        <main>
            <div class="container-fluid">
                <div class="row">
                    <div class="zona col-10 col-sm-10 col-md-6 col-lg-4 col-xl-4 offset-1 offset-sm-1 offset-md-6 offset-lg-8 offset-xl-8">
                        <img class="img-responsive ebec" src="img/EBEC_Local_short_name-1black.png">
                        <form action="index.php" method="POST">
                            
                            <input id="name" placeholder="Username" type="text" name="username" >
                            
                            <input id="pass" placeholder="Password" type="password" name="password">

                            <input id="submit" type="submit" value="Log in">

                        </form>
                    </div>
                </div>
            </div>
        </main>

    </body>
</html>
</DOCTYPE>