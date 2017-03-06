<?php
session_start();
require("./include/connect_db.php");
?>
<!doctype html>
<!--[if IE 9 ]><html class="ie9" lang="en"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->
  <head>
    <title>校园二手交易平台 - 商品详情</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <!--meta info-->
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="icon" type="image/ico" href="images/fav.ico">
    <!--stylesheet include-->
    <link rel="stylesheet" type="text/css" media="all" href="css/jquery.fancybox-1.3.4.css">
    <link rel="stylesheet" type="text/css" media="all" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" media="all" href="css/jquery.custom-scrollbar.css">
    <link rel="stylesheet" type="text/css" media="all" href="css/owl.carousel.css">
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
            <li class="m_right_10"><a href="ershou.php" class="default_t_color">所有商品</a><i class="fa fa-angle-right d_inline_middle m_left_10"></i></li>
            <li>商品详情</li>
          </ul>
        </div>
      </section>
      <!--content-->

       <?php
  $sql="select * from goods where id='$id'";
  $result=Connect_db($sql);
  $data=mysql_fetch_object($result);
  $owner=$data->owner;
  $hitsnum=$data->hitsnum+1;
  $liusql="update goods set hitsnum='$hitsnum' where id='$id'";
  $liuresult=Connect_db($liusql);
  ?>


      <div class="page_content_offset">
        <div class="container">
          <div class="clearfix m_bottom_30 t_xs_align_c">
            <div class="photoframe type_2 shadow r_corners f_left f_sm_none d_xs_inline_b product_single_preview relative m_right_30 m_bottom_5 m_sm_bottom_20 m_xs_right_0 w_mxs_full">
              <span class="hot_stripe"><img src="images/sale_product.png" alt=""></span>
              <div class="relative d_inline_b m_bottom_10 qv_preview d_xs_block">
                <img id="zoom_image" src="./uploads/<?php echo $data->path;?>"  alt="" style="width:438px;height:438px;">
                <a href="./uploads/<?php echo $data->path;?>" class="d_block button_type_5 r_corners tr_all_hover box_s_none color_light p_hr_0" target="_blank">
                  <i class="fa fa-expand"></i>
                </a>
              </div>
              <!--carousel-->
              
            </div>
            <div class="p_top_10 t_xs_align_l">
              <!--description-->
              <h2 class="color_dark fw_medium m_bottom_10"><?php echo $data->title;?></h2>
              <div class="m_bottom_10">

                <a href="#" class="d_inline_middle default_t_color f_size_small m_left_5"><?php echo $hitsnum;?> 浏览次数 </a>
              </div>
              <hr class="m_bottom_10 divider_type_3">
              <table class="description_table m_bottom_10">
                <tr>
                  <td>数量:</td>
                  <td><span class="color_green"><?php echo $data->num;?></span></td>
                </tr>
                <tr>
                  <td>卖家名称:</td>
                  <td><span class="color_green"><?php echo $data->owner;?></span></td>
                </tr>
                <tr>
                  <td>卖家地址:</td>
                  <td><span class="color_green"><?php echo $data->address;?></span></td>
                </tr>
                <tr>
                  <td>联系电话:</td>
                  <td><span class="color_green"><?php echo $data->tel;?></span></td>
                </tr>
              </table>

              <table class="description_table m_bottom_5">
                <tr>
                  <td>联系QQ:</td>
                  <td><span class="color_green"><?php echo $data->qq;?></span></td>
                </tr>
                <tr>
                  <td>上架时间:</td>
                  <td><span class="color_green"><?php echo $data->addtime;?></span></td>
                </tr>
              </table>
              <hr class="divider_type_3 m_bottom_10">
              <p class="m_bottom_10">商品描述：<?php echo $data->content;?></p>
              <hr class="divider_type_3 m_bottom_15">
              <div class="m_bottom_15">
                <span class="v_align_b f_size_big m_left_5 scheme_color fw_medium">￥<?php echo $data->price;?></span>
              </div>

              <div class="d_ib_offset_0 m_bottom_20">
           
                <a href="collect_add.php?id=<?php echo $data->id;?>"><button class="button_type_12 bg_light_color_2 tr_delay_hover d_inline_b r_corners color_dark m_left_5 p_hr_0"><span class="tooltip tr_all_hover r_corners color_dark f_size_small">加入收藏夹</span><i class="fa fa-heart-o f_size_big"></i></button></a>
                
              
              </div>
             
              <div class="d_inline_middle m_left_5 addthis_widget_container">
                <!-- AddThis Button BEGIN -->
                <div class="addthis_toolbox addthis_default_style addthis_32x32_style">
                <a class="addthis_button_preferred_1"></a>
                <a class="addthis_button_preferred_2"></a>
                <a class="addthis_button_preferred_3"></a>
                <a class="addthis_button_preferred_4"></a>
                <a class="addthis_button_compact"></a>
                <a class="addthis_counter addthis_bubble_style"></a>
                </div>
                <!-- AddThis Button END -->
              </div>
            </div>
          </div>



   <?php 
$pagesize=8; //设定每一页显示的记录数

      
           
    $rs = mysql_query( "select * from liuyan where goodid='$id' order by addtime DESC"); //这里有第二个可选参数，指定打开的连接
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
$rs=mysql_query("select * from liuyan where goodid='$id' order by addtime DESC limit $offset,$pagesize");//取得—当前页—记录集！
$curNum = mysql_num_rows($rs); //$curNum - 当前页实际记录数，for循环输出用
?> 




<h2 class="tt_uppercase color_dark m_bottom_30">顾客留言</h2>
              <div class="m_bottom_45">
<!--comment first level-->

<?php
     
           $sql4="select * from liuyan where goodid='$id' order by addtime DESC limit $offset,$pagesize";
           $result4=Connect_db($sql4);

           while($data4=mysql_fetch_array($result4))
           {


            ?>
                <div class="clearfix comment_wrap m_bottom_25">
                  <!--comment author photo-->
                  <img src="images/men.png" class="f_left circle" alt="">
                  <div class="comment_content_wrap">
                    <header class="m_bottom_5">
                      <a href="" class="color_dark"><b><?php echo $data4[uname];?></b></a> - <?php echo $data4[addtime];?>
     
                    </header>
                    <div class="comment relative bg_light_color_3 r_corners shadow"><?php echo $data4[content];?></div>
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

<h2 class="tt_uppercase color_dark m_bottom_30" style="margin-top:50px;">发布留言</h2>
              <form class="bs_inner_offsets full_width bg_light_color_3 r_corners shadow m_xs_bottom_30" onsubmit="return isok(this)" name="form2" method="post" action="liuyan_save.php?goodid=<?php echo $id?>&url=ershouinfo.php?id=<?php echo $id?>" style="margin-bottom:50px;">
                <ul>
                  <li class="clearfix m_bottom_15">
                    <div class="f_left half_column f_xs_none w_xs_full p_xs_hr_0 m_xs_bottom_15">
                      <label for="title" class="d_inline_b m_bottom_5">标题</label><br>
                      <input type="text" id="title" name="title" class="r_corners full_width">
                    </div>
                   
                  </li>
                  
            <li class="m_bottom_15">
                    <label for="comments" class="d_inline_b m_bottom_5">评论内容</label><br>
                    <textarea id="comments" name="comments" class="r_corners full_width"></textarea>
                  </li>
                  <li class="m_bottom_10">
                    <button type="submit" class="r_corners button_type_4 bg_light_color_2 mw_0 color_dark tr_all_hover" name="button" id="button">提交</button>
                  </li>
                </ul>
              </form>
          <div class="clearfix">
            <h2 class="color_dark tt_uppercase f_left m_bottom_15 f_mxs_none"><?php echo $owner;?>发布的其他商品</h2>
            <div class="f_right clearfix nav_buttons_wrap f_mxs_none m_mxs_bottom_5">
              <button class="button_type_7 bg_cs_hover box_s_none f_size_ex_large t_align_c bg_light_color_1 f_left tr_delay_hover r_corners rp_prev"><i class="fa fa-angle-left"></i></button>
              <button class="button_type_7 bg_cs_hover box_s_none f_size_ex_large t_align_c bg_light_color_1 f_left m_left_5 tr_delay_hover r_corners rp_next"><i class="fa fa-angle-right"></i></button>
            </div>
          </div>
          <div class="related_projects product_full_width m_bottom_15">
             <?php
              $sql="select  * from goods where delstates=0 and ud=0 and owner='$owner' and id!='$id'";
              $result=Connect_db($sql);
  
              while($data=mysql_fetch_object($result))
                {$url="ershouinfo.php?id=$data->id";
         
         
              ?>
            <figure class="r_corners photoframe shadow relative d_inline_b d_md_block d_xs_inline_b tr_all_hover">
              <!--product preview-->
              <a href="<?php echo $url?>" class="d_block relative pp_wrap">
                <!--hot product-->
                <span class="hot_stripe type_2"><img src="images/sale_product_type_2.png" alt=""></span>
                <img src="./uploads/<?php echo $data->path;?>" class="tr_all_hover" alt="" style="width:242px;height:242px;">
 
              </a>
              <!--description and price of product-->
              <figcaption class="t_xs_align_l">
                <h5 class="m_bottom_10"><a href="<?php echo $url?>" class="color_dark ellipsis"><?php echo $data->title;?></a></h5>
                <div class="clearfix">
                  <p class="scheme_color f_left f_size_large m_bottom_15">￥<?php echo $data->price;?></p>
               
                </div>
               <a href="<?php echo $url?>"><button class="button_type_4 bg_scheme_color r_corners tr_all_hover color_light mw_0">查看详情</button></a>
              </figcaption>
            </figure>
              <?php
           }
           ?>
          </div>
          <hr class="divider_type_3 m_bottom_15">
          <a href="sell.php" role="button" class="d_inline_b bg_light_color_2 color_dark tr_all_hover button_type_4 r_corners"><i class="fa fa-reply m_left_5 m_right_10 f_size_large"></i>我也要发布商品</a>
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
    theform.title.focus();
    return (false);
  }
  if (theform.comments.value=="")
  {
    alert("请输入内容！");
    theform.comments.focus();
    return (false);
  }
  return (true);
}
-->
</SCRIPT>
    <!--scripts include-->
    <script src="js/jquery-2.1.0.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery-migrate-1.2.1.min.js"></script>
    <script src="js/retina.js"></script>
    <script src="js/elevatezoom.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.tweet.min.js"></script>
    
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.custom-scrollbar.js"></script>
    <script src="js/jquery.fancybox-1.3.4.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>