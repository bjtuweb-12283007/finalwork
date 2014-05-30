<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap.min.css">
<link rel="stylesheet" href="css/luntan.css">
<head>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="http://cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/js/bootstrap.min.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>index</title>
</head>

<body>

<nav class="navbar navbar-default" role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="#">web有意思</a>
    
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">
      <li class="active"><a href="luntan2.html">论坛</a></li>
      <li><a href="xiaozu.html">小组</a></li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">链接<b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="renren.html">人人</a></li>
          <li><a href="sina.html">新浪</a></li>
          <li><a href="tencent.html">腾讯</a></li>
        </ul>
      </li>
    </ul>
    <form class="navbar-form navbar-left" role="search">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Search">
      </div>
      <button type="submit" class="btn btn-default">搜索</button>
    </form>
    <ul class="nav navbar-nav navbar-right">
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">更多<b class="caret"></b></a>
        <ul class="dropdown-menu">
          <!--<li><a href="#">登录</a></li>
          <li><a href="#myModal">注册</a></li>-->
          <li><button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal1">
  登&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;录
</button></li>
<li><button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal2">
  注&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;册
</button></li>

        </ul>
      </li>
    </ul>
  </div><!-- /.navbar-collapse -->
</nav>



<!-- Modal -->
<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">登录</h4>
      </div>
      <div class="modal-body">
        <form action="login.php" method="post">
        	<li>Enter your name: <input type="text" name="name" /></li>
			<li>Enter your password: <input type="text" name="password" /></li>
			<li><input type="submit" /></li>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
       
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- Modal -->
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">注册</h4>
        
      </div>
      <div class="modal-body">
      <form action="register.php" method="post">
            Enter your name: <input type="text" name="name" /> <br />
			Enter your password: <input type="text" name="password" />
			<input type="submit" />
       </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
       
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->



<div class="recommend">
	<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;最新推荐</br>
    <hr width="680px" align="left">
</div>

<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="1.jpg">
      <div class="carousel-caption">
       教授坠入冰缝顽强求生
      </div>
    </div>
    
    <div class="item">
      <img src="3.jpg">
      <div class="carousel-caption">
      女子养两只猛虎当宠物
      </div>
    </div>
    
    <div class="item">
      <img src="2.jpg">
      <div class="carousel-caption">
      蝙蝠夜间捕食瞬间
      </div>
    </div>
   
  </div>

 
  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div>

 
 <div class="mulu">
  <br><a href="mulu1.html">拖延是冲动的演化副产物</a></br>
  <br><a href="mulu2.html">怎样才能成为X战警</a></br>
  <br><a href="mulu3.html">带上数学眼镜看雍正王朝：权利的游戏</a></br>
  <br><a href="mulu4.html">杀人于无形：西方植物毒药史</a></br>
  <br><a href="mulu5.html">耳朵听错话，也许眼睛出问题啦</a></br>
 </div>
 
 <div class="group">
 	<br>热门小组</br>
    <br><img src="4.jpg" width="48px" height="48px"><a href="junshi.html">&nbsp;军事科技</a></br>
    <br><img src="5.jpg" width="48px" height="48px"><a href="ziran.html">&nbsp;自然控</a></br>
    <br><img src="6.jpg" width="48px" height="48px"><a href="jiankang.html">&nbsp;健康朝九晚五</a></br>
 </div>
 
 <div class="article">
 	<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;热帖</br>
    <hr width="680px" align="left">
 </div>

<div class="panel-group" id="accordion">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
          科技
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in">
      <div class="panel-body">
 <li><a href="hudie.html">柑橘凤蝶生活史</a></li>
 <li><a href="yueqiuche.html">玉兔号月球车完工</a></li>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
          人文
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse">
      <div class="panel-body">
      <li><a href="TIL.html">#TIL#标头跟眼睛视场之类的神马关系都没有</a></li>
      <li><a href="jiliang.html">【文章】计量学小科普（进行中）</a></li>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
          生活
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse">
      <div class="panel-body">
        <li><a href="helan.html">走遍荷兰博物馆——梵高博物馆</a></li>
      <li><a href="dongman.html">【动漫料理の现实报告】秋葵汤</a></li>
      </div>
    </div>
  </div>
</div>



<?php
    $con = mysql_connect(SAE_MYSQL_HOST_M.':'.SAE_MYSQL_PORT,SAE_MYSQL_USER,SAE_MYSQL_PASS);
	//$con = mysql_connect(SAE_MYSQL_HOST_M.':'.SAE_MYSQL_PORT,SAE_MYSQL_USER,SAE_MYSQL_PASS);
	if (!$con)
 	{
		die('Could not connect: ' . mysql_error());
  	}
    
    mysql_select_db(SAE_MYSQL_DB, $con);
	$result = mysql_query("SELECT * FROM composition");
?>

<div class="fatie">
	<br>发帖处</br>
    <?php
    echo "<table class='table table-striped'>";
	while ($row = mysql_fetch_array($result))
	{
		echo "<tr> <td>"."<a href='article.php?id=".$row["id"]."'>".$row["title"]."</a>"."</td><tr>";
	}

	echo "</table>";
	?>
</div>

















<div class="fa">
<a href="write.php"><button type="button" class="btn btn-primary">按此写帖</button></a>
</div>

<!--
<ul class="list-group">
  <li class="list-group-item"></li>
  <li class="list-group-item"></li>
  <li class="list-group-item"></li>
  <li class="list-group-item"></li>
  <li class="list-group-item"></li>
</ul>
-->
 

</body>
</html>