<?php
session_start();
require("./include/connect_db.php");
?>
<!doctype html>
<!--[if IE 9 ]><html class="ie9" lang="en"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->
  <head>
    <title>校园二手交易平台 - 求购详情</title>
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
            <li class="m_right_10 current"><a href="qiugou_list.php" class="default_t_color">求购列表<i class="fa fa-angle-right d_inline_middle m_left_10"></i></a></li>
            <li>求购详情</li>
          </ul>
        </div>
      </section>
      <!--content-->
      <div class="page_content_offset">
        <div class="container">
          <div class="row clearfix">

              <?php
              $sql="select * from qiugou where id=$id";
$result=Connect_db($sql);
$data=mysql_fetch_array($result);
?>
            <!--left content column-->
            <section class="col-lg-9 col-md-9 col-sm-9">
              <ul class="horizontal_list clearfix m_bottom_12">
  <li class="m_right_5">
                  <a href="fbqiugou.php"><button class="tr_delay_hover r_corners button_type_12 color_dark bg_light_color_2 f_size_large">我要发布求购</button></a>
                </li>
</ul>
              <h2 class="tt_uppercase color_dark m_bottom_25"><?php echo $data[title];?></h2>


<div class="m_bottom_45">
  <!--comment first level-->
                <div class="clearfix comment_wrap m_bottom_25">
                  <!--comment author photo-->
                  <img src="images/men.png" class="f_left circle" alt="">
                  <div class="comment_content_wrap">
                    <header class="m_bottom_5">
                      <a href="#" class="color_dark"><b><?php echo $data[zuozhe];?></b></a> - <?php echo $data[addtime];?>
              
                    </header>
                    <div class="comment relative bg_light_color_3 r_corners shadow"><?php echo $data[content];?></div>
                  </div>
                </div>
                </div>
<ul class="vertical_list_type_2 m_left_20">
                  <li class="m_bottom_15">地址：<?php echo $data[address];?></li>
                  <li class="m_bottom_15">电话<?php echo $data[tel];?></li>
                  <li class="m_bottom_15">qq：<?php echo $data[qq];?></li>
                  <li class="m_bottom_15">Email：<?php echo $data[email];?></li>
                </ul>


            </section>
             <!--right column-->
            <aside class="col-lg-3 col-md-3 col-sm-3">

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