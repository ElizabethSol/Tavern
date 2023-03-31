<?php
$dbhost = "localhost";
$dbname = "menu";
$username = "root";
$password = "";

$db = new PDO("mysql:host=$dbhost; dbname=$dbname", $username, $password);

function get_menu_all() {
    global $db;
    $menu = $db->query("SELECT * FROM menu");
    return $menu;
}
?>