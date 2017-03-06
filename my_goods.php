<?php
session_start();
require("./include/connect_db.php");
?>
<!doctype html>
<!--[if IE 9 ]><html class="ie9" lang="en"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->
  <head>
    <title>校园二手交易平台 - 审核通过商品</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <!--meta info-->
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="icon" type="image/ico" href="images/fav.ico">
    <!--stylesheet include-->
    <link rel="stylesheet" type="text/css" media="all" href="css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" media="all" href="css/owl.transitions.css">
    <link rel="stylesheet" type="text/css" media="all" href="css/flexslider.css">
    <link rel="stylesheet" type="text/css" media="all" href="css/jackbox.min.css">
    <link rel="stylesheet" type="text/css" media="all" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" media="all" href="css/style.css">
    <!--font include-->
    <link href="css/font-awesome.min.css" rel="stylesheet">
  </head>
  <body>



    <SCRIPT language=JavaScript>
    function del(id)
    {
     question=confirm("您确定要删除该商品么?");
     if(question)
     {
      location="goods_del.php?id="+id;
    }

  }
  function xiajia(id)
    {
     question=confirm("您确定要下架该商品么?");
     if(question)
     {
      location="xiajia.php?id="+id;
    }

  }
    function shangjia(id)
    {
     question=confirm("您确定要上架该商品么?");
     if(question)
     {
      location="shangjia.php?id="+id;
    }

  }
  </SCRIPT>



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
            <li class="m_right_10 current"><a href="user.php" class="default_t_color">个人中心<i class="fa fa-angle-right d_inline_middle m_left_10"></i></a></li>
            <li><a href="" class="default_t_color">审核通过</a></li>
          </ul>
        </div>
      </section>


  <?php 
$pagesize=8; //设定每一页显示的记录数

    $rs = mysql_query( "select * from goods where owner='$_SESSION[user_name]' and delstates=0  order by addtime DESC"); //这里有第二个可选参数，指定打开的连接
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
$rs=mysql_query("select * from goods where owner='$_SESSION[user_name]' and delstates=0 limit $offset,$pagesize");//取得—当前页—记录集！
$curNum = mysql_num_rows($rs); //$curNum - 当前页实际记录数，for循环输出用
?> 




       <div class="page_content_offset">
        <div class="container">
    
          <h2 class="tt_uppercase color_dark m_bottom_25"><?php echo $_SESSION['user_name']?>审核通过的商品</h2>
          <div class="row clearfix">
          
<?php              
                     
          $sql="select * from goods where owner='$_SESSION[user_name]' and delstates=0 order by addtime DESC limit $offset,$pagesize";
          $result=Connect_db($sql);

          while($data=mysql_fetch_object($result))
          {
            $url="ershouinfo.php?id=$data->id";


            ?>    
          
            <div class="col-lg-3 col-md-3 col-sm-3 m_bottom_45 m_xs_bottom_30">
              <figure class="t_align_c">
                <a href="<?php echo $url?>">
                <div class="circle wrapper team_photo d_inline_b m_bottom_15">
                  <img src="./uploads/<?php echo $data->path;?>" alt="" style="width:200px;height:200px;">
                </div>
              </a>
                <figcaption>
                  <h4 class="fw_medium color_dark"><?php echo CutString($data->title,20);?></h4>
                  <p class="color_dark m_bottom_10">数量：<?php echo $data->num;?></p>
                  <p class="m_bottom_10">￥<?php echo $data->price;?></p>
                  <hr class="divider_type_5 d_inline_b m_bottom_5"><br>
                  <ul class="clearfix horizontal_list social_icons d_inline_b t_md_align_c">
                    <?php if($data->ud==0){ ?>
                    <a href=javascript:xiajia('<?php echo $data->id;?>')><button class="button_type_4 bg_scheme_color r_corners tr_all_hover color_light f_left mw_0">下架</button></a><?php } ?>
                    <?php if($data->ud==1){ ?>
                    <a href=javascript:shangjia('<?php echo $data->id;?>')><button class="button_type_4 bg_color_green r_corners tr_all_hover color_light f_left mw_0">上架</button>
                    <?php } ?>
                    <a href=javascript:del('<?php echo $data->id;?>')><button class="button_type_4 bg_dark_color r_corners tr_all_hover color_light f_left mw_0">删除</button></a>
                  </ul>
                </figcaption> 
              </figure>
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
    <script src="js/jackbox-packed.min.js"></script>
    <script src="js/jquery.flexslider-min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/retina.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.tweet.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>