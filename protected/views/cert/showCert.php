<?php
$this->pageTitle=Yii::app()->name;
?>

<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/flipclock.css">
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/flipclock.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/lang/en-cn.js"></script>

<?php echo $certificate->lover_1_name?>
<br/>
<span style="color:red">love</span>
<br/>
<?php echo $certificate->lover_2_name?>
<div class="clock"></div>

<script type="text/javascript">
	var clock = $('.clock').FlipClock(3600 * 24 * 3, {
		clockFace: 'DailyCounter',
		language : 'cn'
	});
</script>

