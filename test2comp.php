<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>完了画面</title>
    <link rel="stylesheet" href="test2.css">
</head>
<body>
    <div>
        <form action="test2main.html" method="post">
<?php
session_start();
$no = $_SESSION ['No'];

print "送信が完了しました。"."<br>"."お問い合わせ番号：";
print $no;
?>
        <p>
        <input type="submit" value="戻る">
        </p>
        </form>
    </div>
</body>
</html>
