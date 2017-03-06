<!--social widgets-->
<ul class="social_widgets d_xs_none">
	

	<!--contact form-->
	<li class="relative">
		<button class="sw_button t_align_c contact"><i class="fa fa-envelope-o"></i></button>
		<div class="sw_content">
			<h3 class="color_dark m_bottom_20">联系我们</h3>
			<p class="f_size_medium m_bottom_15">更多信息</p>
			<form class="mini">
				<input class="f_size_medium m_bottom_10 r_corners full_width" type="text" name="cf_name" placeholder="你的名字">
				<input class="f_size_medium m_bottom_10 r_corners full_width" type="email" name="cf_email" placeholder="邮箱地址">
				<textarea class="f_size_medium r_corners full_width m_bottom_20" placeholder="内容" name="cf_message"></textarea>
				<button type="submit" class="button_type_4 r_corners mw_0 tr_all_hover color_dark bg_light_color_2">发送</button>
			</form>
		</div>	
	</li>
	<!--contact info-->
	<li class="relative">
		<button class="sw_button t_align_c googlemap"><i class="fa fa-map-marker"></i></button>
		<div class="sw_content">
			<h3 class="color_dark m_bottom_20">学校位置</h3>
			<ul class="c_info_list">
				<li class="m_bottom_10">
					<div class="clearfix m_bottom_15">
						<i class="fa fa-map-marker f_left color_dark"></i>
						<p class="contact_e">浙江大学城市学院<br> 湖州街51号</p>
					</div>
					<iframe class="r_corners full_width" id="gmap_mini" src="http://api.map.baidu.com/staticimage/v2?ak=FoyQO459nc4N15gD8elhK4Ef&center=120.162264,30.334686&width=200&height=200&zoom=16"></iframe>
				</li>
				<li class="m_bottom_10">
					<div class="clearfix m_bottom_10">
						<i class="fa fa-phone f_left color_dark"></i>
						<p class="contact_e">XXXX1406</p>
					</div>
				</li>
				<li class="m_bottom_10">
					<div class="clearfix m_bottom_10">
						<i class="fa fa-envelope f_left color_dark"></i>
						<a class="contact_e default_t_color" href="mailto:#">15757101406@163.com</a>
					</div>
				</li>
				<li>
					<div class="clearfix">
						<i class="fa fa-clock-o f_left color_dark"></i>
						<p class="contact_e">周一-周五：00-20.00 <br>周六、周日: 09.00-15.00</p>
					</div>
				</li>
			</ul>
		</div>	
	</li>
</ul>

<!--login popup-->
<div class="popup_wrap d_none" id="login_popup">
	<section class="popup r_corners shadow">
		<button class="bg_tr color_dark tr_all_hover text_cs_hover close f_size_large"><i class="fa fa-times"></i></button>
		<h3 class="m_bottom_20 color_dark">登录</h3>
		<form name=lg action=login.php  method=post onsubmit="return isokok(this)">
			<ul>
				<li class="m_bottom_15">
					<label for="username" class="m_bottom_5 d_inline_b">用户名</label><br>
					<input type="text" name="username" id="username" class="r_corners full_width">
				</li>
				<li class="m_bottom_25">
					<label for="password" class="m_bottom_5 d_inline_b">密码</label><br>
					<input type="password" name="password" id="password" class="r_corners full_width">
				</li>
				<li class="m_bottom_25">
					<label for="yzm" class="m_bottom_5 d_inline_b">验证码</label><br>
					<input type="text" name="yzm" id="yzm" class="r_corners full_width">
					
				</li>
				<li class="m_bottom_25">
					<img  title="点击刷新" src="./captcha.php" align="absbottom" onclick="this.src='captcha.php?'+Math.random();"></img>
				</li>
				<li class="clearfix m_bottom_30">
					<button class="button_type_4 tr_all_hover r_corners f_left bg_scheme_color color_light f_mxs_none m_mxs_bottom_15" type="submit" id=bt1 name="bt1">登录</button>

				</li>
			</ul>
		</form>

	</section>
</div>
<div class="popup_wrap d_none" id="reg_popup">
	<section class="popup r_corners shadow">
		<button class="bg_tr color_dark tr_all_hover text_cs_hover close f_size_large"><i class="fa fa-times"></i></button>
		<h3 class="m_bottom_20 color_dark">注册</h3>
		<form name=form1 onsubmit="return isok(this)" action=save.php method=post behavior=alternate>
			<ul>
				
				<li class="m_bottom_15">
					<label for="username" class="m_bottom_5 d_inline_b">用户名</label><br>
					<input type="text" name="username" id="username" class="r_corners full_width">
				</li>
				<li class="m_bottom_15">
					<label for="xuehao" class="m_bottom_5 d_inline_b">学号</label><br>
					<input type="text" name="xuehao" id="xuehao" class="r_corners full_width">
				</li>
				<li class="m_bottom_25">
					<label for="password" class="m_bottom_5 d_inline_b">密码</label><br>
					<input type="password" name="password" id="password" class="r_corners full_width">
				</li>
				<li class="m_bottom_25">
					<label for="password2" class="m_bottom_5 d_inline_b">确认密码</label><br>
					<input type="password" name="password2" id="password2" class="r_corners full_width">
				</li>
				<li class="m_bottom_15">
					<label for="email" class="m_bottom_5 d_inline_b">邮箱</label><br>
					<input type="text" name="email" id="email" class="r_corners full_width">
				</li>
				<li class="clearfix m_bottom_30">
					<button class="button_type_4 tr_all_hover r_corners f_left bg_scheme_color color_light f_mxs_none m_mxs_bottom_15" type="submit" name="Submit">注册</button>

				</li>
			</ul>
		</form>

	</section>
</div>

<SCRIPT language=javascript>
	<!--
	function isok(theform)
	{
		if (theform.username.value=="")
		{
			alert("用户名不能为空！");
			theform.username.focus();
			return (false);
		}
		if (theform.password.value=="")
		{
			alert("密码不能为空！");
			theform.password.focus();
			return (false);
		}
		if (theform.password2.value=="")
		{
			alert("确认密码不能为空！");
			theform.password2.focus();
			return (false);
		}

		if(theform.password.value.length<6)
		{
			alert("密码不应该小于6位数！");
			theform.password.focus();
			return (false);
		}
		if (theform.password.value != theform.password2.value)
		{
			alert("两次输入的密码不同！");
			theform.password.focus();
			return (false);
		}

		if (theform.email.value=="")
		{
			alert("email不能为空！");
			theform.email.focus();
			
			return (false);
		}

		if (theform.email.value.indexOf("'",0) >= 0 || theform.email.value.indexOf(" ",0) >= 0)
		{
			alert("电子邮件中不能包含空格，单引号等非法字符！");
			theform.email.focus();
			return false;
		}
		if (theform.password.value.indexOf(" ",0) >= 0)
		{
			alert("密码中不能包含空格！");
			theform.password.focus();
			return false;
		}
		if (theform.email.value.indexOf("@",0) < 0 || theform.email.value.indexOf(".",0) < 0)
		{
			alert("邮件地址错误！");
			theform.email.focus();
			return false;
		}
		return (true);
	}
-->
</SCRIPT>

<SCRIPT language=javascript>
	<!--
	function isokok(theform)
	{
		if (theform.username.value=="")
		{
			alert("用户名不能为空！");
			theform.username.focus();
			return (false);
		}
		if (theform.password.value=="")
		{
			alert("密码不能为空！");
			theform.password.focus();
			return (false);
		}
		if (theform.yzm.value=="")
		{
			alert("请输入验证码！");
			theform.yzm.focus();
			return (false);
		}

		return (true);
	}
-->
</SCRIPT>

<button class="t_align_c r_corners type_2 tr_all_hover animate_ftl" id="go_to_top"><i class="fa fa-angle-up"></i></button>