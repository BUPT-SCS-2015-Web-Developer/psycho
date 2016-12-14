<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
    session_start();
    date_default_timezone_set('Asia/Shanghai');
    include ('assets/API/db_config.php');

    $db = new mysqli($db_host,$db_user,$db_password,$db_database);
    if (!$db)
    {
        exit('Could not connect: ' . mysql_error());
    }
    $db->query("set names 'utf8'");
    $sql_query = "SELECT * FROM psycho WHERE haveRead is null";
    $result = $db->query($sql_query);
    $s = "SELECT * FROM psycho WHERE haveRead is not null";
    $result1 = $db->query($s);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>心理咨询预约 - 北邮易班</title>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="assets/css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="assets/css/index.css" type="text/css" rel="stylesheet"/>
</head>
<body>
  <nav class="light-blue lighten-1" role="navigation">
    <div class="nav-wrapper container hide-on-med-and-down">
        <a href="#" class="brand-logo"></a>
<!--            <img class="logo circle" src="">心理咨询预约</a>-->
      <ul class="right">
        <li><a href="#">个人中心</a></li>
      </ul>
    </div>
    <div class="nav-wrapper hide-on-large-only">
        <a href="#" class="brand-logo">
    <!--        <img class="logo circle" src="">-->心理咨询预约</a>
      <ul class="left">
        <li><a href="#"><img id="user" class="circle" src=""></a></li>
      </ul>
    </div>
  </nav>
 <br/>
    <div class="row container">
    <div class="col s12">
    <ul class="tabs">
      <li class="tab col s6"><a class="active" href="#test1">新预约请求列表</a></li>
      <li class="tab col s6"><a href="#test2">所有预约记录</a></li>
    </ul>
    </div>
    <div id="test1" class="col s12">
    <ul class="collapsible" data-collapsible="expandable">
     <li>
       <div class="collapsible-header teal lighten-5">Monday</div>
       <div class="collapsible-body">
            <table class="hoverable">
                <thead>
                    <tr>
                        <th data-field="id">姓名</th>
                        <th data-field="name">学号</th>
                        <th data-field="price">联系方式</th>
                    </tr>
                </thead>
                <tbody class="hoverable">
                    <?php
                        foreach ($result as $row) {
                            echo "<tr class=\"hoverable\">
                                <td>".$row['fName']."</td>
                                <td>".$row['fSID']."</td>
                                <td>".$row['fPhone']."</td>
        						<td><a class=\"waves-effect waves-teal btn-flat\" href=\"information.php?id=".$row['id']."\">信息详情</a></td>
        						<td><a class=\"waves-effect waves-teal btn-flat modal-trigger\" href=\"#model1\">成功预约</a>
        						  <div id=\"model1\" class=\"modal\">
                                    <div class=\"modal-content\">
                                       <h4>请确认！</h4>
                                       <p>确认成功预约后将删除此条记录哦</p>
                                    </div>
                                    <div class=\"modal-footer\">
                                      <a href=\"#!\" class=\"modal-action modal-close waves-effect waves-green btn-flat\">我知道啦</a>
                                    </div>
                                  </div>
        						</td>
                            </tr>";
                        }
                    ?>
     	    </tbody>
            </table>
	   </div>
     </li>
    </ul>
	</div>

    <div id="test2" class="col s12">
            <table class="hoverable">
                <thead>
                    <tr>
                        <th data-field="id">姓名</th>
                        <th data-field="name">学号</th>
                        <th data-field="price">联系方式</th>
                        <th>操作</th>
                    </tr>
                </thead>
                <tbody class="hoverable">
                    <?php
                        foreach ($result1 as $row) {
                            echo "<tr class=\"hoverable\">
                                <td>".$row['fName']."</td>
                                <td>".$row['fSID']."</td>
                                <td>".$row['fPhone']."</td>
                                <td><a class=\"waves-effect waves-teal btn-flat\" href=\"information.php?id=".$row['id']."\">信息详情</a></td>
                            </tr>";
                        }
                    ?>
     	   </tbody>
             </table>

	</div>
  </div>
  <div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
    <a class="btn-floating btn-large red"  href="getexcel.php">
      导出表格
    </a>
  </div>
  <footer class="page-footer orange">
    <div class="footer-copyright">
      <div class="container">
      Copyright© 北邮易班学生发展中心 <a class="orange-text text-lighten-3" href="http://buptyiban.org/">BUPTYiban</a>
      </div>
    </div>
  </footer>
  <!--  Scripts-->
  <script src="https://apps.bdimg.com/libs/jquery/2.1.1/jquery.min.js"></script>
  <script>
  $(document).ready(function(){
    $('ul.tabs').tabs();
  });</script>
  <script type="text/javascript">
    function change(str)//成功预约按钮
    {
    var xmlhttp;
    if (window.XMLHttpRequest)
      {// code for IE7+, Firefox, Chrome, Opera, Safari
      xmlhttp=new XMLHttpRequest();
      }
    else
      {// code for IE6, IE5
      xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
      }
    xmlhttp.onreadystatechange=function()
      {
      if (xmlhttp.readyState==4 && xmlhttp.status==200)
        {
        document.getElementById(" ").innerHTML=xmlhttp.responseText;//新预约请求的更新
    	document.getElementById(" ").innerHTML=xmlhttp.responseText;//已完成预约的更新
        }
      }
    xmlhttp.open("GET","?id="+str,true);
    xmlhttp.send();
    }


    function deleted(str)//删除记录按钮
    {
    var xmlhttp;
    if (window.XMLHttpRequest)
      {// code for IE7+, Firefox, Chrome, Opera, Safari
      xmlhttp=new XMLHttpRequest();
      }
    else
      {// code for IE6, IE5
      xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
      }
    xmlhttp.onreadystatechange=function()
      {
      if (xmlhttp.readyState==4 && xmlhttp.status==200)
        {
        document.getElementById(" ").innerHTML=xmlhttp.responseText;//已完成预约的更新
        }
      }
    xmlhttp.open("GET","?id="+str,true);
    xmlhttp.send();
    }
  </script>
  <script src="assets/js/materialize.min.js"></script>
  <script type="text/javascript" src="assets/js/getexcel.js"></script>
</body>
