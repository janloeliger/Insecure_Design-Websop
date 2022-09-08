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
        $conn = Database::connect();
        $q = $conn->query("SELECT id FROM users WHERE username = '" .$_GET['name']. "' AND password = '" .$_GET['pwd']. "'");
        // Connect
        if($q->num_rows === 0) {
            echo "Falscher Nutzername oder Passwort";
        } else {
            header('Location: adminpanel.php');
            die();
        }
    }
?>
</body>
</html> 