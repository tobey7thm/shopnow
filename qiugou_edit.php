<?php
session_start();
require("./include/connect_db.php");
if($_SESSION['user_name']=="")
{
  echo"<script>alert('请先登录！');history.back(-1);</script>";
  exit;
}
?>
<!doctype html>
<!--[if IE 9 ]><html class="ie9" lang="en"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->
  <head>
    <title>校园二手交易平台 - 我的求购信息</title>
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

      
           
    $rs = mysql_query( "select * from qiugou where zuozhe = '{$_SESSION[user_name]}' order by addtime DESC"); //这里有第二个可选参数，指定打开的连接
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
$rs=mysql_query("select * from qiugou where zuozhe = '{$_SESSION[user_name]}' order by addtime DESC limit $offset,$pagesize");//取得—当前页—记录集！
$curNum = mysql_num_rows($rs); //$curNum - 当前页实际记录数，for循环输出用
?> 

     <!--breadcrumbs-->
      <section class="breadcrumbs">
        <div class="container">
          <ul class="horizontal_list clearfix bc_list f_size_medium">
            <li class="m_right_10 current"><a href="index.php" class="default_t_color">主页<i class="fa fa-angle-right d_inline_middle m_left_10"></i></a></li>
            <li>我的求购信息</li>
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
              <h2 class="tt_uppercase color_dark m_bottom_25">我发布的求购</h2>
							<div class="m_bottom_45">
                <table class="table_type_8 full_width t_align_l">
                  <tr class="f_size_large">
                    <th>标题</th>
                    <th>内容</th>
                    <th>发布时间</th>
                    <th>操作</th>
                  </tr>
                  <?php
     
           $sql="select * from qiugou where zuozhe = '{$_SESSION[user_name]}' order by addtime DESC limit $offset,$pagesize";
           $result=Connect_db($sql);

           while($data=mysql_fetch_array($result))
           {


            ?>
                  <tr>
                    <td><?php echo $data[title]?></td>
                    <td><?php echo CutString($data[content],50)?></td>
                    <td><?php echo $data[addtime]?></td>
                    <td><a href="qiugou_xiugai.php?id=<?php echo $data[id];?>" class="templatemo-edit-btn">修改</a>
                         <a href="qiugou_del.php?id=<?php echo $data[id];?>" onclick="return confirm('确定删除吗?')" class="templatemo-edit-btn">删除</a></td>
                  </tr>
                                  <?php 
}
?>
                </table>
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