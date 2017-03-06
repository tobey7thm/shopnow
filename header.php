<!--[if (lt IE 9) | IE 9]>
<div style="background:#fff;padding:8px 0 10px;">
<div class="container" style="width:1170px;"><div class="row wrapper"><div class="clearfix" style="padding:9px 0 0;float:left;width:83%;"><i class="fa fa-exclamation-triangle scheme_color f_left m_right_10" style="font-size:25px;color:#e74c3c;"></i><b style="color:#e74c3c;">Attention! This page may not display correctly.</b> <b>You are using an outdated version of Internet Explorer. For a faster, safer browsing experience.</b></div><div class="t_align_r" style="float:left;width:16%;"><a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode" class="button_type_4 r_corners bg_scheme_color color_light d_inline_b t_align_c" target="_blank" style="margin-bottom:2px;">Update Now!</a></div></div></div></div>
<![endif]-->
<!--markup header-->
<header role="banner" class="type_5">
	<!--header top part-->
	<section class="h_top_part">
		<div class="container">
			<div class="row clearfix">
				<div class="col-lg-4 col-md-4 col-sm-5 t_xs_align_c">
					<ul class="d_inline_b horizontal_list clearfix f_size_small users_nav">
						<?php
						if($_SESSION['user_name']=="")
						{
							?>
							<li><a href="" class="default_t_color" data-popup="#login_popup">登录</a></li>
							<li><a href="" class="default_t_color" data-popup="#reg_popup">注册</a></li>
							<?php
						}if($_SESSION['user_name']!="")
						{
							?>
							<li><a href="" class="default_t_color">欢迎<?php echo $_SESSION['user_name']?></a></li>
							<li><a href="user.php" class="default_t_color">个人中心</a></li>
							<li><a href="collect.php" class="default_t_color">我的收藏夹</a></li>
							<li><a href="logout.php" class="default_t_color">登出</a></li>
							<?php
						}
						?>
					</ul>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-2 t_align_c t_xs_align_c">
					<p class="f_size_small">联系我们： <b class="color_dark">15757101406</b></p>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-2 t_align_c t_xs_align_c">
					<a href="admin/"<p class="f_size_small"><b class="color_dark">管理员登录</b></p></a>
				</div>
			</div>
		</div>
	</section>
	<!--header bottom part-->
	<section class="h_bot_part">
		<div class="menu_wrap">
			<div class="container">
				<div class="clearfix row">
					<div class="col-lg-2 t_md_align_c m_md_bottom_15">
						<a href="index.php" class="logo d_md_inline_b">
							<img src="images/logo.png" alt="">
						</a>
					</div>
					<div class="col-lg-10 clearfix t_sm_align_c">
						<div class="clearfix t_sm_align_l f_left f_sm_none relative s_form_wrap m_sm_bottom_15 p_xs_hr_0 m_xs_bottom_5">
							<!--button for responsive menu-->
							<button id="menu_button" class="r_corners centered_db d_none tr_all_hover d_xs_block m_xs_bottom_5">
								<span class="centered_db r_corners"></span>
								<span class="centered_db r_corners"></span>
								<span class="centered_db r_corners"></span>
							</button>
							<!--main menu-->
							<nav role="navigation" class="f_left f_xs_none d_xs_none m_right_35 m_md_right_30 m_sm_right_0">	
								<ul class="horizontal_list main_menu type_2 clearfix">
									<li class="current relative f_xs_none m_xs_bottom_5 m_left_10 m_xs_left_0"><a href="index.php" class="tr_delay_hover color_dark tt_uppercase r_corners"><b>主页</b></a>
										<!--sub menu-->

									</li>
									<li class="relative f_xs_none m_xs_bottom_5 m_left_10 m_xs_left_0"><a href="news.php" class="tr_delay_hover color_dark tt_uppercase r_corners"><b>本站新闻</b></a>
										<!--sub menu-->

									</li>
                                 <?php 
									if($_SESSION['user_name']!="") { 
										?>

										<li class="relative f_xs_none m_xs_bottom_5 m_left_10 m_xs_left_0"><a href="user.php" class="tr_delay_hover color_dark tt_uppercase r_corners"><b>个人中心</b></a>
										<!--sub menu-->

									</li>
		<?php 		}  ?>
									<li class="relative f_xs_none m_xs_bottom_5 m_left_10 m_xs_left_0"><a href="ershou.php" class="tr_delay_hover color_dark tt_uppercase r_corners"><b>商品分类</b></a>
										<!--sub menu-->
										<div class="sub_menu_wrap top_arrow d_xs_none tr_all_hover clearfix r_corners w_xs_auto">
											<?php
//取顶级分类
											$sql="select * from cat where reid=0";
											$result=mysql_query($sql);
											while($data=mysql_fetch_array($result))
											{
												?>
												<div class="f_left m_left_10 m_xs_left_0 f_xs_none">
													<b class="color_dark m_left_20 m_bottom_5 m_top_5 d_inline_b"><?php echo $data[cat_name]?></b>
													<ul class="sub_menu first">
														<?php
      //根据顶级分类id取子分类
														$sql2="select * from cat where reid=$data[id]";
														$result2=mysql_query($sql2);
														while($data2=mysql_fetch_array($result2))
														{
															?>
															<li><a class="color_dark tr_delay_hover" href="ershou.php?xiaolei=<?php echo $data2[id]?>"><?php echo $data2[cat_name]?></a></li>
															<?php
														}
														?>
													</ul>
												</div>
												<?php
											}
											?>
										</div>
									</li>
									
									<li class="relative f_xs_none m_xs_bottom_5 m_left_10 m_xs_left_0"><a href="ershou.php" class="tr_delay_hover color_dark tt_uppercase r_corners"><b>所有商品</b></a>
										<!--sub menu-->
										<div class="sub_menu_wrap top_arrow d_xs_none type_2 tr_all_hover clearfix r_corners">
											<ul class="sub_menu">
												<li><a class="color_dark tr_delay_hover" href="ershou.php">最新发布</a></li>
												<li><a class="color_dark tr_delay_hover" href="hitsnum.php">最具人气</a></li>
											</ul>
										</div>
									</li>
									<?php
									if($_SESSION['user_name']!="")
									{
										?>
									<li class="relative f_xs_none m_xs_bottom_5 m_left_10 m_xs_left_0"><a href="sell.php" class="tr_delay_hover color_dark tt_uppercase r_corners"><b>发布商品</b></a>
										<!--sub menu-->
										<div class="sub_menu_wrap top_arrow d_xs_none type_2 tr_all_hover clearfix r_corners">
											<ul class="sub_menu">
												<li><a class="color_dark tr_delay_hover" href="my_goods.php">审核通过的商品</a></li>
											
												<li><a class="color_dark tr_delay_hover" href="my_goods_f.php">待审核的商品</a></li>
											</ul>
										</div>
									</li>
										<?php
									}
									?>
										<li class="relative f_xs_none m_xs_bottom_5 m_left_10 m_xs_left_0"><a href="qiugou_list.php" class="tr_delay_hover color_dark tt_uppercase r_corners"><b>求购</b></a>
										<!--sub menu-->
										<div class="sub_menu_wrap top_arrow d_xs_none type_2 tr_all_hover clearfix r_corners">
											<ul class="sub_menu">
												<li><a class="color_dark tr_delay_hover" href="qiugou_list.php">所有信息</a></li>
												<li><a class="color_dark tr_delay_hover" href="fbqiugou.php">发布求购</a></li>
												<li><a class="color_dark tr_delay_hover" href="qiugou_edit.php">我的求购</a></li>
											</ul>
										</div>
									</li>
									<li class="relative f_xs_none m_xs_bottom_5 m_left_10 m_xs_left_0"><a href="contact.php" class="tr_delay_hover color_dark tt_uppercase r_corners"><b>联系我们</b></a></li>
								</ul>
							</nav>
							<button class="f_right search_button tr_all_hover f_xs_none d_xs_none">
								<i class="fa fa-search"></i>
							</button>
							<!--search form-->
							<div class="searchform_wrap type_2 bg_tr tf_xs_none tr_all_hover w_inherit">
								<div class="container vc_child h_inherit relative w_inherit">
									<form role="search" class="d_inline_middle full_width" name=myform onSubmit="return isok(this)" action=search.php method=post>
										
										<input type="text" name=title placeholder="请输入关键字" class="f_size_large p_hr_0">
										<input class="close_search_form tr_all_hover d_xs_none color_dark" type="submit" name="button" id="button" value="搜索商品" style="margin-right:30px;">
									</form>
									<button class="close_search_form tr_all_hover d_xs_none color_dark" >
										<i class="fa fa-times"></i>
									</button>
								</div>
							</div>
						</div>
						<ul class="f_right horizontal_list d_sm_inline_b f_sm_none clearfix t_align_l site_settings">
							<?php 
							if($_SESSION['user_name']!="")
							{
								?>
								<li>
									<a role="button" href="collect.php" class="button_type_1 color_dark d_block bg_light_color_1 r_corners tr_delay_hover box_s_none"><i class="fa fa-heart-o f_size_ex_large"></i><span class="count circle t_align_c">
										<?php              
										$sql1="select id from user where (username =  '$_SESSION[user_name]' or xuehao = '$_SESSION[user_name]')";
										$result1=Connect_db($sql1);
										$data1=mysql_fetch_array($result1);

										$sql="select count(*) from goods A,collect B where B.uid = '$data1[id]' and B.pid = A.id";
										$result2=Connect_db($sql);

										if($rs=mysql_fetch_array($result2)){

											$total=$rs[0];

										}else{

											$total=0;

										}

										?>    





										<?php echo $total?></span></a>
									</li>


									<?php
								}
								?>
							</ul>
						</div>
					</div>
				</div>
				<hr class="divider_type_6">
			</div>
		</section>
	</header>