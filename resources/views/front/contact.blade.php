<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
    <title>个人时尚观</title>
    <script language=Javascript>
        function time(){
            //获得显示时间的div
            t_div = document.getElementById('showtime');
            var now=new Date()
            //替换div内容
            t_div.innerHTML = "现在是"+now.getFullYear()
                +"年"+(now.getMonth()+1)+"月"+now.getDate()
                +"日"+now.getHours()+"时"+now.getMinutes()
                +"分"+now.getSeconds()+"秒";
            //等待一秒钟后调用time方法，由于settimeout在time方法内，所以可以无限调用
            setTimeout(time,1000);
        }
        function MM_showHideLayers() { //v9.0
            var i,p,v,obj,args=MM_showHideLayers.arguments;
            for (i=0; i<(args.length-2); i+=3)
                with (document) if (getElementById && ((obj=getElementById(args[i]))!=null)) { v=args[i+2];
                    if (obj.style) { obj=obj.style; v=(v=='show')?'visible':(v=='hide')?'hidden':v; }
                    obj.visibility=v; }
        }
    </script>
    <style type="text/css">
        <!--

        * {
            margin: 0px;
            padding: 0px;
        }
        body {
            width: 980px;
            margin-right: auto;
            margin-left: auto;
            font-size: 12px;
            background-image: url(front/images/body.jpg);
        }
        #nav ul li {
            height: 30px;
            width: 100px;
            float: left;
            line-height: 30px;
            background-position: center;
            display: block;
            margin-right: 2px;
            text-align: center;
            color: #FFF;
            font-weight: bolder;
            background-image: url(front/images/ul_li_bg.jpg);
            position: relative;
        }
        #apDiv3 table tr td {
            color: #899D0A;
            line-height: 30px;
            text-align: center;
            background-color: #D6D5B6;
            font-weight: bold;
            display: block;
        }
        #apDiv3 table tr td a {
            color: #FFF;
            text-decoration: none;
            display: block;
            background-image: url(front/images/ul_li_bg.jpg);
        }
        #main #sidebar ul li a:hover {
            color: #FFF;
            background-color: #C7DA18;
            background-image: url(front/images/siderbar_ul_a.jpg);
        }
        #nav ul li a {
            text-decoration: none;
            color: #C9F;
            display: block;
        }
        #nav ul li a:hover {
            color: #FFF;
            background-image: url(front/images/ul_li_a_bg.jpg);
            text-decoration: underline;
            font-weight: bolder;
        }
        #top {
            height: 200px;
            width: 980px;
            margin-top: 20px;
            background-image: url(front/images/top.jpg);
        }
        #nav {
            height: 30px;
            width: 980px;
            position: relative;
            background-color: #000;
            background-image: url(front/images/nav_bg.jpg);
        }
        #nav #showtime {
            position: absolute;
            left: 784px;
            top: 8px;
            visibility: visible;
        }
        #nav ul {
            height: 30px;
            width: 660px;
            list-style-type: none;
            margin-right: 10px;
        }
        #main {
            height: 600px;
            width: 980px;
            margin-top: 10px;
        }
        #main #sidebar {
            float: left;
            height: 600px;
            width: 270px;
            background-image: url(front/images/sidebar_nn.jpeg);
            position: relative;
        }
        #main #sidebar ul {
            list-style-type: none;
            height: 70px;
            width: 130px;
            background-color: #003;
            position: absolute;
            left: 71px;
            top: 3px;
            background-image: url(front/images/sidebar_ul.jpg);
        }
        #main #sidebar ul li a {
            text-decoration: none;
            color: #FFF;
            font-weight: bolder;
            display: block;
        }
        #main #sidebar ul li {
            font-size: 20px;
            font-weight: bolder;
            width: 130px;
            height: 30px;
            margin-top: 5px;
            display: block;
            text-align: right;
            line-height: 30px;
            background-repeat: no-repeat;
            background-position: left center;
        }
        #main #content iframe {
            height: 600px;
            width: 700px;
        }
        #apDiv1 table tr td {
            line-height: 30px;
            height: 30px;
            text-align: center;
            color: #879E08;
            background-color: #D6D5B6;
            font-weight: bold;
            display: block;
        }
        #apDiv1 table tr td a {
            color: #FFF;
            text-decoration: none;
            display: block;
            background-image: url(front/images/ul_li_bg.jpg);
        }
        #main #content {
            height: 600px;
            width: 700px;
            float: right;
        }
        #footer {
            height: 50px;
            width: 980px;
            margin-top: 10px;
            background-color: #E0E0B6;
        }
        #footer p {
            display: block;
            height: 25px;
            text-align: center;
            line-height: 25px;
        }
        #apDiv1 {
            position:absolute;
            left:0px;
            top:31px;
            width:100px;
            height:60px;
            z-index:1;
            visibility: hidden;
        }
        #apDiv2 {
            position:absolute;
            left:248px;
            top:252px;
            width:0px;
            height:7px;
            z-index:2;
        }
        #apDiv3 {
            position:absolute;
            left:0px;
            top:30px;
            width:100px;
            height:90px;
            z-index:1;
            visibility: hidden;
        }
        #main img {
            float: right;
        }
        -->
    </style>
</head>

<body  onload="time()">


<div id="top"></div>
<div id="nav">
    <ul>
        <li>
            <h3><a href="{{url('/')}}">主页</a></h3>
        </li>
        <li><a href="{{url('about')}}">个人资料</a></li>
        <li><a href="{{url('contact')}}" onmouseover="MM_showHideLayers('apDiv1','','show')" onmouseout="MM_showHideLayers('apDiv1','','hide')">男神女神</a>
            <div id="apDiv1" onmouseover="MM_showHideLayers('apDiv1','','show')" onmouseout="MM_showHideLayers('apDiv1','','hide')">
                <table width="100" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                        <td width="100" height="30"><a href="zhangliang.html" target="kuangjia">男神张亮</a></td>
                    </tr>
                    <tr>
                        <td width="100" height="30"><a href="liuwen.html" target="kuangjia">女神刘雯</a></td>
                    </tr>
                </table>
            </div>
        </li>
        <li><a href="jiepaifengcai.html">街拍风采</a></li>
        <li><a href="danpinsouluo.html">单品搜罗</a></li>
        <li><a href="lianjie.html" onmouseover="MM_showHideLayers('apDiv3','','show')" onmouseout="MM_showHideLayers('apDiv3','','hide')">无处不乐</a>

        </li>
    </ul>
    <div id="showtime"></div>
</div>
<div id="main">

    <div id="sidebar">
        <ul>
            <li><a href="zhangliang.html" target="kuangjia">首席男模张亮</a></li>
            <li><a href="liuwen.html" target="kuangjia">国际超模刘雯</a></li>

        </ul>
    </div>
    <div id="content">
        <a href="nsns.html" target="kuangjia">
            <iframe scrolling="no" src="nsns.html" name="kuangjia"></iframe>
        </a> </div>
</div>
<div id="footer">
    <p>欢迎来到我的博客</p>
</div>
</body>
</html>
