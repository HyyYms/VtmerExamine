<?php
session_start();
//引入report模型
include('ReportModel.php');
//引入左侧功能单
include('leftAbilityListView.php');

//获取reportid
$id = $_GET['id'];
$_SESSION['report_id']=$id;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>回复举报</title>
<style type="text/css">
      body{background-image: linear-gradient(to right, #ff9569 0%, #e92758 100%);}
  html{font-size:15px;}
  fieldset{width:700px; margin:20px 500px;}
  legend{font-weight:bold; font-size:30px; margin:0 auto; color:rgb(118, 173, 199)}
  .label{float:left; width:100px; margin-left:10px; color:turquoise}
  .h3{float:left; width:70px; margin-left:10px; color:turquoise}
  .div{float:left; width:70px; margin-left:10px; color:turquoise}
  .fieldset{float:left; width:70px; margin-left:10px; color:turquoise}
  .left{margin-left:80px;}
  .input{width:150px;}
  span{color: #70b9b0;}
</style>
</head>
<body>
<div>
<fieldset>
<form  method="POST" action="reportDealControl.php" enctype="multipart/form-data">
    <p>
    <h3>回复内容：</h3>
    <hr/>
    <td><textarea name="report" rows="10" colos="100"></textarea></td>
    </p>
    <h4>请选择您要上传的回复图片：</h4>
    <input type="file" name='bookPicture'  size="25"/>
    <p>
    <input type="submit" name="submit" value="发布回复" class="left"/> 
    <input type="RESET" value="  重 置  " class="right"/>
    </p>
</form>
</fieldset>
</div>
</body>
</html>    