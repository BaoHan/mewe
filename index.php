<?php
$is_new_user = true;//判断新用户，显示欢迎页面
?>
<!DOCTYPE HTML>
<html  lang="zh-CN">
	<head>
		<title>MEWE 我们的婚礼</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<meta charset="UTF-8">
		<!-- 导入ratchet  手机端CSS-->
		<link rel="stylesheet" href="lib/css/ratchet.min.css">
		<link rel="stylesheet" href="lib/css/ratchet-theme-ios.min.css">
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet/less" type="text/css" href="lib/css/styles.less" />
		<script src="http://cdn.bootcss.com/jquery/2.1.1/jquery.min.js"></script>
		<script src="http://cdn.bootcss.com/less.js/1.7.5/less.min.js"></script>

		<link rel="stylesheet" href="lib/css/idangerous.swiper.css">
  		<script  src="lib/js/idangerous.swiper-2.0.min.js"></script>
  		<script src="lib/js/ratchet.min.js"></script>
		<script src="lib/js/custom.js"></script>
		<style type="text/css">
			html,body{height: 100%;overflow: hidden;}
		</style>
		<script language="JavaScript">
		$(function(){
					var mySwiper = $('.swiper-container').swiper({
						    //Your options here:
						    mode:'horizontal',
						    loop: false,
						    pagination:'.pagination'
						    //etc..
				});
		})
		</script>
	</head>
	<body>
	<?php if($is_new_user){ ?>
		<div class="swiper-container">
	  		<div class="swiper-wrapper">
		  	
		      <div class="swiper-slide" style="background:#ffcc22">
		    
		      </div>
		      <div class="swiper-slide" style="background:#111">
		     
		      </div>
		      <div class="swiper-slide" style="background:blue">
		      
		      </div>
		         <div class="swiper-slide login-page" style="background:white">
		      	<?php include 'template/login.php'; ?>
		      </div>
	  		</div>
	  		<div class="pagination">
		  		<span class="swiper-pagination-switch"></span>
		  		<span class="swiper-pagination-switch"></span>
		  		<span class="swiper-pagination-switch"></span>
		  		<span class="swiper-pagination-switch"></span>
	  		</div>	
		</div>
		  <?php }  else { ?>
		       <div class="login-page" style="background:white">
		      	<?php include 'template/login.php'; ?>
		      </div>
			  <?php } ?>
	</body>
</html>