<html>
<body>
<h1>Adminpanel</h1>
<form action="adminpanel.php" method="get">
    Name to remove: <input type="text" name="user_to_remove"><br>
    <input type="submit">
</form>
<?php
require "db_connect.php";
if(isset($_GET['user_to_remove'])) {
    // Create connection
    $connector = new Database();
    $conn = $connector->connect();
    $conn->query("DELETE FROM users WHERE username = '" .$_GET['user_to_remove']. "'");
    echo 'user was removed';
}
?>
</body>
</html>