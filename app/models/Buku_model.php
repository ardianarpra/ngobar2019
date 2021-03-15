<?php
class Buku_model
{
    private $db;
    private $table = "tbl_buku";
    public function __construct()
    {
        $this->db = new Database;
    }
    public function getAll()
    {
        $query = "SELECT * FROM " . $this->table;
        $this->db->query($query);
        return $this->db->findAll();
    }
    public function get($id)
    {
        $query = "SELECT * FROM " . $this->table . ' WHERE id=:id';
        $this->db->query($query);
        $this->db->bind('id', $id);
        return $this->db->findOne();
    }
    public function hapusData($id)
    {
        $query = "DELETE FROM " . $this->table . ' WHERE id=:id';
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }
}
