	
    <meta name="keywords" content="<?php echo $aik['keywords'];?>" />
	<meta name="description" content="<?php echo $aik['description'];?>" />
    <!-- Bootstrap -->
    <link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	<link href="css/css.css" rel="stylesheet">

    <!-- HTML5 shim 和 Respond.js 是为了让 IE8 支持 HTML5 元素和媒体查询（media queries）功能 -->
    <!-- 警告：通过 file:// 协议（就是直接将 html 页面拖拽到浏览器中）访问页面时 Respond.js 不起作用 -->
    <!--[if lt IE 9]>
      <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body>
	<nav class="navbar navbar-default navbar-fixed-top">
	    <div class="container">
			<!-- 手机自适应样式 -->
		    <div class="navbar-header">	
			    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">导航切换</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
			    </button>
			  <!--logo图标-->
			  <a class="navbar-brand logo" href="<?php echo $aik['pcdomain'];?>"></a>
			</div>	
			<!-- pc导航样式 -->
		    <div id="navbar" class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li class="active"><a href="<?php echo $aik['pcdomain'];?>/example.php"><span class="badge">NEW</span>使用教程</a></li>
					<?php echo $aik['topnav'];?>
				</ul>
			</div>	
	    </div>
	</nav>