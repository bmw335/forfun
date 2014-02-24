<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="zh-cn">
<head>
	<meta property="qc:admins" content="12016755076111167205673056375" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="<?php echo Yii::app()->request->baseUrl; ?>/img/lovecert.ico">

    <script src="http://cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/background-change.js"></script>
    
	<!-- Bootstrap core CSS -->
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/sticky-footer-navbar.css" rel="stylesheet">
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/custom.css" rel="stylesheet">
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/create.css" rel="stylesheet">
    
        <!-- Placed at the end of the document so the pages load faster, but jquery file upload not work -->
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/bootstrap/js/bootstrap.min.js"></script>

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="http://cdn.bootcss.com/html5shiv/3.7.0/html5shiv.min.js"></script>
      <script src="http://cdn.bootcss.com/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
	
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
	<script>
		var BASE_URL="<?php print Yii::app()->request->baseUrl;?>";
	</script>
</head>

<body>

	</div><!-- mainmenu -->
    <!-- Wrap all page content here -->
    <div id="wrap">

      <!-- Fixed navbar -->
      <div class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo Yii::app()->request->baseUrl; ?>">爱情证书<img src="<?php echo Yii::app()->request->baseUrl; ?>/img/logo.png"></a>
          </div>
          <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
              <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/user">我的证书</a></li>
			<li>
				<?php if(Yii::app()->user->isGuest){?>
					<a href="<?php echo Yii::app()->request->baseUrl;?>/index.php/login">登录</a>
				<?php }else{?>
					<a href="<?php echo Yii::app()->request->baseUrl;?>/index.php/site/logout">Logout (<?php echo Yii::app()->user->name;?>)</a>
				<?php }?>
			</li>
             <!-- 
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">用户A <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li class="dropdown-header">Nav header</li>
                  <li><a href="#">Separated link</a></li>
                  <li><a href="#">One more separated link</a></li>
                </ul>
              </li>
               -->
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>

      <!-- Begin page content -->
      <div class="container">
      	<?php echo $content; ?>
      </div>
    </div>

    <div id="footer">
      <div class="container">
        <p class="text-muted">沪ICP备13008256-2号</p>
      </div>
    </div>
</body>

</html>
