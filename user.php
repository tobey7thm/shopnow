<?php
session_start();
require("./include/connect_db.php");
?>
<!doctype html>
<!--[if IE 9 ]><html class="ie9" lang="en"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->
  <head>
    <title>校园二手交易平台 - 个人中心</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <!--meta info-->
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="icon" type="image/ico" href="images/fav.ico">
    <!--stylesheet include-->
    <link rel="stylesheet" type="text/css" media="all" href="css/bootstrap.min.css">
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
            <li><a href="" class="default_t_color">个人中心</a></li>
          </ul>
        </div>
      </section>
      <!--content-->
      <div class="page_content_offset">
        <div class="container">
          <div class="row clearfix">
            <!--left content column-->
            <section class="col-lg-9 col-md-9 col-sm-9">
              <h2 class="tt_uppercase color_dark m_bottom_30">欢迎<?php echo $_SESSION['user_name']?></h2>
              <div class="clearfix m_bottom_30">
                <figure>
                  <div class="photoframe shadow wrapper f_left f_xs_none d_xs_inline_b m_right_30 r_corners m_sm_bottom_10">
                    <img class="tr_all_long_hover" src="images/men.png" alt="">
                  </div>
                 
                    <ul class="horizontal_list clearfix m_bottom_12">
                <li class="m_right_5 m_sm_bottom_5">
                  <a href="sell.php"><button class="tr_delay_hover r_corners button_type_14 color_dark bg_light_color_2">
                    <i class="fa fa-pencil m_right_6"></i>
                    发布商品
                  </button></a>
                </li>
                <li class="m_right_5 m_sm_bottom_5">
                  <a href="collect.php"><button class="tr_delay_hover r_corners button_type_14 bg_scheme_color color_light">
                    <i class="fa fa-shopping-cart m_right_6"></i>
                    我的收藏夹
                  </button></a>
                </li>
                <li class="m_right_5 m_sm_bottom_5">
                  <a href="my_goods.php"><button class="tr_delay_hover r_corners button_type_14 bg_color_blue color_light">
                    <i class="fa fa-info-circle m_right_6"></i>
                    发布的商品（已过审）
                  </button></a>
                </li>
                <li class="m_right_5 m_sm_bottom_5">
                  <a href="my_goods_f.php"><button class="tr_delay_hover r_corners button_type_14 color_dark bg_light_color_2">
                    <i class="fa fa-pencil m_right_6"></i>
                    发布的商品（待审核）
                  </button></a>
                </li>
              </ul>

              <ul class="horizontal_list clearfix m_bottom_12">
                <li class="m_right_5 m_sm_bottom_5">
                  <a href="user_edit.php"><button class="tr_delay_hover r_corners button_type_14 color_dark bg_light_color_2">
                    <i class="fa fa-pencil m_right_6"></i>
                   修改个人资料
                  </button></a>
                </li>
              </ul>
<ul class="horizontal_list clearfix m_bottom_12">
                <li class="m_right_5 m_sm_bottom_5">
                  <a href="qiugou_edit.php"><button class="tr_delay_hover r_corners button_type_14 color_dark bg_light_color_2">
                    <i class="fa fa-pencil m_right_6"></i>
                   管理求购信息
                  </button></a>
                </li>
              </ul>
                </figure>
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
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.tweet.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>