<!DOCTYPE HTML>
<html  lang="zh-CN">
	<head>
		<title>MEWE | 用户资料</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<meta charset="UTF-8">
		<!-- 导入ratchet  手机端CSS-->
		<link rel="stylesheet" href="lib/css/ratchet.min.css">
		<link rel="stylesheet" href="lib/css/ratchet-theme-ios.min.css">
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet/less" type="text/css" href="lib/css/styles.less" />
		<script src="http://cdn.bootcss.com/jquery/2.1.1/jquery.min.js"></script>
		<script src="http://cdn.bootcss.com/less.js/1.7.5/less.min.js"></script>
  		<script src="lib/js/ratchet.min.js"></script>
		<script src="lib/js/custom.js"></script>
	</head>
	<body>
		      <div class="wedding-info">
			      <form>
			      	<div class="top">		      
					      <a class="change-avatar" href="avatar-uploader.php?type=profile">				      
						      <img src="test/avatar.jpg"/>
						      <img src="lib/img/camera.svg"/>
					      </a>		      
				      <input class="name" type="text" placeholder="DavidZhang">
				      <input class="nickname" type="text" placeholder="输入英文名，默认显示为新郎">
			      	</div>
			      	<div class="input-group">
				      	<div class="input-row disabled">
						  	<label>手机号</label>
						  	<input type="tel" value="18661033100"  disabled>
						 </div>
						 <div class="input-row">
							 <label>邮箱</label>
							 <input type="email" value="493901700@qq.com" placeholder="填写邮箱">
						</div>
						
						<div class="input-row">
							<div id="male" class="">男</div>
							<div id="female" class="">女</div>
							<input type="hidden" value="" name="gender" id="gender"/>
						</div>
						<div class="input-row">
							<label>姓名</label>
							<input type="text" placeholder="真实姓名">
							
						</div>
						<div class="input-row">
						<label>出生日期</label>
						<input type="date" placeholder="出生日期">
						</div>
						<div class="input-row">
							<div class="state">
							<span>省份</span>
								<select name="" >
									<option value="北京">北京</option>
									<option value="上海">上海</option>
									<option value="广州">广州</option>
								</select>
							</div>
							<div class="city">
							<span>城市</span>
								<select name="" >
									<option value="浦东">浦东</option>
									<option value="静安">静安</option>
									<option value="徐汇">徐汇</option>
								</select>
							</div>
						</div>
						<div class="bottom">
							<a class="back-home">返回</a>
							<button type="submit" >保存修改</button>
						</div>
			      	</div>
			      </form>
		      </div>
	</body>
</html>