<?php
    /****
    1.成功
    2.非法请求
    3.预约失败[数据库错误]
    4.未查询到该id对应信息
    5.其它
    */

    ini_set("display_errors", "On");
    error_reporting(E_ALL | E_STRICT);
    session_start();
    date_default_timezone_set('Asia/Shanghai');

    //include ('assets/API/header_api_session.php');
    //include ('assets/API/iapp.php');
    include ('assets/API/db_config.php');

    if(isset($_GET['id']))
    {
        $id = addslashes($_GET['id']);
    }
    elseif (isset($_POST['id'])) {
        $id = addslashes($_POST['id']);
    }
    else {
        echo "2";
        die;
    }

    $db = new mysqli($db_host,$db_user,$db_password,$db_database);
    if (!$db)
    {
        echo "3";
//        exit('Could not connect: ' . mysql_error());
    }
    $db->query("set names 'utf8'");

    $s="SELECT * FROM psycho WHERE id = '".$id."'";
    $result = $db->query($s);

    if($result->num_rows == 0)
    {
        echo "4";
        die;
    }
    $s = "UPDATE psycho SET haveRead = '1' WHERE id = '".$id."'";
    $result = $db->query($s);

    if(!$result)
    {
        echo "3";
        //echo $db->error;
        die;
    }
    else {
        echo "1";
    }
 ?>
