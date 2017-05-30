<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>チェック画面</title>
        <link rel="stylesheet" href="test2.css">
</head>
<body>
    <form action="test2csvwriter.php" method="post">
<?php
    session_start();
    $_SESSION['sei'] = $_POST['sei']; //連想配列
    $_SESSION['mei'] = $_POST['mei'];
    $_SESSION['gender'] = $_POST['gender'];
    $_SESSION['todohuken'] = $_POST['todohuken'];
    $_SESSION['cityname'] = $_POST['cityname'];
    $_SESSION['sityoson'] = $_POST['sityoson'];
    $_SESSION['address'] = $_POST['address'];
    $_SESSION['phone'] = $_POST['phone'];
    $_SESSION['phone2'] = $_POST['phone2'];
    $_SESSION['phone3'] = $_POST['phone3'];
    $_SESSION['mail'] = $_POST['mail'];
    $_SESSION['domain'] = $_POST['domain'];
    /*$_SESSION['where1'] = $_POST['where1'];
    $_SESSION['where2'] = $_POST['where2'];*/
    $_SESSION['category'] = $_POST['category'];
    $_SESSION['question'] = $_POST['question'];

    $sei=$_SESSION['sei'];
    $mei=$_SESSION['mei'];
    $gender=$_SESSION['gender'];
    $todohuken=$_SESSION['todohuken'];
    $cityname=$_SESSION['cityname'];
    $sityoson=$_SESSION['sityoson'];
    $address=$_SESSION['address'];
    $phone=$_SESSION['phone'];
    $phone2=$_SESSION['phone2'];
    $phone3=$_SESSION['phone3'];
    $mail=$_SESSION['mail'];
    $domain=$_SESSION['domain'];
    /*$where1=$_SESSION['where1'];
    $where2=$_SESSION['where2'];*/
    $category=$_SESSION['category'];
    $question=$_SESSION['question'];

?>

<ul class="gyou">
    <li class="check">この内容で送信します</li>
</ul>
<ul class="gyou">
    <li class="retu1">姓</li>
    <li class="retu2"><?= $sei ?>
    </li>
</ul>
<ul class="gyou">
    <li class="retu1">名</li>

    <li class="retu2"><?= $mei ?>
    </li>
</ul>
<ul class="gyou">
    <li class="retu1">性別</li>
    <li class="retu2"><?= $gender ?>
    </li>
</ul>
<ul class="gyou">
    <li class="retu1">住所</li>
    <li class="retu2"><?= $todohuken.$cityname.$sityoson ?>
    </li>
</ul>
<ul class="gyou">
    <li class="retu1">
    <li class="retu2"><?= $address ?>
    </li>
</ul>


<ul class="gyou">
    <li class="retu1">電話番号</li>
    <li class="retu2"><?= $phone."-".$phone2."-".$phone3 ?>
    </li>
</ul>
<ul class="gyou">
    <li class="retu1">メールアドレス</li>
    <li class="retu2"><?= $mail."@".$domain ?>
    </li>
</ul>

<ul class="gyou">
    <li class="retu1">質問カテゴリ</li>
    <li class="retu2"><?= $category ?>
    </li>
</ul>
<ul class="gyou">
    <li class="retu1">質問内容</li>
    <li class="retu2"><?= $question ?>
    </li>
</ul>


    <p>
        <input type="submit" value="送信">
    <p>

    <p>
        <button type="button" onclick="history.back()">戻る</button>
    </p>

    <p>
        <a href="test2main.html">未入力状態で戻る</a>
    </p>
</form>
</body>
</html>
