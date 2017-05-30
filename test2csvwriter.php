<?php
    session_start();

    //問い合わせ番号の生成
    $date = date("ymdHis");
    //値をセッションに保持
    $_SESSION['No'] = $date;

    //苗字と名前を結合
    $name = $_SESSION['sei'].$_SESSION['mei'];

    //住所を結合
    $jyusyo = $_SESSION['todohuken'].$_SESSION['cityname'].$_SESSION['sityoson'].
    $_SESSION['address'];
    $mailaddress = $_SESSION['mail']."@".$_SESSION['domain'];

    //セッションを配列に格納
    $datas[0] = $date;
    $datas[1] = $name;
    $datas[2] = $_SESSION['gender'];
    $datas[3] = $jyusyo;
    $datas[4] = $_SESSION['phone'];
    $datas[5] = $_SESSION['phone2'];
    $datas[6] = $_SESSION['phone3'];
    $datas[7] = $mailaddress;
    $datas[8] = $_SESSION['where1'];
    $datas[9] = $_SESSION['where2'];
    $datas[10] = $_SESSION['category'];
    $datas[11] = $_SESSION['question'];

    //各項目に「,」があるかどうかチェック
    for($i=0 ; $i < count($datas); $i++){ //datasの数だけ回す

        if(strpos($datas[$i],',') !== false){
            //あれば「&?!comma」に置き換える
            $datas[$i] = str_replace(',','&?!comma',$datas[$i]);
        }
        //無ければそのまま
    }


    //内容の改行を<br>に変更
    $datas[11] = str_replace("\r\n", '<br>', $datas[11]);

    //csvファイル名を変数に
    $file_path = "test.csv";

    //更新した際に重複して入力しないようにする処理
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        //csvファイルに追記処理
        $fp = fopen($file_path , 'a');
        if($fp){
            fputcsv($fp,$datas);
        }
        fclose($fp);
        //処理した後、conp.php(完了画面)に遷移
        header('Location:test2comp.php');
    }
?>
