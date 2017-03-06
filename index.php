<?php
session_start();
require("./include/connect_db.php");
?>
<!doctype html>
<!--[if IE 9 ]><html class="ie9" lang="en"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->
<head>
	<title>校园二手交易平台 - 主页</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<!--meta info-->
	<meta name="author" content="">
	<meta name="keywords" content="">
	<meta name="description" content="">
	<link rel="icon" type="image/ico" href="images/fav.ico">
	<!--stylesheet include-->
	<link rel="stylesheet" type="text/css" media="all" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" media="all" href="css/settings.css">
	<link rel="stylesheet" type="text/css" media="all" href="css/owl.carousel.css">
	<link rel="stylesheet" type="text/css" media="all" href="css/owl.transitions.css">
	<link rel="stylesheet" type="text/css" media="all" href="css/jquery.custom-scrollbar.css">
	<link rel="stylesheet" type="text/css" media="all" href="css/style.css">
	<!--font include-->
	<link href="css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
	<!--boxed layout-->
	<div class="wide_layout relative w_xs_auto">
		<?php
		require("header.php");
		?>
		<!--slider-->
		<section class="revolution_slider">
			<div class="r_slider">
				<ul>
					<li class="f_left" data-transition="cube" data-slotamount="7" data-custom-thumb="images/slide_03.jpg">
						<img src="images/fw_slide_01.jpg" alt="" data-bgrepeat="no-repeat" data-bgfit="cover" data-bgposition="center center" style="width:1903;height:480px;">
						<div class="caption lft ltt" data-x="center" data-y="58" data-speed="1500" data-start="1200" data-easing="easeOutBounce">
							<img src="images/slider_layer_img.png" alt="">
						</div>
						<div class="caption sfb stb color_light slider_title tt_uppercase t_align_c" data-x="center" data-y="246" data-speed="1000" data-easing="ease" data-start="2500"><b class="color_dark">总有你所需的</b></div>
						<div class="caption sfb stb color_light" data-x="center" data-y="352" data-speed="1000" data-start="2900">
							<a href="ershou.php" role="button" class="button_type_4 bg_scheme_color color_light r_corners tt_uppercase">赶紧购买</a>
						</div>
					</li>
					<li class="f_left" data-transition="curtain-1" data-slotamount="7" data-custom-thumb="images/slide_02.jpg">
						<img src="images/fw_slide_03.jpg" alt="" data-bgrepeat="no-repeat" data-bgfit="cover" data-bgposition="center center" style="width:1903;height:480px;">
						<div class="caption sfl str f_size_large color_light tt_uppercase slider_title_3" data-x="736" data-y="97" data-speed="500" data-start="2500">浙江大学城市学院</div>
						<div class="caption sfr stl slider_divider" data-x="787" data-y="129" data-speed="500" data-start="2500"></div>
						<div class="caption lft stb color_light slider_title tt_uppercase t_align_c" data-x="588" data-y="140" data-speed="1500" data-easing="easeOutBounce"><b>校园二手交易平台<br>同学们快来！</b></div>
						<div class="caption sft stb color_light slider_title_2" data-x="761" data-y="272" data-speed="900" data-start="2300"><b>火爆进行中</b></div>
						<div class="caption sft stb color_light" data-x="742" data-y="335" data-speed="900" data-start="2600">
							<a href="ershou.php" role="button" class="button_type_4 bg_scheme_color color_light r_corners tt_uppercase">查看</a>
						</div>
					</li>
					<li class="f_left" data-transition="cube" data-slotamount="7" data-custom-thumb="images/slide_01.jpg">
						<img src="images/fw_slide_02.jpg" alt="" data-bgrepeat="no-repeat" data-bgfit="cover" data-bgposition="center center" style="width:1903;height:480px;">
						<div class="caption lft ltb f_size_large tt_uppercase slider_title_3 scheme_color" data-x="264" data-y="126" data-speed="300" data-start="1700">ZUCC</div>
						<div class="caption sfb stt slider_divider type_2" data-x="298" data-y="153" data-speed="400" data-start="1700"></div>
						<div class="caption lft ltb color_light slider_title tt_uppercase t_align_c" data-x="95" data-y="170" data-speed="500" data-easing="ease" data-start="1400"><b><span class="scheme_color">春夏二手交易狂潮已经来临</span><br><span class="color_dark">快来吧！</span></b></div>
						<div class="caption lfb ltt color_light" data-x="206" data-y="318" data-speed="500" data-start="1700">
							<a href="ershou.php" role="button" class="button_type_4 bg_scheme_color color_light r_corners tt_uppercase">查看详细</a>
						</div>
					</li>

				</ul>
			</div>
		</section>
		<!--content-->
		<div class="page_content_offset">
			<div class="container">
				<!--banners-->
				<div class="row clearfix m_xs_bottom_30">
					<div class="col-lg-4 col-md-4 col-sm-4 m_bottom_50 m_xs_bottom_0">
						<a href="ershou.php" class="d_block animate_ftb h_md_auto m_xs_bottom_15 banner_type_2 r_corners red t_align_c tt_uppercase vc_child n_sm_vc_child">
							<span class="d_inline_middle">
								<img class="d_inline_middle m_md_bottom_5" src="images/banner_img_3.png" alt="">
								<span class="d_inline_middle m_left_10 t_align_l d_md_block t_md_align_c">
									<b>最流行的绿色理念</b><br><span class="color_dark">Come on!</span>
								</span>
							</span>
						</a>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4">
						<a href="ershou.php" class="d_block animate_ftb h_md_auto m_xs_bottom_15 banner_type_2 r_corners green t_align_c tt_uppercase vc_child n_sm_vc_child">
							<span class="d_inline_middle">
								<img class="d_inline_middle m_md_bottom_5" src="images/4.png" alt="">
								<span class="d_inline_middle m_left_10 t_align_l d_md_block t_md_align_c">
									<b>最全面的二手平台</b><br><span class="color_dark">应有尽有</span>
								</span>
							</span>
						</a>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4">
						<a href="ershou.php" class="d_block animate_ftb h_md_auto banner_type_2 r_corners orange t_align_c tt_uppercase vc_child n_sm_vc_child">
							<span class="d_inline_middle">
								<img class="d_inline_middle m_md_bottom_5" src="images/banner_img_5.png" alt="">
								<span class="d_inline_middle m_left_10 t_align_l d_md_block t_md_align_c">
									<b>最丰富的物品种类</b><br><span class="color_dark">赶紧购买!</span>
								</span>
							</span>
						</a>
					</div>
				</div>
				<!--filter navigation-->
				<div class="clearfix">
					<ul class="horizontal_list clearfix tt_uppercase isotope_menu f_size_ex_large f_left f_xs_none m_xs_bottom_15" data-carousel-filter=".wfilter_carousel">
						<li class="active m_right_5 m_bottom_10 m_xs_bottom_5 animate_ftr"><button class="button_type_2 bg_light_color_1 r_corners tr_delay_hover tt_uppercase box_s_none" data-filter="*">所有</button></li>
						<li class="m_right_5 m_bottom_10 m_xs_bottom_5 animate_ftr"><button class="button_type_2 bg_light_color_1 r_corners tr_delay_hover tt_uppercase box_s_none" data-filter="filter_class_hit">最具人气</button></li>
						<li class="m_right_5 m_bottom_10 m_xs_bottom_5 animate_ftr"><button class="button_type_2 bg_light_color_1 r_corners tr_delay_hover tt_uppercase box_s_none" data-filter="filter_class_new">最新发布</button></li>
					</ul>
					<div class="f_right clearfix nav_buttons_wrap f_mxs_none m_mxs_bottom_5 f_xs_none">
						<button class="button_type_7 bg_cs_hover box_s_none f_size_ex_large t_align_c bg_light_color_1 f_left tr_delay_hover r_corners wfilter_prev"><i class="fa fa-angle-left"></i></button>
						<button class="button_type_7 bg_cs_hover box_s_none f_size_ex_large t_align_c bg_light_color_1 f_left m_left_5 tr_delay_hover r_corners wfilter_next"><i class="fa fa-angle-right"></i></button>
					</div>
				</div>
				<!--carousel with filter-->
				<div class="wfilter_carousel m_bottom_30 m_xs_bottom_15">

					<?php
					$sql="select * from goods where delstates=0 and ud=0 order by addtime DESC";
					$result=Connect_db($sql);

					while($data=mysql_fetch_object($result))
					{
						$xian=$data->price;
						$url="ershouinfo.php?id=$data->id";


						?>    

						<figure class="r_corners photoframe shadow relative tr_all_hover animate_ftb long filter_class_new">
							<!--product preview-->
							<a href="<?php echo $url?>" class="d_block relative wrapper pp_wrap">
								<span class="hot_stripe"><img src="images/sale_product.png" alt=""></span>
								<img src="./uploads/<?php echo $data->path;?>" class="tr_all_hover" alt="" style="width:242px;height:242px;">

							</a>
							<!--description and price of product-->
							<figcaption>
								<h5 class="m_bottom_10"><a href="#" class="color_dark ellipsis"><?php echo CutString($data->title,26);?></a></h5>
								<div class="clearfix m_bottom_15">
									<p class="scheme_color f_size_large f_left">￥<?php echo $data->price;?></p>

								</div>
								<div class="clearfix">
									<a href="<?php echo $url?>"><button class="button_type_4 bg_scheme_color r_corners tr_all_hover color_light f_left mw_0">查看详情</button></a>
									<a href="collect_add.php?id=<?php echo $data->id;?>"><button class="button_type_4 bg_light_color_2 tr_all_hover f_right r_corners color_dark mw_0 p_hr_0 d_md_none"><i class="fa fa-heart-o"></i></button></a>
								</div>
							</figcaption>
						</figure>


						<?php
					}
					?>


					<?php
					$sql="select * from goods where delstates=0 and ud=0 order by hitsnum DESC";
					$result=Connect_db($sql);

					while($data=mysql_fetch_object($result))
					{
						$xian=$data->price;
						$url="ershouinfo.php?id=$data->id";


						?>   	
						<figure class="r_corners photoframe shadow relative tr_all_hover animate_ftb long filter_class_hit">
							<!--product preview-->
							<a href="<?php echo $url?>" class="d_block relative wrapper pp_wrap">
								<span class="hot_stripe"><img src="images/hot_product.png" alt=""></span>
								<img src="./uploads/<?php echo $data->path;?>" class="tr_all_hover" alt="" style="width:242px;height:242px;">

							</a>
							<!--description and price of product-->
							<figcaption>
								<h5 class="m_bottom_10"><a href="#" class="color_dark ellipsis"><?php echo CutString($data->title,26);?></a></h5>
								<div class="clearfix m_bottom_15">
									<p class="scheme_color f_size_large f_left">￥<?php echo $data->price;?></p>

								</div>
								<div class="clearfix">
									<a href="<?php echo $url?>"><button class="button_type_4 bg_scheme_color r_corners tr_all_hover color_light f_left mw_0">查看详情</button></a>
									<a href="collect_add.php?id=<?php echo $data->id;?>"><button class="button_type_4 bg_light_color_2 tr_all_hover f_right r_corners color_dark mw_0 p_hr_0 d_md_none"><i class="fa fa-heart-o"></i></button></a>
								</div>
							</figcaption>
						</figure>
						<?php
					}
					?>
				</div>
				<!--blog-->
				<div class="row clearfix m_bottom_45 m_md_bottom_35 m_xs_bottom_30">
					<div class="col-lg-6 col-md-6 col-sm-12 m_sm_bottom_35 blog_animate animate_ftr">
						<div class="clearfix m_bottom_25 m_sm_bottom_20">
							<h2 class="tt_uppercase color_dark f_left">网站新闻</h2>
							<div class="f_right clearfix nav_buttons_wrap">
								<button class="button_type_7 bg_cs_hover box_s_none f_size_ex_large bg_light_color_1 f_left tr_delay_hover r_corners blog_prev"><i class="fa fa-angle-left"></i></button>
								<button class="button_type_7 bg_cs_hover box_s_none f_size_ex_large bg_light_color_1 f_left m_left_5 tr_delay_hover r_corners blog_next"><i class="fa fa-angle-right"></i></button>
							</div>
						</div>
						<!--blog carousel-->
						<div class="blog_carousel">
							<?php
							$sql="select * from news order by datetime DESC";
							$res=Connect_db($sql);
							while($data=mysql_fetch_array($res))
							{
								?>
								<div class="clearfix">
									<!--image-->
									<a href="newsinfo.php?id=<?php echo $data[id]?>" class="d_block photoframe relative shadow wrapper r_corners f_left m_right_20 animate_ftt f_mxs_none m_mxs_bottom_10">
										<img class="tr_all_long_hover" src="./uploads/<?php echo $data[img];?>" alt="" style="width:243px;height:180px;">
									</a>
									<!--post content-->
									<div class="mini_post_content">
										<h4 class="m_bottom_5 animate_ftr"><a href="newsinfo.php?id=<?php echo $data[id]?>" class="color_dark"><b><?php echo $data[title]?></b></a></h4>
										<p class="f_size_medium m_bottom_10 animate_ftr"><?php echo $data[datetime]?></p>
										<p class="m_bottom_10 animate_ftr"><?php echo CutString($data[content],150);?></p>
										<a class="tt_uppercase f_size_large animate_ftr" href="newsinfo.php?id=<?php echo $data[id]?>">了解更多</a>
									</div>
								</div>
								<?php
							}
							?>
						</div>
					</div>
					<!--testimonials-->
					<div class="col-lg-6 col-md-6 col-sm-12 ti_animate animate_ftr">
						<div class="clearfix m_bottom_25 m_sm_bottom_20">
							<h2 class="tt_uppercase color_dark f_left f_mxs_none m_mxs_bottom_15">商品留言</h2>
							<div class="f_right clearfix nav_buttons_wrap f_mxs_none">
								<button class="button_type_7 bg_cs_hover box_s_none f_size_ex_large bg_light_color_1 f_left tr_delay_hover r_corners ti_prev"><i class="fa fa-angle-left"></i></button>
								<button class="button_type_7 bg_cs_hover box_s_none f_size_ex_large bg_light_color_1 f_left m_left_5 tr_delay_hover r_corners ti_next"><i class="fa fa-angle-right"></i></button>
							</div>
						</div>
						<!--testimonials carousel-->
						<div class="testiomials_carousel">
							<?php
							$sql1="select * from liuyan order by addtime DESC";
							$res1=Connect_db($sql1);
							while($liuyan=mysql_fetch_array($res1))
							{
								?>

								<div>
									<blockquote class="r_corners shadow f_size_large relative m_bottom_15 "><?php echo CutString($liuyan[content],30)?></blockquote>
									<img class="circle m_left_20 d_inline_middle " src="images/men.png" alt="" style="width:70px;height:70px;">
									<div class="d_inline_middle m_left_15 ">
										<h5 class="color_dark"><b><?php echo $liuyan[uname]?></b></h5>
										<p><?php echo $liuyan[title]?></p>
									</div>
								</div>
								<?php
							}
							?>
						</div>
					</div>
				</div>
				<div class="clearfix">
					<h2 class="color_dark tt_uppercase f_left m_bottom_15 f_mxs_none heading5 animate_ftr">人气商品</h2>
					<div class="f_right clearfix nav_buttons_wrap f_mxs_none m_mxs_bottom_5 animate_fade">
						<button class="button_type_7 bg_cs_hover box_s_none f_size_ex_large t_align_c bg_light_color_1 f_left tr_delay_hover r_corners bestsellers_prev"><i class="fa fa-angle-left"></i></button>
						<button class="button_type_7 bg_cs_hover box_s_none f_size_ex_large t_align_c bg_light_color_1 f_left m_left_5 tr_delay_hover r_corners bestsellers_next"><i class="fa fa-angle-right"></i></button>
					</div>
				</div>
				<!--bestsellers carousel-->
				<div class="bestsellers_carousel m_bottom_30 m_xs_bottom_15">
					<?php
					$sql="select * from goods where delstates=0 and ud=0 order by hitsnum DESC";
					$result=Connect_db($sql);

					while($data=mysql_fetch_object($result))
					{
						$xian=$data->price;
						$url="ershouinfo.php?id=$data->id";


						?>   	
						<figure class="r_corners photoframe shadow relative tr_all_hover animate_ftb long">
							<!--product preview-->
							<a href="<?php echo $url?>" class="d_block relative wrapper pp_wrap">
								<span class="hot_stripe"><img src="images/hot_product.png" alt=""></span>
								<img src="./uploads/<?php echo $data->path;?>" class="tr_all_hover" alt="" style="width:242;height:242px;">

							</a>
							<!--description and price of product-->
							<figcaption>
								<h5 class="m_bottom_10"><a href="#" class="color_dark ellipsis"><?php echo CutString($data->title,26);?></a></h5>
								<div class="clearfix m_bottom_15">
									<p class="scheme_color f_size_large f_left">￥<?php echo $data->price;?></p>

								</div>
								<div class="clearfix">
									<a href="<?php echo $url?>"><button class="button_type_4 bg_scheme_color r_corners tr_all_hover color_light f_left mw_0">查看详情</button></a>
									<a href="collect_add.php?id=<?php echo $data->id;?>"><button class="button_type_4 bg_light_color_2 tr_all_hover f_right r_corners color_dark mw_0 p_hr_0 d_md_none"><i class="fa fa-heart-o"></i></button></a>
								</div>
							</figcaption>
						</figure>
						<?php
					}
					?>
				</div>
				<!--banners-->
				<section class="row clearfix m_bottom_45 m_sm_bottom_35">
					<div class="col-lg-6 col-md-6 col-sm-6 animate_half_tc">
						<a href="ershou.php" class="d_block banner wrapper r_corners relative m_xs_bottom_30">
							<img src="images/banner_img_1.jpg" alt="" style="width:550px;height:220px;">
							<span class="banner_caption d_block vc_child t_align_c w_sm_auto">
								<span class="d_inline_middle">
									<span class="d_block color_dark tt_uppercase m_bottom_5 let_s">好消息！</span>
									<span class="d_block divider_type_2 centered_db m_bottom_5"></span>
									<span class="d_block color_light tt_uppercase m_bottom_15 banner_title"><b>二手商品热卖中</b></span>
									<span class="button_type_6 bg_scheme_color tt_uppercase r_corners color_light d_inline_b tr_all_hover box_s_none f_size_ex_large">赶快购买！</span>
								</span>
							</span>
						</a>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 animate_half_tc">
						<a href="ershou.php" class="d_block banner wrapper r_corners type_2 relative">
							<img src="images/banner_img_2.jpg" alt="" style="width:550px;height:220px;">
							<span class="banner_caption d_block vc_child t_align_c w_sm_auto">
								<span class="d_inline_middle">
									<span class="d_block scheme_color banner_title type_2 m_bottom_0 m_mxs_bottom_5"><b>热</b></span>
									<span class="d_block divider_type_2 centered_db m_bottom_0 d_sm_none"></span>
									<span class="d_block color_light tt_uppercase m_bottom_15 m_md_bottom_5 d_mxs_none">闲置书籍<br><b>二手课本</b></span>
									<span class="button_type_6 bg_dark_color tt_uppercase r_corners color_light d_inline_b tr_all_hover box_s_none f_size_ex_large">浏览商品</span>
								</span>
							</span>
						</a>
					</div>
				</section>
				<!--product brands-->
				<div class="clearfix m_bottom_25 m_sm_bottom_20">
					<h2 class="tt_uppercase color_dark f_left heading2 animate_fade f_mxs_none m_mxs_bottom_15">友情链接</h2>
					<div class="f_right clearfix nav_buttons_wrap animate_fade f_mxs_none">
						<button class="button_type_7 bg_cs_hover box_s_none f_size_ex_large t_align_c bg_light_color_1 f_left tr_delay_hover r_corners pb_prev"><i class="fa fa-angle-left"></i></button>
						<button class="button_type_7 bg_cs_hover box_s_none f_size_ex_large t_align_c bg_light_color_1 f_left m_left_5 tr_delay_hover r_corners pb_next"><i class="fa fa-angle-right"></i></button>
					</div>
				</div>
				<!--product brands carousel-->
				<div class="product_brands m_sm_bottom_35 m_xs_bottom_0">
					<a href="http://www.alipay.com/" class="d_block t_align_c animate_fade"><img src="./images/alipay.svg" alt=""></a>
					<a href="http://taobao.com/" class="d_block t_align_c animate_fade"><img src="./images/taobao.svg" alt=""></a>
					<a href="https://tmall.com/" class="d_block t_align_c animate_fade"><img src="./images/tmall.svg" alt=""></a>
					<a href="http://www.uc.cn/" class="d_block t_align_c animate_fade"><img src="./images/uc.svg" alt=""></a>
					<a href="https://cnodejs.org/" class="d_block t_align_c animate_fade"><img src="./images/cnodejs.svg" alt=""></a>
					<a href="https://www.teambition.com/" class="d_block t_align_c animate_fade"><img src="./images/teambitio.png" alt=""></a>
			<a href="http://www.alipay.com/" class="d_block t_align_c animate_fade"><img src="./images/alipay.svg" alt=""></a>
			<a href="http://taobao.com/" class="d_block t_align_c animate_fade"><img src="./images/taobao.svg" alt=""></a>
				</div>
			</div>
		</div>
		<!--markup footer-->
		<?php
		require("foot.php");
		?>
	</div>
	<?php
	require("bottom.php");
	?>
	<!--scripts include-->
	<script src="js/jquery-2.1.0.min.js"></script>
	<script src="js/retina.js"></script>
	<script src="js/jquery.themepunch.plugins.min.js"></script>
	<script src="js/jquery.themepunch.revolution.min.js"></script>
	<script src="js/waypoints.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.tweet.min.js"></script>
	<script src="js/jquery.custom-scrollbar.js"></script>
	<script src="js/scripts.js"></script>

</body>
</html>