<?php
session_start();
//引入order模型
include('OrderModel.php');
//引入左侧功能单
include('leftAbilityListView.php');

//获取userid
$id = $_SESSION['userid'];
$status = 3;
$label = Order::findAll(['status'=>$status,'userid'=>$id]);
$label_length = count($label);
if($label_length==0)
{
    echo "<script>alert('目前，尚无已处理订单');history.go(-1);</script>";
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>我的订单</title>
<style type="text/css">
      body{background-image: linear-gradient(to right, #ff9569 0%, #e92758 100%);}
  html{font-size:15px;}
  fieldset{width:700px; margin:20px 500px;}
  legend{font-weight:bold; font-size:30px; margin:0 auto; color:rgb(118, 173, 199)}
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
<legend>YY书城——我的订单</legend>
</fieldset>
</div>
<div>
<fieldset>
<p>
<?php for($i=0;$i<$label_length;$i++){?>
            <h3>购买图书：<?php echo $label[$i]->bookname ?> </h3>
            <h3>购买数量：<?php echo $label[$i]->my_number ?> </h3>
            <h3>收货地址：<?php echo $label[$i]->location ?> </h3>
            <h3>电话号码：<?php echo $label[$i]->phone ?> </h3>
            <h3>收件人姓名：<?php echo $label[$i]->username ?> </h3>
            <h3>收件人性别：<?php echo $label[$i]->sex ?> </h3>
            <hr/>
<?php }?>
</p>
</fieldset>
</div>
</body>
</html>