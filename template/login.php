<?php
/* 判断微信内容 */
function is_weixin(){
if ( strpos($_SERVER['HTTP_USER_AGENT'], 'MicroMessenger') !== false ) {
return true;
}
return false;
}
?>
<div class="logo">
<img class="img-responsive" src="lib/img/logo.png"/>
</div>
<p>开启婚礼微请柬，分享幸福时光</p>
<!-- 这里是login page -->
<div class="login">

<a class="btn btn-block phone-login">手机号登录</a>
<?php 
if (is_weixin()){ ?> 
<a class="btn btn-positive btn-block" href="">微信登录</a>
<?php } else { ?>
<a class="btn btn-negative btn-block" href="">微博登录</a>
<?php } ?>
<p class="bot-info">还没有帐号？<a class="signup" >立即注册</a></p>
</div>
<div class="login-form">
	<!-- 这里隐藏 -->
	<form>
  <input type="tel" placeholder="手机号">
  <input type="password" placeholder="密 码">
  <a href="dashboard.php" data-transition="fade" class="btn btn-positive btn-block">登 录</a>
</form>
	<p class="bot-info">忘记密码？<a href="signup.php">找回密码</a></p>
	<span class="icon icon-left-nav back"></span>
</div>

<div class="signup-form">
	<!-- 这里隐藏 -->
	<form>
	  <input class="type-tel" type="tel" placeholder="手机号"><button class="btn send">发送验证码</button>
	  <input type="number" placeholder="输入验证码">
	  <input type="password" placeholder="密 码">
	  <input type="password" placeholder="重复密码">
	  <button class="btn btn-positive btn-block">注 册</button>
  </form>
	<span class="icon icon-left-nav back"></span>
</div>