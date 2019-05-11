<?php
session_start();
//引入comment模型
include('CommentModel.php');
//引入左侧功能单
include('leftAbilityListView.php');
//接受权利等级
$show_power = $_SESSION['show_power'];
echo $show_power;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style type="text/css">
        .talk_con{
            width:600px;
            height:500px;
            border:1px solid #666;
            margin:50px auto 0;
            background:#f9f9f9;
        }
        .talk_show{
            width:580px;
            height:420px;
            border:1px solid #666;
            background:#fff;
            margin:10px auto 0;
            overflow:auto;
        }
        .talk_input{
            width:580px;
            margin:10px auto 0;
        }
        .whotalk{
            width:80px;
            height:30px;
            float:left;
            outline:none;
        }
        .talk_word{
            width:420px;
            height:26px;
            padding:0px;
            float:left;
            margin-left:10px;
            outline:none;
            text-indent:10px;
        }        
        .talk_sub{
            width:56px;
            height:30px;
            float:left;
            margin-left:10px;
        }
        .atalk{
           margin:10px; 
        }
        .atalk span{
            display:inline-block;
            background:#0181cc;
            border-radius:10px;
            color:#fff;
            padding:5px 10px;
        }
        .btalk{
            margin:10px;
            text-align:right;
        }
        .btalk span{
            display:inline-block;
            background:#ef8201;
            border-radius:10px;
            color:#fff;
            padding:5px 10px;
        }
        body{background-image: linear-gradient(to right, #ff9569 0%, #e92758 100%);}
    </style>
    <script type="text/javascript">      
    // 
        window.onload = function(){
            var Words = document.getElementById("words");
            var Who = document.getElementById("who");
            var TalkWords = document.getElementById("talkwords");
            var TalkSub = document.getElementById("talksub");
            

            TalkSub.onclick = function(){
	            //定义空字符串
                var str = "";
                if(TalkWords.value == ""){
	                 // 消息为空时弹窗
                    alert("消息不能为空");
                    return;
                }
                if(Who.value == 0){
	                //如果Who.value为0n那么是 A说
                    str = '<div class="atalk"><span>商家说 :' + TalkWords.value +'</span></div>';
                }
                else{
                    str = '<div class="btalk"><span>我说 :' + TalkWords.value +'</span></div>' ;  
                }
                Words.innerHTML = Words.innerHTML + str;
            }
            
        }


    </script>
</head>
<body>
    <div class="talk_con">
        <div class="talk_show" id="words">
            <div class="atalk"><span id="asay">商家说：吃饭了吗？</span></div>
            <div class="btalk"><span id="bsay">用户说：还没呢，你呢？</span></div>
        </div>
        <div <?php if($show_power!=1) echo "style=\"display:none\"";?>>
            <div class="talk_input">            
            <select class="whotalk" id="who">
                <option value="0">商家说：</option>
            </select>  
            </div>
        </div>  
        <div <?php if($show_power!=1) echo "style=\"display:none\"";?>>
            <div class="talk_input">            
            <select class="whotalk" id="who">
            <option value="1">用户说：</option>
            </select>  
            </div>
        </div>  
            <input type="text" class="talk_word" id="talkwords">
            <input type="button" value="发送" class="talk_sub" id="talksub">
        </div>
    </div>
</body>
</html>

