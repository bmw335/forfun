<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<script>
 function qqLogin()
 {
   //以下为按钮点击事件的逻辑。注意这里要重新打开窗口
   //否则后面跳转到QQ登录，授权页面时会直接缩小当前浏览器的窗口，而不是打开新窗口

   //官方demo  "_self" => "TencentLogin"
   var A=window.open("<?php echo Yii::app()->baseUrl; ?>/index.php/qqLogin/login","_self", 
   "width=450,height=320,menubar=0,scrollbars=1,resizable=1,status=1,titlebar=0,toolbar=0,location=1");
 } 
</script>

 <a href="#" onclick='qqLogin()'><img src="<?php echo Yii::app()->baseUrl;?>/img/Connect_logo_5.png"></a>


<a href="<?php echo Yii::app()->baseUrl; ?>/index.php/qqLogin/login">qq登录(mock)</a>
<br/>
<span id="qqLoginBtn"></span>
<script type="text/javascript">
    QC.Login({
       btnId:"qqLoginBtn"    //插入按钮的节点id
});
</script>

