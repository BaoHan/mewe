<?php function is_vip(){
	return true;
}?>

<div class="dashboard">
	<div class="top-section">
		<div class="user-profile">
		<a href="profile.php">
			<img  alt="{{username}}" src="test/avatar.jpg"/>
		</a>
		<p class="name">Username <?php if(is_vip()){?><span>VIP</span><?php } ?></p>
		<p class="addr">省份 | 城市</p>
	</div>
		<div class="statue">
		<div class="col-3">
			<h3>浏览量</h3>
			<h1>2834</h1>
		</div>
		<div class="col-3">
			<h3>赞</h3>
			<h1>145</h1>
		</div>
		<div class="col-3">
			<h3>祝 福</h3>
			<h1>53</h1>
		</div>
	</div>
		<div class="buttons">
		<button class="btn">我的关注 <span class="badge badge-inverted">12 </span></button>
		<button class="btn">分享请柬<span class="badge badge-inverted icon icon-share"></span></button>
	</div>
		<div class="cover">
			<img src="test/bg.jpg"/>
		</div>
	</div>
	<div class="main-menu">
		<ul>
			<li>
				<div class="text">
					<h3>婚礼请柬</h3>
<!-- 					这里要判断下是否开通，如果开通显示倒计时 -->
					<p>尚未开通</p>
				</div>
				<div class="menu-bg">
					<img src="lib/img/ivt-icon.png"/>
				</div>
			</li>
			<li>
				<div class="text">
					<h3>婚礼相册</h3>
					<p>50/100张</p>
				</div>
				<div class="menu-bg">
					<img src="lib/img/gallery-icon.png"/>
				</div>
			</li>
			<li>
				<div class="text">
					<h3>婚礼祝福</h3>
					<p>新增9条祝福</p>
				</div>
				<div class="menu-bg">
					<img src="lib/img/wish-icon.png"/>
				</div>
			</li>
		</ul>
	</div>
</div>