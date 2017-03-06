<?php
session_start();
require("./include/connect_db.php");
?>
<!doctype html>
<!--[if IE 9 ]><html class="ie9" lang="en"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->
  <head>
    <title>校园二手交易平台 - 求购</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <!--meta info-->
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="icon" type="image/ico" href="images/fav.ico">
    <!--stylesheet include-->
    <link rel="stylesheet" type="text/css" media="all" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" media="all" href="css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" media="all" href="css/owl.transitions.css">
    <link rel="stylesheet" type="text/css" media="all" href="css/style.css">
    <!--font include-->
    <link href="css/font-awesome.min.css" rel="stylesheet">
  </head>
  <body>
    <!--wide layout-->
    <div class="wide_layout relative">
     <?php
     require("header.php");
     ?>
   <?php 
$pagesize=10; //设定每一页显示的记录数

      $where = "" ;
      if($title!="") $where = " where title like '%$title%' or content like '%$title%'";
           
    $rs = mysql_query( "select * from qiugou $where order by addtime DESC"); //这里有第二个可选参数，指定打开的连接
//-----------------------------------------------------------------------------------------------//
//分页逻辑处理
//-----------------------------------------------------------------------------------------------
    $tmpArr = mysql_fetch_array($rs);
$numAL = mysql_num_rows($rs); //取得记录总数$rs
$pages=intval($numAL/$pagesize); //计算总页数

if ($numAL % $pagesize) $pages++;

//设置缺省页码
//↓判断“当前页码”是否赋值过
if (isset($_GET['page'])){ $page=intval($_GET['page']); }else{ $page=1; }//否则，设置为第一页

//↓计算记录偏移量
$offset=$pagesize*($page - 1);

//↓读取指定记录数
$rs=mysql_query("select * from qiugou $where order by addtime DESC limit $offset,$pagesize");//取得—当前页—记录集！
$curNum = mysql_num_rows($rs); //$curNum - 当前页实际记录数，for循环输出用
?> 

     <!--breadcrumbs-->
      <section class="breadcrumbs">
        <div class="container">
          <ul class="horizontal_list clearfix bc_list f_size_medium">
            <li class="m_right_10 current"><a href="index.php" class="default_t_color">主页<i class="fa fa-angle-right d_inline_middle m_left_10"></i></a></li>
            <li>求购</li>
          </ul>
        </div>
      </section>
      <!--content-->
      <div class="page_content_offset">
        <div class="container">
          <div class="row clearfix">
            <!--left content column-->
            <section class="col-lg-9 col-md-9 col-sm-9">
            	<ul class="horizontal_list clearfix m_bottom_12">
  <li class="m_right_5">

                  <a href="fbqiugou.php"><button class="tr_delay_hover r_corners button_type_12 color_dark bg_light_color_2 f_size_large">我要发布求购</button></a>
                </li>
</ul>
              <h2 class="tt_uppercase color_dark m_bottom_25">求购信息</h2>
							<div class="m_bottom_45">
								<?php
     $where = "" ;
      if($title!="") $where = " where title like '%$title%' or content like '%$title%'";
           $sql="select * from qiugou $where order by addtime DESC limit $offset,$pagesize";
           $result=Connect_db($sql);

           while($data=mysql_fetch_array($result))
           {


            ?>
								<!--comment first level-->
								<div class="clearfix comment_wrap m_bottom_25">
									<!--comment author photo-->
									<img src="images/men.png" class="f_left circle" alt="">
									<div class="comment_content_wrap">
										<header class="m_bottom_5">
											<a href="#" class="color_dark"><b><?php echo $data[zuozhe];?></b></a> - <?php echo $data[addtime];?>
											<a href="qiugouinfo.php?id=<?php echo $data[id]?>" class="f_right color_dark">查看详情</a>
										</header>
										<div class="comment relative bg_light_color_3 r_corners shadow"><?php echo CutString($data[title],100);?></div>
									</div>
								</div>
								<?php 
}
?>
							</div>
							<hr class="m_bottom_10 divider_type_3">
              <div class="row clearfix m_xs_bottom_30">
                <div class="col-lg-7 col-md-7 col-sm-7 col-xs-5">
                  <p class="d_inline_middle f_size_medium"><?php echo"共有".$pages."页(".$page."/".$pages.")"?></p>
                </div>
                                    <?php
//============================//
// 翻页显示 一 
//============================//

$first=1;
$prev=$page-1; 
$next=$page+1;
$last=$pages;
?>
                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-7 t_align_r">
                    <?php if ($page > 1) {
                
                 echo " <a role='button' href='?page=".$prev."' class='f_size_large button_type_10 color_dark d_inline_middle bg_cs_hover bg_light_color_1 t_align_c tr_delay_hover r_corners box_s_none'><i class='fa fa-angle-left'></i></a>";
                  
                } ?> 
                <?php   if ($page < $pages){

                  echo " <a role='button' href='?page=".$next."' class='f_size_large button_type_10 color_dark d_inline_middle bg_cs_hover bg_light_color_1 t_align_c tr_delay_hover r_corners box_s_none'><i class='fa fa-angle-right'></i></a>";
                }
                 ?>
                </div>
              </div>
							</section>
 <!--right column-->
            <aside class="col-lg-3 col-md-3 col-sm-3">
 <figure class="widget shadow r_corners wrapper m_bottom_30">
  <figcaption>
    <h3 class="color_light">搜索求购信息</h3>
  </figcaption>
  <div class="widget_content">
    <!--filter form-->
    <form name="form1" method="get" onsubmit="return isok(this)" action="?title=<?php echo $title?>">
    <fieldset class="m_bottom_25">
      <legend class="default_t_color f_size_large m_bottom_15 clearfix full_width relative">
        <b class="f_left">输入标题</b>
        <button type="button" class="f_size_medium f_right color_dark bg_tr tr_all_hover close_fieldset"><i class="fa fa-times lh_inherit"></i></button>
      </legend>
      <div class="clearfix">
        <input type="text" name="title" class="r_corners f_left type_6">
      </div>
    </fieldset>
    <button type="reset"  class="color_dark bg_tr text_cs_hover tr_all_hover"><i class="fa fa-refresh lh_inherit m_right_10"></i>重置</button>
    <button type="submit"  class="color_dark bg_tr text_cs_hover tr_all_hover"><i class="fa fa-arrow-right lh_inherit m_right_10"></i>确定</button>
  </form>
</div>
</figure>
               <!--Specials-->
              <figure class="widget shadow r_corners wrapper m_bottom_30">
                <figcaption class="clearfix relative">
                  <h3 class="color_light f_left f_sm_none m_sm_bottom_10 m_xs_bottom_0">人气商品</h3>
                  <div class="f_right nav_buttons_wrap_type_2 tf_sm_none f_sm_none clearfix">
                    <button class="button_type_7 bg_cs_hover box_s_none f_size_ex_large color_light t_align_c bg_tr f_left tr_delay_hover r_corners sc_prev"><i class="fa fa-angle-left"></i></button>
                    <button class="button_type_7 bg_cs_hover box_s_none f_size_ex_large color_light t_align_c bg_tr f_left m_left_5 tr_delay_hover r_corners sc_next"><i class="fa fa-angle-right"></i></button>
                  </div>
                </figcaption>
                <div class="widget_content">
                  <div class="specials_carousel">
                    <!--carousel item-->
                    <?php
              $sql="select * from goods where delstates=0 and ud=0 order by hitsnum DESC";
              $result=Connect_db($sql);

              while($data=mysql_fetch_object($result))
              {
                $url="ershouinfo.php?id=$data->id";


                ?>    
                    <div class="specials_item">
                      <a href="<?php echo $url?>" class="d_block d_xs_inline_b wrapper m_bottom_20">
                        <img class="tr_all_long_hover" src="./uploads/<?php echo $data->path;?>" alt="" style="width:242px;height:242px;">
                      </a>
                      <h5 class="m_bottom_10"><a href="#" class="color_dark"><?php echo CutString($data->title,26);?></a></h5>
                      <p class="f_size_large m_bottom_15"><span class="scheme_color">￥<?php echo $data->price;?></span></p>
                     <a href="<?php echo $url?>"> <button class="button_type_4 mw_sm_0 r_corners color_light bg_scheme_color tr_all_hover m_bottom_5">购买</button></a>
                    </div>

                            <?php
              }
              ?>
                  </div>
                </div>
              </figure>
              <!--banner-->
              <a href="#" class="d_block d_xs_inline_b r_corners m_bottom_30">
                <img src="images/banner_img_6.jpg" alt="">
              </a>
 <figure class="widget shadow r_corners wrapper m_bottom_30">
                <figcaption>
                  <h3 class="color_light">二手商品</h3>
                </figcaption>
                <div class="widget_content">

                                <?php
  $sql="select * from goods where delstates=0 and ud=0 order by addtime DESC limit 0,3";
  $res=Connect_db($sql);
  while($data=mysql_fetch_object($res))
  {
    $url="ershouinfo.php?id=$data->id";
  ?>
                  <div class="clearfix m_bottom_15">
                    <img src="./uploads/<?php echo $data->path;?>" alt="" class="f_left m_right_15 m_sm_bottom_10 f_sm_none f_xs_left m_xs_bottom_0" style="width:80px;height:80px;">
                    <a href="<?php echo $url?>" class="color_dark d_block bt_link"><?php echo $data->title;?></a>

                    <p class="scheme_color">￥<?php echo $data->price;?></p>
                  </div>
                  <hr class="m_bottom_15">
                                                            <?php
  }
  ?>      

                </div>
              </figure>


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
<SCRIPT language=javascript>
<!--
function isok(theform)
{
  if (theform.title.value=="")
  {
    alert("请输入标题！");
    theform.pricef.focus();
    return (false);
  }
  return (true);
}
-->
</SCRIPT>
    <!--scripts include-->
    <script src="js/jquery-2.1.0.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/retina.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.tweet.min.js"></script>
    <script src="js/styleswitcher.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>