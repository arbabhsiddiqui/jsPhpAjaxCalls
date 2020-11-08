<?php

class Config
{

    private const DBHOST = 'localhost';
    private const DBUSER = 'root';
    private const DBPASS = '';
    private const DBNAME = 'curdApp';


    private $dsn = 'mysql:host=' . self::DBHOST . ';dbname=' . self::DBNAME;

    protected $conn = null;


    // calling constructor

    public function __construct()
    {
        try {
            $this->conn = new PDO($this->dsn, self::DBUSER, self::DBPASS);
            $this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            // echo "success";
        } catch (PDOException $th) {
            die('Error' . $th->getMessage());
        }
    }
}
