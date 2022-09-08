<?php
Class Database
{
    public static function connect()
    {
        return mysqli_connect("localhost", "root", "", "insecure_shop_db");
    }
}
?>