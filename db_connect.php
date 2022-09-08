<?php
Class Database
{
    public static function connect()
    {
        $dsn = "mysql:dbname={insecure_shop_db};port={3306};ost:{localhost}";
        return new PDO($dsn, "root", "");
    }
}
?>