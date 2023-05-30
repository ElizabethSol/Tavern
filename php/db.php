<?php
$dbhost = "localhost";
$dbname = "lizi180420";
$username = "lizi180420";
$password = "HW^UYHNh8YXBETNF";

$db = new PDO("mysql:host=$dbhost; dbname=$dbname", $username, $password);

function get_menu_all() {
    global $db;
    $menu = $db->query("SELECT * FROM menu");
    return $menu;
}

function get_review_all() {
    global $db;
    $review = $db->query("SELECT * FROM review");
    return $review;
}

function get_galery_all() {
    global $db;
    $galery = $db->query("SELECT * FROM galery");
    return $galery;
}
?>