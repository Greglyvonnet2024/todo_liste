<?php

namespace Model\Repository;

use Model\Database;

abstract class BaseRepository
{
    protected $db;
    protected $connection;

    public function __construct()
    {
        $this->db = new Database;
        $this->connection = $this->db->dbConnect();
    }

    public function findAll($tableName)
    {
        $sql = "SELECT * FROM $tableName";
        $query = $this->connection->query($sql);
        $query->setFetchMode(\PDO::FETCH_CLASS,"Model\Entity\Todo_liste");
        $result = $query->fetchAll();
        return $result;
    }
}
