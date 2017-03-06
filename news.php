<?php
session_start();
require("./include/connect_db.php");
?>
<!doctype html>
<!--[if IE 9 ]><html class="ie9" lang="en"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->
  <head>
    <title>校园二手交易平台 - 新闻</title>
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
      <!--breadcrumbs-->
      <section class="breadcrumbs">
        <div class="container">
          <ul class="horizontal_list clearfix bc_list f_size_medium">
            <li class="m_right_10 current"><a href="index.php" class="default_t_color">主页<i class="fa fa-angle-right d_inline_middle m_left_10"></i></a></li>
            <li><a href="#" class="default_t_color">新闻</a></li>
          </ul>
        </div>
      </section>
      <!--content-->
      <div class="page_content_offset">
        <div class="container">
          <div class="row clearfix">
            <!--left content column-->
            <section class="col-lg-9 col-md-9 col-sm-9">
              <h2 class="tt_uppercase color_dark m_bottom_25">新闻</h2>




                <?php 
$pagesize=8; //设定每一页显示的记录数

           
    $rs = mysql_query( "select * from news"); //这里有第二个可选参数，指定打开的连接
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
$rs=mysql_query("select * from news limit $offset,$pagesize");//取得—当前页—记录集！
$curNum = mysql_num_rows($rs); //$curNum - 当前页实际记录数，for循环输出用
?> 


              <!--blog post-->
                                            <?php
  $sql3="select * from news order by datetime DESC";
  $res3=Connect_db($sql3);
$data3=mysql_fetch_array($res3);
  ?>
              <article class="m_bottom_25">
                <a href="newsinfo.php?id=<?php echo $data3[id]?>" class="d_block photoframe r_corners wrapper shadow m_bottom_25">
                  <img src="./uploads/<?php echo $data3[img]?>" class="tr_all_long_hover" alt="" style="width:828px;height:363px;">
                </a>

                <div class="row clearfix m_bottom_10">
                  <div class="col-lg-9 col-md-9 col-sm-9">
                    <h4 class="m_bottom_5"><a href="newsinfo.php?id=<?php echo $data3[id]?>" class="color_dark fw_medium">  <?php echo $data3[title]?>  </a></h4>
                    <p class="f_size_medium">   <?php echo $data3[datetime]?>   <a href="#" class="color_dark">    <?php echo $data3[fenlei]?>  </a>, <a href="" class="color_dark"><?php echo $data3[zuozhe]?>  </a></p>
                  </div>
                </div>
                <!--post content-->
                <p class="m_bottom_10"><?php echo CutString($data3[content],200) ?></p>
                <a href="newsinfo.php?id=<?php echo $data3[id]?>" class="tt_uppercase f_size_large">阅读更多</a>
              </article>


              <?php
  $sql="select * from news order by datetime DESC limit $offset,$pagesize";
  $res=Connect_db($sql);
  while($data=mysql_fetch_array($res))
  {
  ?>
              <hr class="divider_type_3 m_bottom_30">
              <article class="m_bottom_20 clearfix">
                <a href="newsinfo.php?id=<?php echo $data[id]?>" class="photoframe d_block d_xs_inline_b f_xs_none wrapper shadow f_left m_right_20 m_bottom_10 r_corners">
                  <img src="./uploads/<?php echo $data[img]?>" class="tr_all_long_hover" alt="" style="width:350px;height:220px;">
                </a>
                <div class="mini_post_content">
                  <h4 class="m_bottom_5"><a href="newsinfo.php?id=<?php echo $data[id]?>" class="color_dark fw_medium">   <?php echo $data[title]?>  </a></h4>
                  <p class="f_size_medium m_bottom_10">   <?php echo $data[datetime]?>   <a href="" class="color_dark">    <?php echo $data[fenlei]?>   </a>,<a href="" class="color_dark"><?php echo $data[zuozhe]?>   </a></p>
                  <hr>

                  <hr class="m_bottom_15">
                  <p class="m_bottom_10"><?php echo CutString($data3[content],300)?></p>
                  <a href="newsinfo.php?id=<?php echo $data[id]?>" class="tt_uppercase f_size_large">阅读更多</a>
                </div>
              </article>
                                 <?php
  }
  ?>


  



              <hr class="divider_type_3 m_bottom_10">
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
                  <!--pagination-->
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

              
              <!--banner-->
              <a href="#" class="d_block d_xs_inline_b r_corners m_bottom_30">
                <img src="images/banner_img_6.jpg" alt="">
              </a>
              <!--Popular articles-->
              <figure class="widget shadow r_corners wrapper m_bottom_30">
                <figcaption>
                  <h3 class="color_light">最新发布</h3>
                </figcaption>
                <div class="widget_content">

              <?php
  $sql="select * from news  order by datetime DESC limit 0,3";
  $res=Connect_db($sql);
  while($data=mysql_fetch_array($res))
  {
    $url="ershouinfo.php?id=$data->id";
  ?>
                  <article class="clearfix m_bottom_15">
                    <img src="./uploads/<?php echo $data[img]?>" alt="" class="f_left m_right_15 m_sm_bottom_10 f_sm_none f_xs_left m_xs_bottom_0" style="width:80px;height:80px;">
                    <a href="<?php echo $url?>" class="color_dark d_block bt_link p_vr_0"><?php echo $data[title]?></a>
                    <p class="f_size_medium"><?php echo $data[datetime]?></p>
                  </article>

                  <hr class="m_bottom_15">
                                                 <?php
  }
  ?>

                </div>
              </figure>
              <!--Bestsellers-->
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