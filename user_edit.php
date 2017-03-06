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
     $username=$_SESSION['user_name'];
     $sql="select * from user where username='$username'";
$result=Connect_db($sql);
$data=mysql_fetch_object($result);
     ?>
      <!--breadcrumbs-->
      <section class="breadcrumbs">
        <div class="container">
          <ul class="horizontal_list clearfix bc_list f_size_medium">
            <li class="m_right_10 current"><a href="index.php" class="default_t_color">主页<i class="fa fa-angle-right d_inline_middle m_left_10"></i></a></li>
            <li><a href="user.php" class="default_t_color">个人中心</a></li>
            <li><a href="" class="default_t_color">修改资料</a></li>
          </ul>
        </div>
      </section>

      <!--content-->
      <div class="page_content_offset">
        <div class="container">
          <div class="row clearfix">
            <!--left content column-->
            <div class="col-lg-9 col-md-9 col-sm-9 m_xs_bottom_30">
                    <h5 class="fw_medium m_bottom_15">会员信息修改</h5>
                    <form name="input" method="post"  enctype="multipart/form-data" action="user_edit1.php" onsubmit=return(CheckInput())>
                      <ul>
                        <li class="m_bottom_15">
                          <label for="name" class="d_inline_b m_bottom_5">会员账号</label>
                          <h2><?php echo $data->username;?></h2>
                        </li>
                        <li class="m_bottom_15">
                          <label for="pwd" class="d_inline_b m_bottom_5 required">会员密码</label><br>
                         <input type="password"  id="pwd" name="pwd" class="r_corners full_width">
                        </li>
                        <li class="m_bottom_15">
                          <label for="xuehao" class="d_inline_b m_bottom_5 required">学号</label><br>
                         <input type="text"  id="xuehao" name="xuehao" class="r_corners full_width" value="<?php echo $data->xuehao;?>">
                        </li>
                        <li class="m_bottom_15">
                          <label for="date" class="d_inline_b m_bottom_5">注册日期</label>
                          <h2><?php echo $data->date;?></h2>
                        </li>
                        <li class="m_bottom_15">
                          <label for="email" class="d_inline_b m_bottom_5 required">会员邮箱</label>
                          <input type="email" id="email" name="email" class="r_corners full_width" value="<?php echo $data->email;?>">
                        </li>
                        <ul class="horizontal_list clearfix m_bottom_12">
                          <input name="username" type="hidden" id="username" value="<?php echo $data->username;?>">
                      <li class="m_right_5 m_sm_bottom_5"><button type="reset" name="Submit2" class="tr_delay_hover r_corners button_type_4 color_dark bg_light_color_2 f_size_large">重置</button></li>
                      <li class="m_right_5 m_sm_bottom_5"><button type="submit" name="Submit" class="button_type_4 r_corners bg_scheme_color color_light tr_all_hover">提交</button>
                      </li>
                       </ul>
                      </ul>
                    </form>
                  </div>

          </div>
        </div>
      </div>
<script language=javascript>
  function CheckLoginForm(theform){
   if(theform.pwd.value == ''){
     alert('请输入密码！');
     theform.pwd.focus();
     return false;
   }
   if (theform.pwd.value.length<6)
  {
    alert("密码不应该小于6位数！");
    theform.pwd.focus();
    return (false);
}
if(theform.xuehao.value == ''){
     alert('请输入学号！');
     theform.xuehao.focus();
     return false;
   }

   if(theform.email.value == ''){
     alert('请输入email！');
     theform.email.focus();
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

 }
 </script>

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