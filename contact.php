<?php
session_start();
require("./include/connect_db.php");
?>
<!doctype html>
<!--[if IE 9 ]><html class="ie9" lang="en"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->
	<head>
		<title>校园二手交易平台 - 联系我们</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<!--meta info-->
		<meta name="author" content="">
		<meta name="keywords" content="">
		<meta name="description" content="">
		<link rel="icon" type="image/ico" href="images/fav.ico">
		<!--stylesheet include-->
		<link rel="stylesheet" type="text/css" media="all" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" media="all" href="css/jquery.custom-scrollbar.css">
		<link rel="stylesheet" type="text/css" media="all" href="css/owl.carousel.css">
		<link rel="stylesheet" type="text/css" media="all" href="css/style.css">
		<!--font include-->
		<link href="css/font-awesome.min.css" rel="stylesheet">
		<style type="text/css">
    html,body{margin:0;padding:0;}
    .iw_poi_title {color:#CC5522;font-size:14px;font-weight:bold;overflow:hidden;padding-right:13px;white-space:nowrap}
    .iw_poi_content {font:12px arial,sans-serif;overflow:visible;padding-top:4px;white-space:-moz-pre-wrap;word-wrap:break-word}
</style>
		<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=pntk1uUgCL8Rt5A4qlb7qY5xnuuPosz0"></script>
	</head>
	<!--引用百度地图API-->

	<body>
		<!--wide layout-->
		<div class="wide_layout relative">
			<?php
			require("header.php");
			?>
			<!--breadcrumbs-->
			<section class="breadcrumbs">
				<div class="container">
					<ul class="horizontal_list clearfix bc_list f_size_medium">
						<li class="m_right_10 current"><a href="index.php" class="default_t_color">主页<i class="fa fa-angle-right d_inline_middle m_left_10"></i></a></li>
						<li>联系我们</li>
					</ul>
				</div>
			</section>
			<!--content-->
			<div class="page_content_offset">
				<div class="container">
					<div class="row clearfix">
						<!--left content column-->
						<section class="col-lg-9 col-md-9 col-sm-9">
							<h2 class="tt_uppercase color_dark m_bottom_25">联系我们</h2>
							<div class="r_corners photoframe map_container shadow m_bottom_45">
								<div style="width:827px;height:364px;border:#ccc solid 1px;" id="dituContent"></div>
							</div>
							<div class="row clearfix">
								<div class="col-lg-4 col-md-4 col-sm-4 m_xs_bottom_30">
									<h2 class="tt_uppercase color_dark m_bottom_25">联系方式</h2>
									<ul class="c_info_list">
										<li class="m_bottom_10">
											<div class="clearfix m_bottom_15">
												<i class="fa fa-map-marker f_left color_dark"></i>
												<p class="contact_e">杭州市拱墅区湖州街51号，<br> 浙江大学城市学院。</p>
											</div>
										</li>
										<li class="m_bottom_10">
											<div class="clearfix m_bottom_10">
												<i class="fa fa-phone f_left color_dark"></i>
												<p class="contact_e">15757101406</p>
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
								<div class="col-lg-8 col-md-8 col-sm-8 m_xs_bottom_30">
									<h2 class="tt_uppercase color_dark m_bottom_25">联系表单</h2>
									<p class="m_bottom_10">发送邮件给我们。</p>
									<form>
										<ul>
											<li class="clearfix m_bottom_15">
												<div class="f_left half_column">
													<label for="cf_name" class=" d_inline_b m_bottom_5">你的名字</label>
													<input type="text" id="cf_name" name="cf_name" class="full_width r_corners">
												</div>
												<div class="f_left half_column">
													<label for="cf_email" class=" d_inline_b m_bottom_5">Email</label>
													<input type="email" id="cf_email" name="cf_email" class="full_width r_corners">
												</div>
											</li>
											<li class="m_bottom_15">
												<label for="cf_subject" class="d_inline_b m_bottom_5">标题</label>
												<input type="text" id="cf_subject" name="cf_subject" class="full_width r_corners">
											</li>
											<li class="m_bottom_15">
												<label for="cf_message" class="d_inline_b m_bottom_5">内容</label>
												<textarea id="cf_message" name="cf_message" class="full_width r_corners"></textarea>
											</li>
											<li>
												<button class="button_type_4 bg_light_color_2 r_corners mw_0 tr_all_hover color_dark">发送</button>
											</li>
										</ul>
									</form>
								</div>
							</div>
						</section>
						<!--right column-->
						<aside class="col-lg-3 col-md-3 col-sm-3">
							<!--widgets-->
							<figure class="widget shadow r_corners wrapper m_bottom_30">
                <figcaption>
                  <h3 class="color_light">商品分类</h3>
                </figcaption>
                <div class="widget_content">
                  <!--Categories list-->
                  <ul class="categories_list">
                    <li class="active">
                      <?php
//取顶级分类
                              $sql="select * from cat where reid=0";
                              $result=mysql_query($sql);
                              while($data=mysql_fetch_array($result))
                              {
                               
                                ?>
                      <a class="f_size_large scheme_color d_block relative">
                        <b><?php echo $data[cat_name]?></b>
                        <span class="bg_light_color_1 r_corners f_right color_dark talign_c"></span>
                      </a>
                      <!--second level-->
                      <ul class="d_none">
                        <?php
      //根据顶级分类id取子分类
                                    $sql2="select * from cat where reid=$data[id]";

                                    $result2=mysql_query($sql2);
                                    while($data2=mysql_fetch_array($result2))
                                    {

                                      ?>
                        <li>
                          <a href="ershou.php?xiaolei=<?php echo $data2[id]?>" class="d_block f_size_large color_dark relative">
                           <?php echo $data2[cat_name]?>
                          </a>
                        </li>
                            <?php
                                    }
                                    ?>
                      </ul>
                          <?php
                                    }
                                    ?>
                    </li>
                </ul>
                </div>
              </figure>
						
							<!--banner-->
							<a href="" class="d_block r_corners m_bottom_30">
								<img src="images/banner_img_6.jpg" alt="">
							</a>
						</aside>
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
		<script type="text/javascript">
    //创建和初始化地图函数：
    function initMap(){
        createMap();//创建地图
        setMapEvent();//设置地图事件
        addMapControl();//向地图添加控件
    }
    
    //创建地图函数：
    function createMap(){
        var map = new BMap.Map("dituContent");//在百度地图容器中创建一个地图
        var point = new BMap.Point(120.164117,30.329039);//定义一个中心点坐标
        map.centerAndZoom(point,16);//设定地图的中心点和坐标并将地图显示在地图容器中
        window.map = map;//将map变量存储在全局
    }
    
    //地图事件设置函数：
    function setMapEvent(){
        map.enableDragging();//启用地图拖拽事件，默认启用(可不写)
        map.enableScrollWheelZoom();//启用地图滚轮放大缩小
        map.enableDoubleClickZoom();//启用鼠标双击放大，默认启用(可不写)
        map.enableKeyboard();//启用键盘上下左右键移动地图
    }
    
    //地图控件添加函数：
    function addMapControl(){
        //向地图中添加缩放控件
    var ctrl_nav = new BMap.NavigationControl({anchor:BMAP_ANCHOR_TOP_LEFT,type:BMAP_NAVIGATION_CONTROL_LARGE});
    map.addControl(ctrl_nav);
        //向地图中添加缩略图控件
    var ctrl_ove = new BMap.OverviewMapControl({anchor:BMAP_ANCHOR_BOTTOM_RIGHT,isOpen:1});
    map.addControl(ctrl_ove);
        //向地图中添加比例尺控件
    var ctrl_sca = new BMap.ScaleControl({anchor:BMAP_ANCHOR_BOTTOM_LEFT});
    map.addControl(ctrl_sca);
    }
    
    
    initMap();//创建和初始化地图
</script>
		<script src="js/jquery-2.1.0.min.js"></script>
		<script src="js/jquery-ui.min.js"></script>
		<script src="js/retina.js"></script>
		<script src="js/waypoints.min.js"></script>
		<script src="js/jquery.isotope.min.js"></script>
		<script src="js/jquery.tweet.min.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/jquery.custom-scrollbar.js"></script>
		<script src="js/scripts.js"></script>
	</body>
</html>