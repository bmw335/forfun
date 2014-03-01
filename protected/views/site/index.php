<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>
<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/background-change.css" rel="stylesheet">

<script>
 function qqLogin()
 {
   //以下为按钮点击事件的逻辑。注意这里要重新打开窗口
   //否则后面跳转到QQ登录，授权页面时会直接缩小当前浏览器的窗口，而不是打开新窗口

   //官方demo  "_self" => "TencentLogin"
   var A=window.open("<?php echo Yii::app()->baseUrl; ?>/index.php/login/qqLogin","_self", 
   "width=450,height=320,menubar=0,scrollbars=1,resizable=1,status=1,titlebar=0,toolbar=0,location=1");
 } 
</script>


<div class='raw image-grid'>
<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'ajaxUpdate'=>false,
	'summaryText'=>'',
	'itemView'=>'_view',
)); ?>
</div>

<form method=post action="<?php echo Yii::app()->baseUrl; ?>/index.php/cert/searchCert" name="index_search_form">
	<div class="input-group input-group-lg" id="search-bar">
		  <input type="text" name="name" class="form-control" placeholder="他/她常用的名字或昵称">
		  <input type="hidden" name="province" id="province" class="form-control" placeholder="他/她所在的省份">
		  <input type="hidden" name="city" id="city" class="form-control" placeholder="他/她所在的城市"> 	
		  <!-- <span id="search-button" class="input-group-addon "></span> -->
		  <input type="submit"  id="search-button" class="input-group-addon " value=""/>
	</div>
</form> 	 

<div id="toggle">&nbsp;</div>
<div id="demo-settings" style="display: none;"> 
    <h2 style="clear:both;">选择背景颜色</h2>
    <div class="hr"></div> 
    <span id="whitey" class="change" title="whitey">&nbsp;</span>
    <span id="a60degree_gray" class="change" title="60degree_gray">&nbsp;</span>
    <span id="a45degreee_fabric" class="change" title="45degreee_fabric">&nbsp;</span>
    <span id="bgnoise_lg" class="last change" title="bgnoise_lg">&nbsp;</span>

    <span id="brushed_alu" class="change" title="brushed_alu">&nbsp;</span>
    <span id="circles" class="change" title="circles">&nbsp;</span>
    <span id="concrete_wall_2" class="change" title="concrete_wall_2">&nbsp;</span>
    <span id="cubes" class="last change" title="cubes">&nbsp;</span>

    <span id="elegant_grid" class="change" title="elegant_grid">&nbsp;</span>
    <span id="fabric_1" class="change" title="fabric_1">&nbsp;</span>
    <span id="fancy_deboss" class="change" title="fancy_deboss">&nbsp;</span>
    <span id="grunge_wall" class="last change" title="grunge_wall">&nbsp;</span>

    <span id="light_honeycomb" class="change" title="light_honeycomb">&nbsp;</span>
    <span id="noise_pattern_with_crosslines" class="change" title="noise_pattern_with_crosslines">&nbsp;</span>
    <span id="paven" class="change" title="paven">&nbsp;</span>
    <span id="roughcloth" class="last change" title="roughcloth">&nbsp;</span>

    <span id="silver_scales" class="change" title="silver_scales">&nbsp;</span>
    <span id="smooth_wall" class="change" title="smooth_wall">&nbsp;</span>
    <span id="soft_circle_scales" class="change" title="soft_circle_scales">&nbsp;</span>
    <span id="soft_wallpaper" class="last change" title="soft_wallpaper">&nbsp;</span>

    <span id="subtle_freckles" class="change" title="subtle_freckles">&nbsp;</span>
    <span id="washi" class="change" title="washi">&nbsp;</span>
    <span id="wavecut" class="change" title="wavecut">&nbsp;</span>
    <span id="white_carbon" class="last change" title="white_carbon">&nbsp;</span>

    <span id="bright_squares" class="change" title="bright_squares">&nbsp;</span>
    <span id="vichy" class="change" title="vichy">&nbsp;</span>
    <span id="xv" class="change" title="xv">&nbsp;</span>
    <span id="wood1" class="last change" title="wood1">&nbsp;</span>

    <span id="wood_pattern" class="change" title="wood_pattern">&nbsp;</span>
    <span id="wood_1" class="change" title="wood_1">&nbsp;</span>
    <span id="dark_wood" class="change" title="dark_wood">&nbsp;</span>
    <span id="black_denim" class="last change" title="black_denim">&nbsp;</span>

    <span id="black-Linen" class="change" title="black-Linen">&nbsp;</span>
    <span id="black_linen_v2" class="change" title="black_linen_v2">&nbsp;</span>    
    <span id="random_grey_variations" class="change" title="random_grey_variations">&nbsp;</span>
    <span id="tactile_noise" class="last change" title="tactile_noise">&nbsp;</span>
    <div class="hr"></div> 
    <button id="saveColor" type="button" class="btn btn-primary">保存</button>
  </div>


<div id="qq-login">
<?php if(Yii::app()->user->isGuest){?>
	<a href="#" onclick='qqLogin()'><img src="<?php echo Yii::app()->baseUrl; ?>/img/qq-login.png" class="img-responsive" alt="Responsive image"></a>
<?php } ?>
</div>
