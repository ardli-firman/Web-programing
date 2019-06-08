<?php

namespace core\konek;

use \PDO;

class Koneksi extends PDO
{

    private $engine;
    private $host;
    private $database;
    private $user;
    private $pass;
    private $dns;

    public function __construct()
    {
        $this->engine = 'mysql';
        $this->host = 'localhost';
        $this->database = 'blog';
        $this->user = 'root';
        $this->pass = '';
        $this->dns = $this->engine . ':dbname=' . $this->database . ";host=" . $this->host;
        parent::__construct($this->dns, $this->user, $this->pass);
    }
}
