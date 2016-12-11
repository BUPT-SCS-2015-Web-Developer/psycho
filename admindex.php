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
            <img class="logo circle" src="">心理咨询预约</a>
      <ul class="right">
        <li><a href="#">个人中心</a></li>
      </ul>
    </div>
    <div class="nav-wrapper hide-on-large-only">
        <a href="#" class="brand-logo">
            <img class="logo circle" src="">心理咨询预约</a>
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
                        <th data-field="name">联系方式</th>
                        <th data-field="price">预约时间</th>
                    </tr>
                </thead>
                <tbody class="hoverable">
<?php
    $result = mysqli_query($con,"SELECT * FROM `psy` WHERE day='mon'");
	mysqli_query($con,"set names utf8");
	$num_result = mysqli_num_rows($result);
	for ($i=0;$i<$num_result;$i++) {
		$row = mysqli_fetch_row($result);
        ?>
                    <tr class="hoverable">
                        <td><?php echo $row[1]?></td>
                        <td><?php echo $row[2]?></td>
                        <td><?php echo $row[4]?></td>
						<td><a class="waves-effect waves-teal btn-flat" href="information.php?id=<?php echo $row[0]?>">信息详情</a></td>
						<td><a class="waves-effect waves-teal btn-flat modal-trigger" href="#model1">成功预约</a>
						  <div id="model1" class="modal">
                            <div class="modal-content">
                               <h4>请确认！</h4>
                               <p>确认成功预约后将删除此条记录哦</p>
                            </div>
                            <div class="modal-footer">
                              <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">我知道啦</a>
                            </div>
                          </div>
						</td>
                    </tr>
			<?php
        }
?>
     	    </tbody>
            </table>
	   </div>
     </li>

	 <li>
       <div class="collapsible-header teal lighten-4">Tuesday</div>
       <div class="collapsible-body">
            <table class="hoverable">
                <thead>
                    <tr>
                        <th data-field="id">姓名</th>
                        <th data-field="name">联系方式</th>
                        <th data-field="price">预约时间</th>
                    </tr>
                </thead>
                <tbody class="hoverable">
<?php
    $result = mysqli_query($con,"SELECT * FROM `psy` WHERE day='tue'");
	mysqli_query($con,"set names utf8");
	$num_result = mysqli_num_rows($result);
	for ($i=0;$i<$num_result;$i++) {
		$row = mysqli_fetch_row($result);
        ?>
                    <tr class="hoverable">
                        <td><?php echo $row[1]?></td>
                        <td><?php echo $row[2]?></td>
                        <td><?php echo $row[4]?></td>
						<td><a class="waves-effect waves-teal btn-flat" href="information.php?id=<?php echo $row[0]?>">信息详情</a></td>
						<td><a class="waves-effect waves-teal btn-flat modal-trigger" href="#model2">成功预约</a>
						  <div id="model2" class="modal">
                            <div class="modal-content">
                               <h4>请确认！</h4>
                               <p>确认成功预约后将删除此条记录哦</p>
                            </div>
                            <div class="modal-footer">
                              <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">我知道啦</a>
                            </div>
                          </div>
						</td>
                    </tr>
			<?php
        }
?>
     	   </tbody>
             </table>
	   </div>
     </li>

	 <li>
       <div class="collapsible-header teal lighten-3">Wednesday</div>
       <div class="collapsible-body">
            <table class="hoverable">
                <thead>
                    <tr>
                        <th data-field="id">姓名</th>
                        <th data-field="name">联系方式</th>
                        <th data-field="price">预约时间</th>
                    </tr>
                </thead>
                <tbody class="hoverable">
<?php
    $result = mysqli_query($con,"SELECT * FROM `psy` WHERE day='wens'");
	mysqli_query($con,"set names utf8");
	$num_result = mysqli_num_rows($result);
	for ($i=0;$i<$num_result;$i++) {
		$row = mysqli_fetch_row($result);
        ?>
                    <tr class="hoverable">
                        <td><?php echo $row[1]?></td>
                        <td><?php echo $row[2]?></td>
                        <td><?php echo $row[4]?></td>
						<td><a class="waves-effect waves-teal btn-flat" href="information.php?id=<?php echo $row[0]?>">信息详情</a></td>
						<td><a class="waves-effect waves-teal btn-flat modal-trigger" href="#model3">成功预约</a>
						  <div id="model3" class="modal">
                            <div class="modal-content">
                               <h4>请确认！</h4>
                               <p>确认成功预约后将删除此条记录哦</p>
                            </div>
                            <div class="modal-footer">
                              <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">我知道啦</a>
                            </div>
                          </div>
						</td>
                    </tr>
			<?php
        }
?>
     	   </tbody>
             </table>
	   </div>
     </li>

	 <li>
       <div class="collapsible-header teal lighten-2">Thursday</div>
       <div class="collapsible-body">
            <table class="hoverable">
                <thead>
                    <tr>
                        <th data-field="id">姓名</th>
                        <th data-field="name">联系方式</th>
                        <th data-field="price">预约时间</th>
                    </tr>
                </thead>
                <tbody class="hoverable">
<?php
    $result = mysqli_query($con,"SELECT * FROM `psy` WHERE day='thurs'");
	mysqli_query($con,"set names utf8");
	$num_result = mysqli_num_rows($result);
	for ($i=0;$i<$num_result;$i++) {
		$row = mysqli_fetch_row($result);
	//	$model=$row[0];
        ?>
                    <tr class="hoverable">
                        <td><?php echo $row[1]?></td>
                        <td><?php echo $row[2]?></td>
                        <td><?php echo $row[4]?></td>
						<td><a class="waves-effect waves-teal btn-flat" href="information.php?id=<?php echo $row[0]?>">信息详情</a></td>
						<td><a class="waves-effect waves-teal btn-flat modal-trigger" href="#<?php echo $row[0]?>">成功预约</a>
						  <div id="<?php $row[0]?>" class="modal">
                            <div class="modal-content">
                               <h4>请确认！</h4>
                               <p>确认成功预约后将删除此条记录哦</p>
                            </div>
                            <div class="modal-footer">
                              <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">我知道啦</a>
                            </div>
                          </div>
						</td>
                    </tr>
			<?php
        }
?>
     	   </tbody>
             </table>
	   </div>
     </li>

	 <li>
       <div class="collapsible-header teal lighten-1">Friday</div>
       <div class="collapsible-body">
            <table class="hoverable">
                <thead>
                    <tr>
                        <th data-field="id">姓名</th>
                        <th data-field="name">联系方式</th>
                        <th data-field="price">预约时间</th>
                    </tr>
                </thead>
                <tbody class="hoverable">
<?php
    $result = mysqli_query($con,"SELECT * FROM `psy` WHERE day='fri'");
	mysqli_query($con,"set names utf8");
	$num_result = mysqli_num_rows($result);
	for ($i=0;$i<$num_result;$i++) {
		$row = mysqli_fetch_row($result);
        ?>
                    <tr class="hoverable">
                        <td><?php echo $row[1]?></td>
                        <td><?php echo $row[2]?></td>
                        <td><?php echo $row[4]?></td>
						<td><a class="waves-effect waves-teal btn-flat" href="information.php?id=<?php echo $row[0]?>">信息详情</a></td>
						<td><a class="waves-effect waves-teal btn-flat modal-trigger" href="#model5">成功预约</a>
						  <div id="model5" class="modal">
                            <div class="modal-content">
                               <h4>请确认！</h4>
                               <p>确认成功预约后将删除此条记录哦</p>
                            </div>
                            <div class="modal-footer">
                              <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">我知道啦</a>
                            </div>
                          </div>
						</td>
                    </tr>
			<?php
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
                        <th data-field="name">联系方式</th>
						<th data-field="price">预约星期</th>
                        <th data-field="price">预约时间</th>
						<th data-field="price">预约情况</th>
                    </tr>
                </thead>
                <tbody class="hoverable">
<?php
    $result = mysqli_query($con,"SELECT * FROM `psy`");
	mysqli_query($con,"set names utf8");
	$num_result = mysqli_num_rows($result);
	for ($i=0;$i<$num_result;$i++) {
		$row = mysqli_fetch_row($result);
        ?>
                    <tr class="hoverable">
                        <td><?php echo $row[1]?></td>
                        <td><?php echo $row[2]?></td>
						<td><?php echo $row[3]?></td>
                        <td><?php echo $row[4]?></td>
						<td>未完成（or）已完成</td>
						<td><a class="waves-effect waves-teal btn-flat" href="information.php?id=<?php echo $row[0]?>">信息详情</a></td>
                    </tr>
			<?php
        }
?>
     	   </tbody>
             </table>

	</div>
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
  <script>  $(document).ready(function(){
    $('ul.tabs').tabs();
  });</script>
  <script src="http://apps.bdimg.com/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="assets/js/materialize.min.js"></script>
  <script type="text/javascript" src="assets/js/getexcel.js"></script>
