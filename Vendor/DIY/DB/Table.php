<?php

namespace DIY\DB;

abstract class Table
{
    protected $db;
    protected $table;

    public function __construct(\PDO $db)
    {
        $this->db = $db;
    }

    public function fetchAll()
    {
        $query = "Select * from {$this->table}";
        return $this->db->query($query);
    }

    public function findByID($id)
    {
        $stmt = $this->db->prepare("Select * from {$this->table} where id=:id");
        $stmt->bindParam(":id", $id);
        $stmt->execute();

        $res = $stmt->fetch();
        return $res;
    }

    public function deleteByID($id)
    {
        $stmt = $this->db->prepare("Delete from {$this->table} where id=:id");
        $stmt->bindParam(":id", $id);
        return $stmt->execute();
    }
}