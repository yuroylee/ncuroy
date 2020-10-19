
<?php
    //資料庫連結

    $host = 'localhost';
    //改成你登入phpmyadmin帳號
    $user = 'root';
    //改成你登入phpmyadmin密碼
    $passwd = '';
    //資料庫名稱
    $database = 'jzsyuan';
//實例化mysqli(資料庫路徑, 登入帳號, 登入密碼, 資料庫)
    $connect = new mysqli($host, $user, $passwd, $database);
    $sql = "SELECT * FROM `news` ORDER BY `Date` DESC"; //修改成你要的 SQL 語法
    $connect->query("SET NAMES 'utf8'");
  //呼叫query方法(SQL語法)
    $status = $connect->query( $sql );
    $numRows =$status ->num_rows ;
    $per = 3; //每頁顯示項目數量
    $pages = ceil($numRows/$per); //取得不小於值的下一個整數
    if (!isset($_GET["page"])){ //假如$_GET["page"]未設置
        $page=1; //則在此設定起始頁數
    } else {
        $page = intval($_GET["page"]); //確認頁數只能夠是數值資料
    }
    $start = ($page-1)*$per; //每一頁開始的資料序號

    $result = $connect->query($sql.' LIMIT '.$start.', '.$per) or die("Error");
?>
