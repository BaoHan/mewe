<?php
$is_user = false;//判断新用户，显示欢迎页面
?>
<!DOCTYPE HTML>
<html  lang="zh-CN">
	<head>
		<title>UserName</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet/less" type="text/css" href="lib/css/styles.less" />
		<script src="http://cdn.bootcss.com/jquery/2.1.1/jquery.min.js"></script>
		<script src="http://cdn.bootcss.com/less.js/1.7.5/less.min.js"></script>
<!-- 导入ratchet  手机端CSS-->
		<link rel="stylesheet" href="lib/css/ratchet.min.css">
		<link rel="stylesheet" href="lib/css/ratchet-theme-ios.min.css">
		<link rel="stylesheet" href="lib/css/idangerous.swiper.css">
  		<script  src="lib/js/idangerous.swiper-2.0.min.js"></script>
  		<script src="lib/js/ratchet.min.js"></script>
		<script src="lib/js/custom.js"></script>
		<style type="text/css">
		</style>
	</head>
	<body>
	<?php if($is_user){ ?>

	<?php }  else { ?>
		跳转到
	<?php } ?>
	</body>
</html>