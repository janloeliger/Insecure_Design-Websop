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
        $query = "SELECT id FROM users where username=" .$_GET['name']. " AND password=" .$_GET['pwd'];
        $q = $conn->query($query);
        $q->setFetchMode(\PDO::FETCH_ASSOC);
        // Connect
        while ($spot = $q->fetch(\PDO::FETCH_ASSOC)) {
            $spot[] = new Spot($spot);
        }
        if(count($spot) == 0) {
            echo "Falscher Nutzername oder Passwort";
        } else {
            header('Location: '.URL.'adminpanel.php');
            exit();
        }
    }
?>
</body>
</html> 