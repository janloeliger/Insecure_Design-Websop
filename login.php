<html>
<body>
<h1>Einloggen um das Adminpanel zu verwenden</h1>
<form action="login.php" method="get">
    Username: <input type="text" name="name"><br>
    Passwort: <input type="password" name="pwd"><br>
    <input type="submit">
</form>
<?php
    require "db_connect.php";
    if(isset($_GET['name'])) {
        // Create connection
        $connector = new Database();
        $conn = $connector->connect();

        // get results
        $result=mysqli_query($conn, "SELECT id FROM users where username=" .$_GET['name']. " AND password=" .$_GET['pwd']);
        if (!$result) {
            echo "Falscher Nutzername oder Passwort";
        } else {
            header('Location: '.URL.'adminpanel.php');
            exit();
        }
    }
?>
</body>
</html> 