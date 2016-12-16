<?php
ini_set("display_errors", "On");
error_reporting(E_ALL | E_STRICT);
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
      <li class="tab col s6"><a class="active" href="#test1">新预约请求</a></li>
      <li class="tab col s6"><a href="#test2">已成功预约</a></li>
    </ul>
    </div>
    <div id="test1" class="col s12">
            <table class="hoverable">
                <thead>
                    <tr>
                        <th data-field="id">姓名</th>
                        <th data-field="name">学号</th>
                        <th data-field="price">联系方式</th>
						<th data-field="time">预约时间</th>
                        <th data-field="ni_zhege_daodi_youshenmeyong">操作</th>
                    </tr>
                </thead>
                <tbody id="forchange1" class="hoverable">
                    <?php
                        foreach ($result as $row) {
                            echo "<tr class=\"hoverable\">
                                <td>".$row['fName']."</td>
                                <td>".$row['fSID']."</td>
                                <td>".$row['fPhone']."</td>
        						<td><a class=\"waves-effect waves-teal btn-flat\" href=\"information.php?id=".$row['id']."\">信息详情</a></td>
        						<td><a class=\"waves-effect waves-teal btn-flat modal-trigger\" onclick=\"change(".$row['id'].")\">成功预约</a>
        						</td>
                            </tr>";
                        }
                    ?>
     	    </tbody>
            </table>
	</div>

    <div id="test2" class="col s12">
            <table class="hoverable">
                <thead>
                    <tr>
                        <th data-field="id">姓名</th>
                        <th data-field="name">学号</th>
                        <th data-field="price">联系方式</th>
						<th data-field="price">预约时间</th>
                    </tr>
                </thead>
                <tbody id="forchange2" class="hoverable">
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
    var xmlhttp1;
	var xmlhttp2;
    if (window.XMLHttpRequest)
      {// code for IE7+, Firefox, Chrome, Opera, Safari
      xmlhttp1=new XMLHttpRequest();
	  xmlhttp2=new XMLHttpRequest();
      }
    else
      {// code for IE6, IE5
      xmlhttp1=new ActiveXObject("Microsoft.XMLHTTP");
	  xmlhttp2=new ActiveXObject("Microsoft.XMLHTTP");
      }
    xmlhttp1.onreadystatechange=function()
      {
      if (xmlhttp1.readyState==4 && xmlhttp1.status==200)
        {
        document.getElementById("forchange1").innerHTML=xmlhttp1.responseText;//新预约请求的更新
        }
      }
	 xmlhttp2.onreadystatechange=function()
      {
      if (xmlhttp2.readyState==4 && xmlhttp2.status==200)
        {
    	document.getElementById("forchange2").innerHTML=xmlhttp2.responseText;//已完成预约的更新
        }
      }
    xmlhttp1.open("GET","order.php?id="+str,true);
    xmlhttp1.send();
	xmlhttp2.open("GET","order.php?id="+str,true);
    xmlhttp2.send();
    }
  </script>

  <script src="assets/js/materialize.min.js"></script>
  <script type="text/javascript" src="assets/js/getexcel.js"></script>
</body>
