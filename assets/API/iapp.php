<?php
	/**
	 * 轻应用通过IFrame方式在易班开放平台中接入显示
	 * 所以不能直接在浏览器打开本地地址进入浏览
	 * 而是打开易班管理中心中对应站内应用的网站地址进行浏览
	 *
	 * SDK中的方式会检测是否有易班开放平台提供的参数，若无则会抛出异常
	 */


	/**
	 * 包含SDK
	 */
	require("classes/yb-globals.inc.php");

	session_start();

	/**
	 * 配置文件
	 */
	include('config.php');

	/**
	 * 站内应用需要使用AppID、AppSecret和应用入口地址初始化
	 *
	 */
	$api = YBOpenApi::getInstance()->init($cfg['x']['appID'], $cfg['x']['appSecret'], $cfg['x']['callback']);

	if (empty($_SESSION['token']))
	{
		try
		{
			/**
			 * 调用perform()验证授权，若未授权会自动重定向到授权页面
			 * 授权成功返回的数组中包含用户基本信息及访问令牌信息
			 */
			$info = $api->getFrameUtil()->perform();
			# print_r($info);	// 可以输出info数组查看
								// 访问令牌[visit_oauth][access_token]

			$_SESSION['token']	= $info['visit_oauth']['access_token'];
			$_SESSION['yibanID']	= $info['visit_user']['userid'];
			$_SESSION['yibanName']	= $info['visit_user']['username'];
		}
		catch (YBException $ex)
		{
			echo $ex->getMessage();
		}
	}
	else {
		$api = YBOpenApi::getInstance()->bind($_SESSION['token']);
		$user = $api->getUser();
		$info = $user->realme();
	}
	/**
	 * adaptive()生成页面自适合代码，是否需要调用由开发者自行决定
	 */
	$adaptive = $api->getFrameUtil()->adaptive();

	#####################################################################
	#
	#
	# YBOpenApi::getInstance()->init()->getFrameUtil()->perform()
	# 调用可以完成站内应用的授权验证流程;
	#
	# 下面可以实现应用的相关业务流程，DEMO实例中只显示用户名！
	#
	#
	###########################################################################
?>
