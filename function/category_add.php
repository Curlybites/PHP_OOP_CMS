<?php

require_once '../connections/database.php';

class Category
{
    private $db;
    private $conn;

    public $msg;
    public function __construct(Connection $db)
    {
        $this->db = $db;
    }

    public function addCategory($categoryName)
    {

        $conn = $this->db->dbconnect();
        $stmt = $conn->prepare("INSERT INTO category (category_name) VALUES (?)");
        $stmt->bind_param("s", $categoryName);

        if ($stmt->execute()) {
            return '<div class="alert alert-primary" role="alert">Category Name Added Successfully! </div>';
        } else {
            return '<div class="alert alert-danger" role="alert">Category Name Failed to Add! </div>';
            // echo "Error registering categoryname: " . $stmt->error;
        }
        $stmt->close();
        $this->db->dbconnect();
    }


    public function getCategory()
    {
        $this->conn = $this->db->dbconnect();
        $stmt = "SELECT * FROM category";

        // $stmt = $conn->prepare('SELECT * FROM category');
        $result = $this->conn->query($stmt);

        return $result;
    }
}
