<?php
require_once __DIR__ . '/vendor/autoload.php';
use Src\config\Database;

$db = new Database();
$db->connect();
