<?php
session_start();
require("./include/connect_db.php");
?>
<!doctype html>
<!--[if IE 9 ]><html class="ie9" lang="en"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->
  <head>
    <title>校园二手交易平台 - 搜索商品</title>
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
  </head>
  <body>
         <?php
  if($button=="搜索商品")
  {
   if($title=="")
    {echo '<script language=Javascript> alert("搜索关键词不能为空！");
  location.href="ershou.php";</script>';
  
}

?>
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
            <li>所有商品</li>
          </ul>
        </div>
      </section>
      <!--content-->
      <div class="page_content_offset">
        <div class="container">
          <div class="row clearfix">
            <!--left content column-->
            <section class="col-lg-9 col-md-9 col-sm-9">
             
                         <?php 
$pagesize=8; //设定每一页显示的记录数

      $where="";
           if($xiaolei!="") $where.=" and xiaolei='$xiaolei'";
           $rr = mysql_query("select * from cat where cat_name like '%$title%'");
            $dd = mysql_fetch_array($rr);
    $rs = mysql_query( "select * from goods where delstates=0 and ud=0 and (title like '%$title%' or dalei='{$dd[id]}' or xiaolei='{$dd[reid]}') $where"); //这里有第二个可选参数，指定打开的连接
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
$rs=mysql_query("select * from goods where delstates=0 and ud=0 and (title like '%$title%' or dalei='{$dd[id]}' or xiaolei='{$dd[reid]}') $where limit $offset,$pagesize");//取得—当前页—记录集！
$curNum = mysql_num_rows($rs); //$curNum - 当前页实际记录数，for循环输出用
?> 
            
            
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
              <!--products list type-->
              <section class="products_container list_type clearfix m_bottom_5 m_left_0 m_right_0">

           <?php
           $where="";
           if($xiaolei!="") $where.=" and xiaolei='$xiaolei'";
            $rr = mysql_query("select * from cat where cat_name like '%$title%'");
            $dd = mysql_fetch_array($rr);
           $sql="select * from goods where delstates=0 and ud=0 and (title like '%$title%' or dalei='{$dd[id]}' or xiaolei='{$dd[reid]}') $where order by addtime DESC limit $offset,$pagesize";
           $result=Connect_db($sql,"error");

           while($data=mysql_fetch_object($result))
           {


            ?>
                <!--product item-->
                <div class="product_item full_width list_type hit m_left_0 m_right_0">
                  <figure class="r_corners photoframe tr_all_hover type_2 shadow relative clearfix">
                    <!--product preview-->
                    <a href="ershouinfo.php?id=<?php echo $data->id;?>" class="d_block f_left relative pp_wrap m_right_30 m_xs_right_25">
                      <!--hot product-->
                      <span class="hot_stripe"><img src="images/sale_product.png" alt=""></span>
                      <img src="./uploads/<?php echo $data->path;?>" class="tr_all_hover" alt="" style="width:242px;height:242px;">
                      
                    </a>
                    <!--description and price of product-->
                    <figcaption>
                      <div class="clearfix">
                        <div class="f_left p_list_description f_sm_none w_sm_full m_xs_bottom_10">
                          <h4 class="fw_medium"><a href="ershouinfo.php?id=<?php echo $data->id;?>" class="color_dark"><?php echo $data->title;?></a></h4>
                          <div class="m_bottom_10">
                       <a href="#" class="d_inline_middle default_t_color f_size_medium m_left_10"><?php echo $data->hitsnum;?>浏览次数</a>
                          </div>
                          <hr class="m_bottom_10">
                          <p class="d_sm_none d_xs_block"><?php echo $data->content;?></p>
                        </div>
                        <div class="f_right f_sm_none t_align_r t_sm_align_l">
                          <p class="scheme_color f_size_large m_bottom_15"><span class="fw_medium">￥<?php echo $data->price;?></span></p>
                       <a href="ershouinfo.php?id=<?php echo $data->id;?>" >  <button class="button_type_4 bg_scheme_color r_corners tr_all_hover color_light mw_0 m_bottom_15 m_sm_bottom_0 d_sm_inline_middle">查看详情</button></a><br class="d_sm_none">
                       <button class="button_type_4 bg_light_color_2 d_sm_inline_middle f_sm_none m_sm_left_5 tr_all_hover f_right r_corners color_dark mw_0 p_hr_0"><i class="fa fa-heart-o"></i></button>
                        </div>
                      </div>
                    </figcaption>
                  </figure>
                </div>
                          <?php
        }
        ?>
           </section>
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
              <a href="#" class="d_block r_corners m_bottom_30">
                <img src="images/banner_img_6.jpg" alt="">
              </a>
              <!--Bestsellers-->
              <figure class="widget shadow r_corners wrapper m_bottom_30">
                <figcaption>
                  <h3 class="color_light">人气商品</h3>
                </figcaption>
                <div class="widget_content">
                   <?php
              $sql="select * from goods where delstates=0 and ud=0 order by hitsnum DESC limit 0,3";
              $result=Connect_db($sql);

              while($data=mysql_fetch_object($result))
              {
                $url="ershouinfo.php?id=$data->id";


                ?>    
                  <div class="clearfix m_bottom_15">
                    <img src="./uploads/<?php echo $data->path;?>" alt="" class="f_left m_right_15 m_sm_bottom_10 f_sm_none f_xs_left m_xs_bottom_0" style="width:80px;height:80px;">
                    <a href="<?php echo $url?>" class="color_dark d_block bt_link"><?php echo CutString($data->title,26);?></a>
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
    <!--scripts include-->
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
  <?php
}
?>
</html>