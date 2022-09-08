<html>
<body>
<h1>Adminpanel</h1>
<form action="login.php" method="get">
    Name to remove: <input type="text" name="user_to_remove"><br>
    <input type="submit">
</form>
<?php
if(isset($_GET['user_to_remove'])) {
    // Create connection
    $connector = new Database();
    $conn = $connector->connect();
    mysqli_query($conn, " DELETE FROM users WHERE name=" .$_GET['user_to_remove']);
    echo 'user was removed';
}
?>
</body>
</html>