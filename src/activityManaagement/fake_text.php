<?php
exit;
// ---------------------------------------------------
// 編號`AC_sid`
// 姓名`AC_name`
// 標題`AC_title`
// 活動類型`AC_type`
// 時間`AC_date`
// 地點`AC_eventArea`
// 聯絡電話`AC_mobile`
// 主辦單位`AC_organizer`
// 參加費用`AC_price`
// 建立時間`AC_created_at`
// ---------------------------------------------------
// INSERT INTO `ac_pbook` (`AC_sid`, `AC_name`, `AC_title`, `AC_type`, `AC_date`, `AC_eventArea`, `AC_mobile`, `AC_organizer`, `AC_price`, `AC_created_at`) 
// VALUES 
// (NULL, '肥宅小編', '肚子好餓', '新書發表', '2019-06-21', '台北市中山區', '0982116999', '肥宅書紡', '500','2019-08-26 00:00:00'),
// (NULL, '林小編', '歡慶夏日、感恩回饋', '新書發表', '2019-06-21', '台北市信義區', '0982116888', '林小編書房', '250','2019-08-27 00:00:00'),
// (NULL, '蔡阿文', '倉庫瘦身，迎戰盤點', '書評人座談會', '2019-06-22', '台北市文山區', '0982116888', '去去企業股份有限公司', '50', '2019-08-27 00:00:00'),
// (NULL, '魯克先生', '為愛與書尋找生命落腳處．珍本古籍公益拍賣會', '書評人座談', '2019-06-25', '台北市大安區', '0982116888', '魯克文青團', '100', '2019-08-27 00:00:00'),
// (NULL, '胖達小文', '胖達x品書【聯合倉庫特賣會】', '週年出清特賣', '2019-06-27', '台北市大同區', '0982116888', '胖達銀行', '120', '2019-08-27 00:00:00'),
// (NULL, '大賢者', '春風似友 珍本古籍捐書會 預辦', '慈善捐書', '2019-07-08', '台北市松山區', '0982116888', '魔法師自救會', '150', '2019-08-27 00:00:00'),
// (NULL, '史小姐', '跟史小姐一起來讀書', '品茶品書會', '2019-07-20', '高雄市', '0982116888', '品書官方', '500', '2019-08-27 00:00:00'),
// (NULL, '林小姐', '不給書就搗蛋！', '書評人座談會', '2019-08-01', '台北市萬華區', '0982116888', '品書官方', '250', '2019-08-27 00:00:00'),
// (NULL, '江老師', '林小姐新書分享｜江老師二手書', '好書特賣會', '2019-08-12', '彰化市', '0982116888', '東大日語系', '350', '2019-08-27 00:00:00'),
// (NULL, '春風先生', '二手惜物、為愛義賣 春風先生x品書二手物義賣', '二手書跳蚤會', '2019-08-22', '新北市中和區', '0982116888', '春風企業', '0', '2019-08-27 00:00:00'),
// (NULL, '春風先生', '春風跨海而來──半生書蠹酬知己座談會', '書評座談', '2019-08-26', '台中市', '0982116888', '春風企業', '10', '2019-08-26 00:00:00');

// ---------------------------------------------------

require __DIR__. '/AC__connect_db.php';

for($k=1; $k<100; $k++){
    $s = "INSERT INTO `ac_pbook`
            (`AC_name`, `AC_title`, `AC_type`, `AC_date`, `AC_eventArea`, `AC_mobile`, `AC_organizer`, `AC_price`, `AC_created_at`)
             VALUES
              ('假的實體活動{$k}', '123@gmail.com', '0982333666', '1990-10-10', '台北市', '2019-08-27 12:00:00') ";
//    echo $s;
//    break;
    $pdo->query($s);
}

?>