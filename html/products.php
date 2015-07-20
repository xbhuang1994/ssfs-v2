<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>成都桑松服饰</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="职业装定制,酒店服装定制,服装定制,劳保服装定制" />
<link href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
<link href="//cdn.bootcss.com/skel/2.2.1/skel.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Istok+Web:400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); 
	function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="//cdn.bootcss.com/jquery/2.1.4/jquery.min.js"></script>
<script src="//cdn.bootcss.com/jquery.poptrox/2.5.1/jquery.poptrox.min.js"></script>
<script src="//cdn.bootcss.com/flexslider/2.5.0/jquery.flexslider.js"></script>
<script src="js/jquery.scrolly.min.js"></script>
<script src="//cdn.bootcss.com/skel/2.2.1/skel.min.js"></script>
<script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="js/init.js"></script>
</head>
<body>
<!-- header -->
	<div class="header-top">
		<div class="container">
			<div class="phone">
				<h3><span>电话</span> : +086 13308080162</h3>
			</div>
			<div class="logo">
				<a href="index.html"><img src="images/logo.png" class="img-responsive" alt="" /></a>
			</div>
			<div class="location">
				<h3><span>地址</span> :	成都市 温江区 人和路333号</h3>
			</div>
				<div class="clearfix"> </div>
		</div>
	</div>
	<div class="banner1">
		<div class="container">
			<div class="head-nav">
				<span class="menu"> </span>
				<ul>
					<li><a href="index.html">主页</a></li>
					<li><a href="about.html">关于我们</a></li>
					<li><a href="index.html?clickId=s_products">制品展示</a></li>
					<li><a href="#Contacts" class = "scrolly">联系我们</a></li>
					<div class="clearfix"> </div>
				</ul>

			</div>
						<div class="clearfix"> </div>
					<!-- script-for-nav -->
					<script>
						$( "span.menu" ).click(function() {
						  $( ".head-nav ul" ).slideToggle(300, function() {
							// Animation complete.
						  });
						});
					</script>
			<!-- script-for-nav -->
		</div>
	</div>	
<!-- header -->
 <!---start-content---->

 <!-- Portfolio -->
	<article id="show" class="container box style2">
		<div class="inner gallery">
			<div class="row">
				<!-- <div class="col-xs-6 col-md-4"><a href="images/fulls/01.jpg" class="image fit"><img src="images/thumbs/01.jpg" alt="" title="Ad infinitum" /></a></div> -->
				<?php 
					function get_dir_files($dir)  
					{  
					    if (is_file($dir)) {  
					        return array($dir);  
					    }  
					    $files = array();  
					    if (is_dir($dir) && ($dir_p = opendir($dir))) {  
					        $ds = DIRECTORY_SEPARATOR;  
					        while (($filename = readdir($dir_p)) !== false) {  
					            if ($filename=='.' || $filename=='..') { continue; }  
					            $filetype = filetype($dir.$ds.$filename);  
					            if ($filetype == 'dir') {  
					                $files = array_merge($files, get_dir_files($dir.$ds.$filename));  
					            } elseif ($filetype == 'file') {  
					                $files[] = $dir.$ds.$filename;  
					            }  
					        }  
					        closedir($dir_p);  
					    }  
					    return $files;  
					}  
					$pType =  $_GET["pType"];
					if(count($pType) < 1)
						$pType = 10000;
					//示例  
					$dir = './images/products/'.$pType."/thumbs";
					$thumbsarr = get_dir_files($dir);
					for ($i=0; $i < count($thumbsarr); $i++) { 
							$msrc = $thumbsarr[$i];
							$mherf = str_replace('thumbs','fulls',$msrc);
							echo  "<div class='col-xs-10 col-md-3'><a href='$mherf' class='image fit'><img src='$msrc' alt=' title='Ad infinitum' /></a></div>";
					}
				?>
			</div>
		</div>
		<br/>
	</article>
		<!-- Contact --> 			
<!---End-content---->
<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="col-md-4 our" id = "Contacts">
				<h4>联系方式</h4>
					<div class="ic-da">
						<div class="icon">
							<i class="mob"> </i>
						</div>
						<div class="data">
							<p>+(086) 13308080162</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<h6>E-mail: <a href="#">1074419278@qq.com</a></h6>
					<h5>成都市 温江区 人和路333号.</h5>
			</div>
				<div class="clearfix"> </div>
			<div class="bottom">
				<!-- <p>© 2015 All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p> -->
			</div>
		</div>
	</div>
<!-- footer -->
</body>
</html>