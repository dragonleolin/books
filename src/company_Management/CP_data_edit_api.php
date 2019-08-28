<?php
// require __DIR__. '/__admin_required.php';
require __DIR__ . '/__connect_db.php';

$result = [
    'success' => false,
    'code' => 400,
    'info' => '輸入錯誤',
    'post' => $_POST,
];
if (empty($_POST['cp_name']) or empty($_POST['sid'])) {
    echo json_encode($result, JSON_UNESCAPED_UNICODE);
    exit;
}
$sql = "UPDATE `cp_data_list` SET 
    `cp_name` = ?,
    `cp_contact_p` = ?,
    `cp_phone` = ?,
    `cp_email` = ?,
    `cp_address` = ?,
    `cp_tax_id` = ?,
    `cp_stock` = ?,
    `cp_account` = ?,
    `cp_password` = ?,
    `cp_logo` = ?
    WHERE `sid` = ? ";
$stmt = $pdo->prepare($sql);
$stmt->execute([
    $_POST['cp_name'],
    $_POST['cp_contact_p'],
    $_POST['cp_phone'],
    $_POST['cp_email'],
    $_POST['cp_address'],
    $_POST['cp_tax_id'],
    $_POST['cp_stock'],
    $_POST['cp_account'],
    $_POST['cp_password'],
    $_POST['cp_logo'],
    $_POST['sid'],
]);
// echo $stmt->rowCount();         //上傳幾筆

if ($stmt->rowCount() == 1) {
    $result['success'] = true;
    $result['code'] = 200;
    $result['info'] = '修改成功';
} else {
    $result['success'] = false;
    $result['code'] = 400;
    $result['info'] = '修改失敗';
}

echo json_encode($result, JSON_UNESCAPED_UNICODE);