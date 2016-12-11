<?php

	$con = mysqli_connect('localhost', 'root', 'jmy5zhentan5') or die ("不能连接数据库:");
	mysqli_select_db($con,'psychology');

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
        <a href="#" class="brand-logo">
            <img class="logo circle" src="assets/img/logo.png">心理咨询预约</a>
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
        <p>First Line</p>
        <a href="#!" class="secondary-content"><i class="mdi-action-grade"></i></a>
      </li>
      <li class="collection-item avatar">
        <span class="title">学号</span>
        <p>First Line</p>
        <a href="#!" class="secondary-content"><i class="mdi-action-grade"></i></a>
      </li>
      <li class="collection-item avatar">
        <span class="title">性别</span>
        <p>First Line</p>
        <a href="#!" class="secondary-content"><i class="mdi-action-grade"></i></a>
      </li>
      <li class="collection-item avatar">
        <span class="title">出生日期</span>
        <p>First Line</p>
        <a href="#!" class="secondary-content"><i class="mdi-action-grade"></i></a>
      </li>
      <li class="collection-item avatar">
        <span class="title">所在院系</span>
        <p>First Line</p>
        <a href="#!" class="secondary-content"><i class="mdi-action-grade"></i></a>
      </li>
      <li class="collection-item avatar">
        <span class="title">年级</span>
        <p>First Line</p>
        <a href="#!" class="secondary-content"><i class="mdi-action-grade"></i></a>
      </li>
      <li class="collection-item avatar">
        <span class="title">民族</span>
        <p>First Line</p>
        <a href="#!" class="secondary-content"><i class="mdi-action-grade"></i></a>
      </li>
      <li class="collection-item avatar">
        <span class="title">联系电话</span>
        <p>First Line</p>
        <a href="#!" class="secondary-content"><i class="mdi-action-grade"></i></a>
      </li>
      <li class="collection-item avatar">
        <span class="title">婚否</span>
        <p>First Line</p>
        <a href="#!" class="secondary-content"><i class="mdi-action-grade"></i></a>
      </li>
      <li class="collection-item avatar">
        <span class="title">现住址</span>
        <p>First Line</p>
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
        <p>First Line</p>
        <a href="#!" class="secondary-content"><i class="mdi-action-grade"></i></a>
      </li>
      <li class="collection-item avatar">
        <span class="title">家庭所在地</span>
        <p>First Line</p>
        <a href="#!" class="secondary-content"><i class="mdi-action-grade"></i></a>
      </li>
      <li class="collection-item avatar">
        <span class="title">个人月消费</span>
        <p>First Line</p>
        <a href="#!" class="secondary-content"><i class="mdi-action-grade"></i></a>
      </li>
      <li class="collection-item avatar">
        <span class="title">父母的婚姻状况</span>
        <p>First Line</p>
        <a href="#!" class="secondary-content"><i class="mdi-action-grade"></i></a>
      </li>
      <li class="collection-item avatar">
        <span class="title">感觉自己的家庭氛围</span>
        <p>First Line</p>
        <a href="#!" class="secondary-content"><i class="mdi-action-grade"></i></a>
      </li>
      <li class="collection-item avatar">
        <span class="title">与父母的沟通</span>
        <p>First Line</p>
        <a href="#!" class="secondary-content"><i class="mdi-action-grade"></i></a>
      </li>
      <li class="collection-item avatar">
        <span class="title">感觉自己的人际关系</span>
        <p>First Line</p>
        <a href="#!" class="secondary-content"><i class="mdi-action-grade"></i></a>
      </li>
      <li class="collection-item avatar">
        <span class="title">想咨询解决的问题是</span>
        <p>First Line</p>
        <a href="#!" class="secondary-content"><i class="mdi-action-grade"></i></a>
      </li>
      <li class="collection-item avatar">
        <span class="title">如何想到找专业老师进行心理咨询</span>
        <p>First Line</p>
        <a href="#!" class="secondary-content"><i class="mdi-action-grade"></i></a>
      </li>
      <li class="collection-item avatar">
        <span class="title">对自己幼年时期的家庭教育方式的评价</span>
        <p>First Line</p>
        <a href="#!" class="secondary-content"><i class="mdi-action-grade"></i></a>
      </li>
     <li class="collection-item avatar">
        <span class="title">生活中有无重大或特殊事件</span>
        <p>First Line</p>
        <a href="#!" class="secondary-content"><i class="mdi-action-grade"></i></a>
      </li>
	  <li class="collection-item avatar">
        <span class="title">有无较严重的疾病发生</span>
        <p>First Line</p>
        <a href="#!" class="secondary-content"><i class="mdi-action-grade"></i></a>
      </li>
	  <li class="collection-item avatar">
        <span class="title">家族有无精神病史</span>
        <p>First Line</p>
        <a href="#!" class="secondary-content"><i class="mdi-action-grade"></i></a>
      </li>
	  <li class="collection-item avatar">
        <span class="title">以前是否接受过心理咨询或心理治疗</span>
        <p>First Line</p>
        <a href="#!" class="secondary-content"><i class="mdi-action-grade"></i></a>
      </li>
    </ul>
	   </div>
     </li>

     <li>
       <div class="collapsible-header teal lighten-1"><i class="mdi-social-whatshot"></i>自我评估</div>
       <div class="collapsible-body">
	   <ul class="collection">
      <li class="collection-item avatar">
        <span class="title">1.我觉得闷闷不乐，情绪低沉；</span>
        <p>A.从无（1分）</p>
        <a href="#!" class="secondary-content"><i class="mdi-action-grade"></i></a>
      </li>
      <li class="collection-item avatar">
        <span class="title">2.我觉得一天当中就早晨的心情好；</span>
        <p>First Line</p>
        <a href="#!" class="secondary-content"><i class="mdi-action-grade"></i></a>
      </li>
      <li class="collection-item avatar">
        <span class="title">3.我要哭或想哭；</span>
        <p>First Line</p>
        <a href="#!" class="secondary-content"><i class="mdi-action-grade"></i></a>
      </li>
      <li class="collection-item avatar">
        <span class="title">4.我晚上睡眠不好；</span>
        <p>First Line</p>
        <a href="#!" class="secondary-content"><i class="mdi-action-grade"></i></a>
      </li>
      <li class="collection-item avatar">
        <span class="title">5.我吃饭和平常一样多；</span>
        <p>First Line</p>
        <a href="#!" class="secondary-content"><i class="mdi-action-grade"></i></a>
      </li>
      <li class="collection-item avatar">
        <span class="title">6.我与异性亲密接触时和以往一样感到愉快；</span>
        <p>First Line</p>
        <a href="#!" class="secondary-content"><i class="mdi-action-grade"></i></a>
      </li>
      <li class="collection-item avatar">
        <span class="title">7.我感到体重减轻；</span>
        <p>First Line</p>
        <a href="#!" class="secondary-content"><i class="mdi-action-grade"></i></a>
      </li>
      <li class="collection-item avatar">
        <span class="title">8.我为便秘烦恼；</span>
        <p>First Line</p>
        <a href="#!" class="secondary-content"><i class="mdi-action-grade"></i></a>
      </li>
      <li class="collection-item avatar">
        <span class="title">9.我的心跳比平时快；</span>
        <p>First Line</p>
        <a href="#!" class="secondary-content"><i class="mdi-action-grade"></i></a>
      </li>
      <li class="collection-item avatar">
        <span class="title">10.我无缘无故的感到疲乏；</span>
        <p>First Line</p>
        <a href="#!" class="secondary-content"><i class="mdi-action-grade"></i></a>
      </li>
	        <li class="collection-item avatar">
        <span class="title">11.我的头脑跟平常一样清楚；</span>
        <p>First Line</p>
        <a href="#!" class="secondary-content"><i class="mdi-action-grade"></i></a>
      </li>
	        <li class="collection-item avatar">
        <span class="title">12.我做事像平时一样不感到困难；</span>
        <p>First Line</p>
        <a href="#!" class="secondary-content"><i class="mdi-action-grade"></i></a>
      </li>
	        <li class="collection-item avatar">
        <span class="title">13.我坐卧不安，难以保持平静；</span>
        <p>First Line</p>
        <a href="#!" class="secondary-content"><i class="mdi-action-grade"></i></a>
      </li>
	        <li class="collection-item avatar">
        <span class="title">14.我对未来抱有希望；</span>
        <p>First Line</p>
        <a href="#!" class="secondary-content"><i class="mdi-action-grade"></i></a>
      </li>
	        <li class="collection-item avatar">
        <span class="title">15.我比平常更容易生气激动；</span>
        <p>First Line</p>
        <a href="#!" class="secondary-content"><i class="mdi-action-grade"></i></a>
      </li>
	        <li class="collection-item avatar">
        <span class="title">16.我觉得做出决定是容易的；</span>
        <p>First Line</p>
        <a href="#!" class="secondary-content"><i class="mdi-action-grade"></i></a>
      </li>
	        <li class="collection-item avatar">
        <span class="title">17.我觉得自己是个有用的人，有人需要我；</span>
        <p>First Line</p>
        <a href="#!" class="secondary-content"><i class="mdi-action-grade"></i></a>
      </li>
	        <li class="collection-item avatar">
        <span class="title">18.我的生活过得很有意思；</span>
        <p>First Line</p>
        <a href="#!" class="secondary-content"><i class="mdi-action-grade"></i></a>
      </li>
	        <li class="collection-item avatar">
        <span class="title">19.假如我死了，别人会生活得更好；</span>
        <p>First Line</p>
        <a href="#!" class="secondary-content"><i class="mdi-action-grade"></i></a>
      </li>
	        <li class="collection-item avatar">
        <span class="title">20.平常感兴趣的事，我仍然照样感兴趣；</span>
        <p>First Line</p>
        <a href="#!" class="secondary-content"><i class="mdi-action-grade"></i></a>
      </li>
	        <li class="collection-item avatar">
        <span class="title"><div>总分：80<br/>评估结果：暂无（从服务器读取）<div class="right-align"><a class="waves-effect waves-teal btn-flat">修改评估结果</a></div></div></span>

        <a href="#!" class="secondary-content"><i class="mdi-action-grade"></i></a>
      </li>
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
  <script src="http://apps.bdimg.com/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="assets/js/materialize.min.js"></script>
  <script type="text/javascript" src="assets/js/getexcel.js"></script>
