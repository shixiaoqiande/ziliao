<?php
$id =  $_POST['id'];
include 'define.php';
$link = conn();
if (mysqli_connect_errno($link)) {
    echo '数据库连接失败' . mysqli_connect_error($link);
}
$activesql = "SELECT * FROM active_list where id={$id}";
$activebool = mysqli_query($link, $activesql);
if (!$activebool) {
    echo '操作失败';
    exit();
}
$row = mysqli_fetch_assoc($activebool);
?>
<b><?php echo ($row["title"]);?></b>
<div><?php echo ($row["content"]);?></div>

