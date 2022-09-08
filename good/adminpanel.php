<?php
    session_start();
?>
<html>
    <head>
        <?php
            if(($_SESSION['loged_in']) !== 2){
                header ("Location: login.php");
                exit; // stop further executing, very important
            }
        ?>
    </head>
    <body>
    <h1>Adminpanel</h1>
    <form action="adminpanel.php" method="get">
        Name to remove: <input type="text" name="user_to_remove"><br>
        <input type="submit">
    </form>
    <h2>Loged out</h2>
    <form action="adminpanel.php" method="post">
        <input type="submit" value="logout" name="logout" />
    </form>
    <?php
        require "db_connect.php";
        // remove user
        if(isset($_GET['user_to_remove'])) {
            // Create connection
            $connector = new Database();
            $conn = $connector->connect();
            $user_exist = $conn->query("SELECT id FROM users WHERE username = '" .$_GET['user_to_remove']. "'");
            if($user_exist->num_rows === 0) {
                echo "Dieser Nutzer existiert nicht";
            } else {
                $conn->query("DELETE FROM users WHERE username = '" .$_GET['user_to_remove']. "'");
                echo 'Nutzer wurde entfernt';
            }
        }
        // logout
        if(isset($_POST['logout'])) {
            session_destroy();
            header('Location: login.php');
            die();

        }
    ?>
    </body>
</html>