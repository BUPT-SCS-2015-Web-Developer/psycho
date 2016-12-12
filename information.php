<?php
    ini_set("display_errors", "On");
    error_reporting(E_ALL | E_STRICT);
    session_start();
    date_default_timezone_set('Asia/Shanghai');
    include "assets/API/db_config.php";

    if(isset($_GET['id']))
        $id = addslashes($_GET['id']);
    else
        header('Location: index.html');
    $db = new mysqli($db_host,$db_user,$db_password,$db_database);
    if (!$db)
    {
        exit('Could not connect: ' . mysql_error());
    }
    $db->query("set names 'utf8'");
    $sql_query = "SELECT * FROM psycho WHERE id = '".$id."'";
    $result = $db->query($sql_query);

    if(!($result->num_rows))
        header('Location: index.php');
    else
        $row = $result->fetch_array(MYSQLI_NUM);
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
        <a href="#" class="brand-logo">心理咨询预约</a>
      <ul class="right">
        <li><a href="#">个人中心</a></li>
      </ul>
    </div>
    <div class="nav-wrapper hide-on-large-only">
        <a href="#" class="brand-logo">
            <img class="logo circle" src="assets/img/logo.png">心理咨询预约</a>
      <ul class="left">
        <li><a href="#"><img id="user" class="circle" src="assets/img/user.png"></a></li>
      </ul>
    </div>
  </nav>


<div class="container">
   <ul class="collapsible popout" data-collapsible="expandable">
     <li>
       <div class="collapsible-header teal lighten-5 active">基本信息</div>
	   <div class="collapsible-body">
	   <ul class="collection">
      <li class="collection-item avatar">
        <span class="title">姓名</span>
        <p><?php echo $row[1];?></p>
        <a href="#!" class="secondary-content"><i class="mdi-action-grade"></i></a>
      </li>
      <li class="collection-item avatar">
        <span class="title">学号</span>
        <p><?php echo $row[2];?></p>
        <a href="#!" class="secondary-content"><i class="mdi-action-grade"></i></a>
      </li>
      <li class="collection-item avatar">
        <span class="title">性别</span>
        <p><?php echo $row[3];?></p>
        <a href="#!" class="secondary-content"><i class="mdi-action-grade"></i></a>
      </li>
      <li class="collection-item avatar">
        <span class="title">出生日期</span>
        <p><?php echo $row[4];?></p>
        <a href="#!" class="secondary-content"><i class="mdi-action-grade"></i></a>
      </li>
      <li class="collection-item avatar">
        <span class="title">所在院系</span>
        <p><?php echo $row[5];?></p>
        <a href="#!" class="secondary-content"><i class="mdi-action-grade"></i></a>
      </li>
      <li class="collection-item avatar">
        <span class="title">年级</span>
        <p><?php echo $row[6];?></p>
        <a href="#!" class="secondary-content"><i class="mdi-action-grade"></i></a>
      </li>
      <li class="collection-item avatar">
        <span class="title">民族</span>
        <p><?php echo $row[7];?></p>
        <a href="#!" class="secondary-content"><i class="mdi-action-grade"></i></a>
      </li>
      <li class="collection-item avatar">
        <span class="title">联系电话</span>
        <p><?php echo $row[8];?></p>
        <a href="#!" class="secondary-content"><i class="mdi-action-grade"></i></a>
      </li>
      <li class="collection-item avatar">
        <span class="title">婚姻状况</span>
        <p><?php echo $row[9];?></p>
        <a href="#!" class="secondary-content"><i class="mdi-action-grade"></i></a>
      </li>
      <li class="collection-item avatar">
        <span class="title">现住址</span>
        <p><?php echo $row[10];?></p>
        <a href="#!" class="secondary-content"><i class="mdi-action-grade"></i></a>
      </li>
    </ul>
	   </div>
     </li>

     <li>
       <div class="collapsible-header teal lighten-3"><i class="mdi-maps-place"></i>学生情况</div>
       <div class="collapsible-body">
	   <ul class="collection">
      <li class="collection-item avatar">
        <span class="title">是否是独生子女</span>
        <p><?php echo $row[11];?></p>
        <a href="#!" class="secondary-content"><i class="mdi-action-grade"></i></a>
      </li>
      <li class="collection-item avatar">
        <span class="title">家庭所在地</span>
        <p><?php echo $row[12];?></p>
        <a href="#!" class="secondary-content"><i class="mdi-action-grade"></i></a>
      </li>
      <li class="collection-item avatar">
        <span class="title">个人月消费</span>
        <p><?php echo $row[13];?></p>
        <a href="#!" class="secondary-content"><i class="mdi-action-grade"></i></a>
      </li>
      <li class="collection-item avatar">
        <span class="title">父母的婚姻状况</span>
        <p><?php echo $row[14];?></p>
        <a href="#!" class="secondary-content"><i class="mdi-action-grade"></i></a>
      </li>
      <li class="collection-item avatar">
        <span class="title">感觉自己的家庭氛围</span>
        <p><?php echo $row[15];?></p>
        <a href="#!" class="secondary-content"><i class="mdi-action-grade"></i></a>
      </li>
      <li class="collection-item avatar">
        <span class="title">与父母的沟通</span>
        <p><?php echo $row[16];?></p>
        <a href="#!" class="secondary-content"><i class="mdi-action-grade"></i></a>
      </li>
      <li class="collection-item avatar">
        <span class="title">感觉自己的人际关系</span>
        <p><?php echo $row[17];?></p>
        <a href="#!" class="secondary-content"><i class="mdi-action-grade"></i></a>
      </li>
      <li class="collection-item avatar">
        <span class="title">想咨询解决的问题是</span>
        <p><?php
            $q = array("学习问题","情绪压力问题","人际关系问题","恋爱问题","家庭问题","自信心问题",
                        "自我认识问题","个人发展问题","性问题");
            $s = "";
            for($i=0;$i<=8;$i++)
            {
                if($row[$i+18]=="on")
                {
                    $s = $s.$q[$i]." ";
                }
            }
            if($row[27]!=null)
                $s = $s.$row[27];
            echo $s;
        ?></p>
        <a href="#!" class="secondary-content"><i class="mdi-action-grade"></i></a>
      </li>
      <li class="collection-item avatar">
        <span class="title">如何想到找专业老师进行心理咨询</span>
        <p><?php echo $row[28];?></p>
        <a href="#!" class="secondary-content"><i class="mdi-action-grade"></i></a>
      </li>
      <li class="collection-item avatar">
        <span class="title">对自己幼年时期的家庭教育方式的评价</span>
        <p><?php echo $row[29];?></p>
        <a href="#!" class="secondary-content"><i class="mdi-action-grade"></i></a>
      </li>
     <li class="collection-item avatar">
        <span class="title">生活中有无重大或特殊事件</span>
        <p><?php echo $row[30];?></p>
        <a href="#!" class="secondary-content"><i class="mdi-action-grade"></i></a>
      </li>

	  <li class="collection-item avatar">
        <span class="title">家族有无精神病史</span>
        <p><?php echo $row[31];?></p>
        <a href="#!" class="secondary-content"><i class="mdi-action-grade"></i></a>
      </li>
	  <li class="collection-item avatar">
        <span class="title">以前是否接受过心理咨询或心理治疗</span>
        <p><?php echo $row[32];?></p>
        <a href="#!" class="secondary-content"><i class="mdi-action-grade"></i></a>
      </li>
    </ul>
	   </div>
     </li>
     <?php
        function output($a)
        {
            if($a=="A")
                echo "A.从不";
            elseif ($a=="B")
                echo "B.有时";
            elseif ($a=="C")
                echo "C.经常";
            elseif ($a=="D")
                echo "D.总是";
            return;
        }
      ?>
     <li>
       <div class="collapsible-header teal lighten-1"><i class="mdi-social-whatshot"></i>自我评估</div>
       <div class="collapsible-body">
	   <ul class="collection">
      <li class="collection-item avatar">
        <span class="title">1.我觉得闷闷不乐，情绪低沉；</span>
        <p><?php output($row[33]); ?></p>
        <a href="#!" class="secondary-content"><i class="mdi-action-grade"></i></a>
      </li>
      <li class="collection-item avatar">
        <span class="title">2.我觉得一天当中就早晨的心情好；</span>
        <p><?php output($row[34]); ?></p>
        <a href="#!" class="secondary-content"><i class="mdi-action-grade"></i></a>
      </li>
      <li class="collection-item avatar">
        <span class="title">3.我要哭或想哭；</span>
        <p><?php output($row[35]); ?></p>
        <a href="#!" class="secondary-content"><i class="mdi-action-grade"></i></a>
      </li>
      <li class="collection-item avatar">
        <span class="title">4.我晚上睡眠不好；</span>
        <p><?php output($row[36]); ?></p>
        <a href="#!" class="secondary-content"><i class="mdi-action-grade"></i></a>
      </li>
      <li class="collection-item avatar">
        <span class="title">5.我吃饭和平常一样多；</span>
        <p><?php output($row[37]); ?></p>
        <a href="#!" class="secondary-content"><i class="mdi-action-grade"></i></a>
      </li>
      <li class="collection-item avatar">
        <span class="title">6.我与异性亲密接触时和以往一样感到愉快；</span>
        <p><?php output($row[38]); ?></p>
        <a href="#!" class="secondary-content"><i class="mdi-action-grade"></i></a>
      </li>
      <li class="collection-item avatar">
        <span class="title">7.我感到体重减轻；</span>
        <p><?php output($row[39]); ?></p>
        <a href="#!" class="secondary-content"><i class="mdi-action-grade"></i></a>
      </li>
      <li class="collection-item avatar">
        <span class="title">8.我为便秘烦恼；</span>
        <p><?php output($row[40]); ?></p>
        <a href="#!" class="secondary-content"><i class="mdi-action-grade"></i></a>
      </li>
      <li class="collection-item avatar">
        <span class="title">9.我的心跳比平时快；</span>
        <p><?php output($row[41]); ?></p>
        <a href="#!" class="secondary-content"><i class="mdi-action-grade"></i></a>
      </li>
      <li class="collection-item avatar">
        <span class="title">10.我无缘无故的感到疲乏；</span>
        <p><?php output($row[42]); ?></p>
        <a href="#!" class="secondary-content"><i class="mdi-action-grade"></i></a>
      </li>
	        <li class="collection-item avatar">
        <span class="title">11.我的头脑跟平常一样清楚；</span>
        <p><?php output($row[43]); ?></p>
        <a href="#!" class="secondary-content"><i class="mdi-action-grade"></i></a>
      </li>
	        <li class="collection-item avatar">
        <span class="title">12.我做事像平时一样不感到困难；</span>
        <p><?php output($row[44]); ?></p>
        <a href="#!" class="secondary-content"><i class="mdi-action-grade"></i></a>
      </li>
	        <li class="collection-item avatar">
        <span class="title">13.我坐卧不安，难以保持平静；</span>
        <p><?php output($row[45]); ?></p>
        <a href="#!" class="secondary-content"><i class="mdi-action-grade"></i></a>
      </li>
	        <li class="collection-item avatar">
        <span class="title">14.我对未来抱有希望；</span>
        <p><?php output($row[46]); ?></p>
        <a href="#!" class="secondary-content"><i class="mdi-action-grade"></i></a>
      </li>
	        <li class="collection-item avatar">
        <span class="title">15.我比平常更容易生气激动；</span>
        <p><?php output($row[47]); ?></p>
        <a href="#!" class="secondary-content"><i class="mdi-action-grade"></i></a>
      </li>
	        <li class="collection-item avatar">
        <span class="title">16.我觉得做出决定是容易的；</span>
        <p><?php output($row[48]); ?></p>
        <a href="#!" class="secondary-content"><i class="mdi-action-grade"></i></a>
      </li>
	        <li class="collection-item avatar">
        <span class="title">17.我觉得自己是个有用的人，有人需要我；</span>
        <p><?php output($row[49]); ?></p>
        <a href="#!" class="secondary-content"><i class="mdi-action-grade"></i></a>
      </li>
	        <li class="collection-item avatar">
        <span class="title">18.我的生活过得很有意思；</span>
        <p><?php output($row[50]); ?></p>
        <a href="#!" class="secondary-content"><i class="mdi-action-grade"></i></a>
      </li>
	        <li class="collection-item avatar">
        <span class="title">19.假如我死了，别人会生活得更好；</span>
        <p><?php output($row[51]); ?></p>
        <a href="#!" class="secondary-content"><i class="mdi-action-grade"></i></a>
      </li>
	        <li class="collection-item avatar">
        <span class="title">20.平常感兴趣的事，我仍然照样感兴趣；</span>
        <p><?php output($row[52]); ?></p>
        <a href="#!" class="secondary-content"><i class="mdi-action-grade"></i></a>
      </li>
<!--	        <li class="collection-item avatar">
        <span class="title"><div>总分：80<br/>评估结果：暂无（从服务器读取）<div class="right-align"><a class="waves-effect waves-teal btn-flat">修改评估结果</a></div></div></span>

        <a href="#!" class="secondary-content"><i class="mdi-action-grade"></i></a>
    </li>-->
    </ul>
	   </div>
     </li>
   </ul>
</div>


      <div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
    <a class="btn-floating btn-large red">
      操作
    </a>
    <ul>
      <li><a class="btn-floating green" href="admindex.php">返回首页</a></li>
      <li><a class="btn-floating yellow darken-1">导出表格</a></li>
    </ul>
  </div>


</body>




  <footer class="page-footer orange">
    <div class="footer-copyright">
      <div class="container">
      Copyright© 北邮易班学生发展中心 <a class="orange-text text-lighten-3" href="http://buptyiban.org/">BUPTYiban</a>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="https://apps.bdimg.com/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="assets/js/materialize.min.js"></script>
  <script type="text/javascript" src="assets/js/getexcel.js"></script>
