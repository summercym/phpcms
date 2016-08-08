<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>phpcms 注册</title>
    <link rel="stylesheet" href="./login/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="./login/css/loginMy.css"/>
    <style>
        html,body{width:100%;}
    </style>
</head>
<body>

<div class="main">
    <center style="color: red">注册</center>
    <div class="center">
        <form id="formOne" >
            <br/>
            <i class="fa fa-user Cone">  | </i>
            <input type="text" name="user" id="user" placeholder="用户名" />
            <span id="user_pass"></span>
            <br/>
            <i class="fa fa-key Cone">  | </i>
            <input type="password" name="pwd" id="pwd" placeholder="密码"/>
            <span id="pwd_pass"></span>
            <br/>
            <i class="fa fa-key Cone">  | </i>
            <input type="password" name="psw" id="psw" placeholder="确认密码"/>
            <span id="pwd_pass"></span>
            <br/>
            <input type="button" value="注册" id="submit" name="submit">
            <br/>
        </form>
    </div>
</div>
<script type="text/javascript" src="./login/js/loginMy.js"></script>
</body>
</html>
<script src="./jq.js"></script>
<script>
    $(":button").click(function(){
        var user=$("input[name=user]").val();
        var pwd=$("input[name=pwd]").val();
        var psw=$("input[name=psw]").val();
        $.post("zhu",{user:user,pwd:pwd,psw:psw},function(msg){
            if(msg==0){
                alert("两次密码不一致");
            }else if(msg==1){
                location.href="index";
            }
        });
    });
</script>