<?php
require __DIR__. '/AC__connect_db.php';

//取得api request
$search = $_GET['search'];

//搜尋解析
$search = $pdo->quote("%$search%");
//搜尋規則
$ac_sql = "SELECT * FROM `ac_pbook` WHERE (`AC_title` LIKE $search OR `AC_name` LIKE $search)";

//PDO
$stmt = $pdo->prepare($ac_sql);
$stmt->execute();
$row = $stmt->fetchAll();

//回傳
echo json_encode($row);