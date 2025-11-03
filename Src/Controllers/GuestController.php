<?php
namespace Src\Controllers;
use Src\Config\Database;
use PDO;

class GuestController {
    private PDO $db;

    public function __construct(array $cfg) {
        $this->db = Database::conn($cfg);
    }

    public function all() {
        $stmt = $this->db->query("SELECT * FROM guests ORDER BY id DESC");
        return $stmt->fetchAll();
    }

    public function find($id) {
        $stmt = $this->db->prepare("SELECT * FROM guests WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch();
    }

    public function create($name, $message) {
        $stmt = $this->db->prepare("INSERT INTO guests (name, message) VALUES (?, ?)");
        return $stmt->execute([$name, $message]);
    }

    public function update($id, $name, $message) {
        $stmt = $this->db->prepare("UPDATE guests SET name = ?, message = ? WHERE id = ?");
        return $stmt->execute([$name, $message, $id]);
    }

    public function delete($id) {
        $stmt = $this->db->prepare("DELETE FROM guests WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
