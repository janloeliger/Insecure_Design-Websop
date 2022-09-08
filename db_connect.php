<?php
Class Database
{
    private $user ;
    private $host;
    private $pass ;
    private $db;

    public function __construct()
    {
        $this->user = "root";
        $this->host = "localhost";
        $this->pass = "";
        $this->db = "db_blog";
    }
    public function connect()
    {
        $link = mysqli($this->user, $this->host, $this->pass, $this->db);
        return $link;
    }
}
?>