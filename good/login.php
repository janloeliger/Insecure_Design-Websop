<?php
    session_start();
?>
<html>
<body>
<h1>Einloggen um das Adminpanel zu verwenden</h1>
<form action="login.php" method="post">
    Username: <input type="text" name="name"><br>
    Passwort: <input type="password" name="pwd"><br>
    <input type="submit">
</form>
<?php
    require "db_connect.php";
    $_SESSION["loged_in"] = 0;
    if(isset($_POST['name'])) {
        // Create connection
        $conn = Database::connect();
        $q = $conn->query("SELECT id FROM users WHERE username = '" .$_POST['name']. "' AND password = '" .$_POST['pwd']. "'");
        // Connect
        if($q->num_rows === 0) {
            echo "Falscher Nutzername oder Passwort";
        } else {
            $_SESSION["loged_in"] = 2;
            header('Location: adminpanel.php');
            die();
        }
    }
?>
</body>
</html> 