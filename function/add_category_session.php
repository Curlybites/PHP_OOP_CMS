<?php

require_once '../function/category_add.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $category_name = isset($_POST['category_name']) ? htmlspecialchars(trim($_POST['category_name'])) : '';

    $database = new Connection();
    $addCategory = new Category($database);
    $result =  $addCategory->addCategory($category_name);
    header("refresh: 1");
} else {
    $result = '';
}
