<?php

namespace App\Models;

use App\Database;
use PDOException;

class News
{
    private $db = null;

    public function __construct()
    {
        $this->db = Database::connect();
    }

    public function getNews($page)
    {
        try
        {
            $stmt = $this->db->query('SELECT * FROM `news` ORDER BY date DESC LIMIT 4 OFFSET ' . ($page - 1) * 4);
            return $stmt->fetchAll();
        } catch (PDOException $e) {
            throw new Exception($e->getMessage());
        }
    }

    public function getNewsById($id)
    {
        try
        {
            $stmt = $this->db->prepare('SELECT * FROM `news` WHERE `id` = :id');
            $stmt->execute(['id' => $id]);
            return $stmt->fetch();
        } catch (PDOException $e) {
            throw new Exception($e->getMessage());
        }
    }

    public function getLastNews()
    {
        try
        {
            $stmt = $this->db->query('SELECT * FROM `news` ORDER BY date DESC LIMIT 1');
            return $stmt->fetch();
        } catch (PDOException $e) {
            throw new Exception($e->getMessage());
        }
    }

    public function getCountNews()
    {
        try
        {
            $stmt = $this->db->query('SELECT COUNT(*) FROM `news`');
            return $stmt->fetchColumn();
        } catch (PDOException $e) {
            throw new Exception($e->getMessage());
        }
    }
}