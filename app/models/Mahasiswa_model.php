<?php
class Mahasiswa_model
{
    private $tabel = "tbl_mahasiswa";
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAll()
    {
        $this->db->query('SELECT * FROM ' . $this->tabel);
        return $this->db->findAll();
    }
    public function get($id)
    {
        $this->db->query('SELECT * FROM ' . $this->tabel . ' where id=:id');
        $this->db->bind('id', $id);
        return $this->db->findOne();
    }
    public function tambahData($data)
    {
        $query = 'INSERT INTO ' . $this->tabel . ' VALUES("",:nama,:alamat,:jurusan,"");';
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('jurusan', $data['jurusan']);
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function hapusData($id)
    {
        $query = "DELETE FROM " . $this->tabel . ' WHERE id=:id';
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function editData($data)
    {
        $query = "UPDATE tbl_mahasiswa
        SET nama = :nama, alamat= :alamat, jurusan = :jurusan
        WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('jurusan', $data['jurusan']);
        $this->db->bind('id', $data['id']);
        $this->db->execute();
        return $this->db->rowCount();
    }
}
