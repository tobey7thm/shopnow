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
    <title>校园二手交易平台 - 发布求购</title>
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
     <SCRIPT language=JavaScript>
function CheckInput(){

  if(input.title.value==''){
    alert("标题不能为空！");
    input.title.focus();
    return false;
  }

  if(input.content.value==''){
    alert("内容不能为空！");
    input.content.focus();
    return false;
  }
  if(input.tel.value==''){
    alert("联系电话不能为空！");
    input.tel.focus();
    return false;
  }
    if(input.address.value==''){
    alert("地址不能为空！");
    input.address.focus();
    return false;
  }
      if(input.qq.value==''){
    alert("qq不能为空！");
    input.qq.focus();
    return false;
  }
     if(input.email.value==''){
    alert("Email不能为空！");
    input.email.focus();
    return false;
  }

if (theform.email.value.indexOf("'",0) >= 0 || theform.email.value.indexOf(" ",0) >= 0)
{
  alert("电子邮件中不能包含空格，单引号等非法字符！");
  theform.email.focus();
  return false;
}
if (theform.email.value.indexOf("@",0) < 0 || theform.email.value.indexOf(".",0) < 0)
{
  alert("邮件地址错误！");
  theform.email.focus();
  return false;
}
  return true;
}
</script>
      <!--breadcrumbs-->
      <section class="breadcrumbs">
        <div class="container">
          <ul class="horizontal_list clearfix bc_list f_size_medium">
            <li class="m_right_10 current"><a href="index.php" class="default_t_color">主页<i class="fa fa-angle-right d_inline_middle m_left_10"></i></a></li>
            <li>发布求购</li>
          </ul>
        </div>
      </section>
      <!--content-->
      <div class="page_content_offset">
        <div class="container">
          <div class="row clearfix">
            <!--left content column-->
            <div class="col-lg-9 col-md-9 col-sm-9 m_xs_bottom_30">
                    <h5 class="fw_medium m_bottom_15">请填写求购信息</h5>
                    <form name="input" method="post"  enctype="multipart/form-data" action="qiugou_save.php" onsubmit=return(CheckInput())>
                      <ul>
                        <li class="m_bottom_15">
                          <label for="title" class="d_inline_b m_bottom_5 required">标题</label>
                          <input type="text" id="title" name="title" class="r_corners full_width">
                        </li>
                        <li class="m_bottom_15">
                          <label for="comments" class="d_inline_b m_bottom_5 required">内容</label><br>
                    <textarea id="comments" name="comments" class="r_corners full_width"></textarea>
                        </li>
                        <li class="m_bottom_15">
                          <label for="address" class="d_inline_b m_bottom_5">联系地址</label>
                          <input type="text" id="address" name="address" class="r_corners full_width">
                        </li>
                        <li class="m_bottom_15">
                          <label for="tel" class="d_inline_b m_bottom_5 required">联系电话</label>
                          <input type="text" id="tel" name="tel" class="r_corners full_width">
                        </li>
                        <li class="m_bottom_15">
                          <label for="qq" class="d_inline_b m_bottom_5">联系qq</label>
                          <input type="text" id="qq" name="qq" class="r_corners full_width">
                        </li>
                        <li class="m_bottom_15">
                          <label for="email" class="d_inline_b m_bottom_5 required">Email</label>
                          <input type="email" id="email" name="email" class="r_corners full_width">
                        </li>
                        <ul class="horizontal_list clearfix m_bottom_12">
                      <li class="m_right_5 m_sm_bottom_5"><button type="reset" name="Submit2" class="tr_delay_hover r_corners button_type_4 color_dark bg_light_color_2 f_size_large">重置</button></li>
                      <li class="m_right_5 m_sm_bottom_5"><button type="submit" name="Submit" class="button_type_4 r_corners bg_scheme_color color_light tr_all_hover">发布</button></li>
                       </ul>
                      </ul>
                    </form>
                  </div>

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